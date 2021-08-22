
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
		$sql = "INSERT INTO `add_student` (`ID`,`rno`,`sname`, `addr`, `city`, `cont`, `std`, `div`, `uname`, `pass`) VALUES (NULL, '$rno','$sname', '$addr', '$city', '$cont', '$std', '$div', '$uname', '$pass');";
		
	       $result = mysqli_query($this->conn, $sql) or die("error to insert employee data");

	
         echo '{"msg":"saved successfully","type":"success"}';

         //$db = new dbObj();
         //$db->sendsms($cont,"Dear Parent,\nyour child  $sname has been registered\nusername : $uname\npassword : $pass\n thank you for get admission in Jai Hind School");

	}
	
	
	function getRecords($params) {
		$rp = isset($params['rowCount']) ? $params['rowCount'] : 10;
		
		if (isset($params['current'])) { $page  = $params['current']; } else { $page=1; $params['current']=0;};  
        $start_from = ($page-1) * $rp;
		
		$sql = $sqlRec = $sqlTot = $where = '';
		
		
		if( !empty($params['searchPhrase']) ) {   
			$where .=" WHERE ";
			$where .=" ( ID LIKE '".$params['searchPhrase']."%' "; 
			$where .=" ( rno LIKE '".$params['searchPhrase']."%' "; 
			$where .=" OR sname LIKE '".$params['searchPhrase']."%'";   
			$where .=" OR addr LIKE '".$params['searchPhrase']."%' ";
			$where .=" OR city LIKE '".$params['searchPhrase']."%' ";
			$where .=" OR cont LIKE '".$params['searchPhrase']."%' ";
			$where .=" OR std LIKE '".$params['searchPhrase']."%' ";
			$where .=" OR div LIKE '".$params['searchPhrase']."%' ";
            $where .=" OR uname LIKE '".$params['searchPhrase']."%'";
            $where .=" OR pass LIKE '".$params['searchPhrase']."%'";

            //$where .=" OR investigation_officer LIKE '".$params['searchPhrase']."%' )";
	   }
	   if( !empty($params['sort']) ) {  
			$where .=" ORDER By ".key($params['sort']) .' '.current($params['sort'])." ";
		}else{

		   $where.="order by ID DESC";	
		}
	   // getting total number records without any search
		$sql = "SELECT * FROM `add_student`";
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

		$sql = "UPDATE `add_student` SET `rno` = '$rno',`sname` = '$sname', `addr` = '$addr', `city` = '$city', `cont` = '$cont', `std` = '$std', `div` = '$div', `uname` = '$uname', `pass` = '$pass' WHERE  ID='".$params["edit_ID"]."'";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to update employee data");
	}
	
	function deleteEmployee($params) {
		$data = array();
		//print_R($_POST);die;
		$sql = "delete from `add_student` WHERE ID='".$params["id"]."'";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to delete employee data");
	}
}
?>
	