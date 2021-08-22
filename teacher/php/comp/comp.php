
<?php
	//include connection file 
	include_once("../config.php");
		
	$db = new dbObj();
	$connString =  $db->getConnstring();

	$params = $_REQUEST;
	
	$action = isset($params['action']) != '' ? $params['action'] : '';
	$empCls = new Employee($connString);

	switch($action) {
	 case 'add':
		$empCls->insertEmployee($params);
	 break;
	 case 'edit':
		$empCls->updateEmployee($params);
	 break;
	 case 'delete':
		$empCls->deleteEmployee($params);
	 break;
	 default:
	 $empCls->getEmployees($params);
	 return;
	}
	
	class Employee {
	protected $conn;
	protected $data = array();
	function __construct($connString) {
	$this->conn = $connString;
	}
	
	public function getEmployees($params) {
		
		$this->data = $this->getRecords($params);
		
		echo json_encode($this->data);
	}
	function insertEmployee($params) {
		 //$img_name=rand(1111,9999).$_FILES['photo']['name'];
		 //$tmp_name=$_FILES['photo']['tmp_name'];
		 extract($params);

		   $sql = "INSERT INTO `school`.`add_comp` (`ID`, `cdate`,`tname`, `rno`, `sname`, `std`, `divsn`, `cont`,`cdescr`) VALUES (NULL, '$cdate','$tname', '$rno', '$sname', '$std', '$divsn', '$cont','$cdescr')";
		
	       $result = mysqli_query($this->conn, $sql) or die("error to insert addmision data");
           move_uploaded_file($tmp_name,"../../uploads/".$img_name);

            echo '{"msg":"saved successfully","type":"success"}';


	//	move_uploaded_file($_FILES['img']['tmp_name'],"../uploads/".$img_name);
	}
	
	
	function getRecords($params) {
		$rp = isset($params['rowCount']) ? $params['rowCount'] : 10;
		
		if (isset($params['current'])) { $page  = $params['current']; } 
		else { 
			$page=1;
			$params['current']=0; 
		};  
        $start_from = ($page-1) * $rp;
		
		$sql = $sqlRec = $sqlTot = $where = '';
		
		
		if( !empty($params['searchPhrase']) ) {   
			$where .=" WHERE ";
			$where .=" ( ID LIKE '".$params['searchPhrase']."%' "; 
			$where .=" OR cdate LIKE '".$params['searchPhrase']."%'";
			$where .=" OR tname LIKE '".$params['searchPhrase']."%'";
			$where .=" OR rno LIKE '".$params['searchPhrase']."%'";
			$where .=" OR sname LIKE '".$params['searchPhrase']."%'";
			$where .=" OR std LIKE '".$params['searchPhrase']."%'"; 
			$where .=" OR divsn LIKE '".$params['searchPhrase']."%'"; 
			$where .=" OR cont LIKE '".$params['searchPhrase']."%'"; 
			$where .=" OR cdescr LIKE '".$params['searchPhrase']."%'"; 
			
	   }
	   if( !empty($params['sort']) ) {  
			$where .=" ORDER By ".key($params['sort']) .' '.current($params['sort'])." ";
		}else{

            $where .= "ORDER BY ID DESC";

		}
	   // getting total number records without any search
		$sql = "SELECT * FROM `add_comp` ";
		$sqlTot .= $sql;
		$sqlRec .= $sql;
		
		//concatenate search sql if value exist
		if(isset($where) && $where != '') {

			$sqlTot .= $where;
			$sqlRec .= $where;
		}
		if ($rp!=-1)
		$sqlRec .= " LIMIT ". $start_from .",".$rp;
		
		
		$qtot = mysqli_query($this->conn, $sqlTot) or die("error to fetch tot employees data");
		$queryRecords = mysqli_query($this->conn, $sqlRec) or die("error to fetch employees data");
		
		while( $row = mysqli_fetch_assoc($queryRecords) ) { 



			$data[] = $row;
		}
if(empty($data)){
  $data=array();
}
		$json_data = array(
			"current"            => intval($params['current']), 
			"rowCount"            => 10, 			
			"total"    => intval($qtot->num_rows),
			"rows"            => $data   // total data array
			);
		
		return $json_data;
	}





	function updateEmployee($params) {
		


		$sql = "UPDATE `add_comp` SET `cdate` = '" . $params["cdate"]."',`tname` = '" . $params["tname"]."',`rno` = '" . $params["rno"]."',`sname` = '" . $params["sname"]."',`std` = '" . $params["std"]."',`divsn` = '" . $params["divsn"]."',`cont` = '" . $params["cont"]."',`cdescr` = '" . $params["cdescr"]."' WHERE ID='".$params["edit_ID"]."'";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to update employee data");
	}
	
	function deleteEmployee($params) {

        

		$data = array();
		//print_R($_POST);die;
		$sql = "delete from `add_comp` WHERE ID='".$params["id"]."'";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to delete employee data");
	}
}
?>
	