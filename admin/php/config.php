<?php
Class dbObj{

    var $servername = "localhost";
	var $username = "root";
	var $password = "";
	var $dbname = "school";
	//var $dbname = "court_dairy";
	var $conn;


	function getConnstring() {
		$con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());

		/* check connection */
		if (mysqli_connect_errno()) {
			
		} else {
			$this->conn = $con;
		}
		return $this->conn;
	}



	function sendsms($mobile,$msg) {
	    
	    $msg=urlencode($msg);
	    $mobile=urlencode($mobile);
	    $username = urlencode('shaikhsir');
	    $password = urlencode('shaikh123');
	    $sender = urlencode('SCHOOL');
	    $channel= urlencode('Trans');
	    $DCS=0;
    	$flashsms=0;
    	$route_id=15;
	    $url='http://whm.sms.logicunion.in/api/mt/SendSMS?';
	    
	    $data = 'user=' . $username . '&password=' . $password .'&senderid='.$sender.'&channel='.$channel.'&DCS='.$DCS.'&flashsms='.$flashsms.'&number=' . $mobile . "&text=" . $msg.'&route='.$route_id;
 
     	// Send the GET request with cURL
     	
	   $ch = curl_init($url. $data);
	   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	   $response = curl_exec($ch);
	   curl_close($ch); 
	    
		
		return $response;
	}
}

?>