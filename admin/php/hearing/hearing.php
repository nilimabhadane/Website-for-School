
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
		extract($params);
        
        $entry_date=date("Y-m-d");
        $description="empty";

		$sql = "INSERT INTO `attendance` (`ID`, `adate`, `mnth`, `tname`, `rno`,`sname`,`nofp`,`nofa`,`holi`) VALUES (NULL, '$adate', '$mnth', '$tname', '$rno','$sname','$nofp','$nofa','$holi');";
		
	       $result = mysqli_query($this->conn, $sql) or die("error to insert employee data");


         echo '{"msg":"saved successfully","type":"success"}';

	}
	
	
	function getRecords($params) {
		$rp = isset($params['rowCount']) ? $params['rowCount'] : 10;
		
		if (isset($params['current'])) { $page  = $params['current']; } else { $page=1; $params['current']=0;};  
        $start_from = ($page-1) * $rp;
		
		$sql = $sqlRec = $sqlTot = $where = '';
		
		$where .=" where type='hearing'";
		if( !empty($params['searchPhrase']) ) {   
			$where .=" and ";
			$where .=" ( ID LIKE '".$params['searchPhrase']."%' "; 
			$where .=" OR adate LIKE '".$params['searchPhrase']."%'";   
			$where .=" OR mnth LIKE '".$params['searchPhrase']."%' ";
		
			 $where .=" OR tname LIKE '".$params['searchPhrase']."%' )";
			 $where .=" OR rno LIKE '".$params['searchPhrase']."%' )";
			 $where .=" OR sname LIKE '".$params['searchPhrase']."%' )";
			 $where .=" OR nofp LIKE '".$params['searchPhrase']."%' )";
			 $where .=" OR nofa LIKE '".$params['searchPhrase']."%' )";
			 $where .=" OR holi LIKE '".$params['searchPhrase']."%' )";
	   }
	   if( !empty($params['sort']) ) {  
			$where .=" ORDER By ".key($params['sort']) .' '.current($params['sort'])." ";
		}else{
			$where.="order by ID DESC";
		}
	   // getting total number records without any search
		$sql = "SELECT *,(select victem_name from case_master where ID=hearing_master.case_no) as victem_name FROM `hearing_master`";
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
		

        extract($params);
		$sql = "UPDATE `attendance` SET `adate` = '" . $params["adate"]."',`mnth` = '" . $params["mnth"]."',
		`tname` = '" . $params["tname"]."',`rno` = '" . $params["rno"]."',`sname` = '" . $params["sname"]."',
		`nofp` = '" . $params["nofp"]."'`nofa` = '" . $params["nofa"]."',`holi` = '" . $params["holi"]."' WHERE ID='".$params["edit_ID"]."'";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to update employee data");
	}
	
	function deleteEmployee($params) {
		$data = array();
		//print_R($_POST);die;
		$sql = "delete from `attendance` WHERE ID='".$params["id"]."'";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to delete employee data");
	}
}
?>
	