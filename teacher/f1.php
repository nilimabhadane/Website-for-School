<?php
if(isset($_POST['get_option']))
{
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 mysql_connect($host, $user, $pass);
 mysql_select_db('school');

 $rno = $_POST['get_option'];
 $find=mysql_query("select sname from add_student where rno=$rno");
 while($row=mysql_fetch_array($find))
 {
  echo "<option>".$row['sname']."</option>";
  
 }
 
 
}




?>