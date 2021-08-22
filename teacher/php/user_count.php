<!--?php
session_start();
include("config.php");
$db = new dbObj();
$conn =  $db->getConnstring();

if(isset($_REQUEST['case_count']))
{
 $sql="select count(*) as counter from add_comp";
}
elseif(isset($_REQUEST['count_adv']))
{

$sql="select count(*) as counter from teacher";

}elseif(isset($_REQUEST['hearing_entries'])){

$sql="select count(*) as counter from hearing_master";
}elseif(isset($_REQUEST['today_hearing'])){

$date=date("Y-m-d");
$sql="select count(*) as counter from hearing_master where hearing_date='$date'";
}
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
echo $row['counter'];
?-->