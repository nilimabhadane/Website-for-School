
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
		$sql = "INSERT INTO `case_master` (`ID`, `date`, `court_name`, `complaint`, `victem_name`, `fir_no`, `fir_date`, `police_station_name`, `case_details`, `investigation_officer`, `post`, `judge_name`, `govt_adv_name`, `victem_adv_name`, `vitness1`, `vitness2`) VALUES (NULL, '$date', '$court_name', '$complaint', '$victem_name', '$fir_no', '$fir_date', '$police_station_name', '$case_details', '$investigation_officer', '$post', '$judge_name', '$govt_adv_name', '$victem_adv_name', '$vitness1', '$vitness2');";
		
	       $result = mysqli_query($this->conn, $sql) or die("error to insert employee data");


         echo '{"msg":"saved successfully","type":"success"}';


	//	move_uploaded_file($_FILES['img']['tmp_name'],"../uploads/".$img_name);
	}
	
	
	function getRecords($params) {
		$rp = isset($params['rowCount']) ? $params['rowCount'] : 10;
		
		if (isset($params['current'])) { $page  = $params['current']; } else { $page=1; $params['current']=0;};  
        $start_from = ($page-1) * $rp;
		
		$sql = $sqlRec = $sqlTot = $where = '';
		
		
		if( !empty($params['searchPhrase']) ) {   
			$where .=" WHERE ";
			$where .=" ( ID LIKE '".$params['searchPhrase']."%' "; 
			$where .=" OR victem_name LIKE '".$params['searchPhrase']."%'";   
			$where .=" OR court_name LIKE '".$params['searchPhrase']."%' ";
			$where .=" OR fir_no LIKE '".$params['searchPhrase']."%' ";
			$where .=" OR fir_date LIKE '".$params['searchPhrase']."%' ";
			$where .=" OR judge_name LIKE '".$params['searchPhrase']."%' ";
			$where .=" OR govt_adv_name LIKE '".$params['searchPhrase']."%' ";
            $where .=" OR victem_adv_name LIKE '".$params['searchPhrase']."%'";

            $where .=" OR investigation_officer LIKE '".$params['searchPhrase']."%' )";
	   }
	   if( !empty($params['sort']) ) {  
			$where .=" ORDER By ".key($params['sort']) .' '.current($params['sort'])." ";
		}else{

		   $where.="order by ID DESC";	
		}
	   // getting total number records without any search
		$sql = "SELECT * FROM `case_master`";
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

		$sql = "UPDATE `case_master` SET `date` = '$date', `court_name` = '$court_name', `complaint` = '$complaint', `victem_name` = '$victem_name', `fir_no` = '$fir_no', `fir_date` = '$fir_date', `police_station_name` = '$police_station_name', `case_details` = '$case_details', `investigation_officer` = '$investigation_officer', `post` = '$post', `judge_name` = '$judge_name', `govt_adv_name` = '$govt_adv_name', `victem_adv_name` = '$victem_adv_name', `vitness1` = '$vitness1', `vitness2` = '$vitness2' WHERE  ID='".$params["edit_ID"]."'";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to update employee data");
	}
	
	function deleteEmployee($params) {
		$data = array();
		//print_R($_POST);die;
		$sql = "delete from `case_master` WHERE ID='".$params["id"]."'";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to delete employee data");
	}
}
?>
	