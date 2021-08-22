<?php
    $id=$_GET['id'];
    require_once("../config.php");
    $db = new dbObj();
  $conn =  $db->getConnstring();
  $sql="select *  from user where ID='$id'";
  $result = mysqli_query($conn,$sql);
  $rows =mysqli_fetch_array($result);
  
    //mysqli_close($conn);
   //print_r($rows);
?>

      <div class="row">
         <div class="col-md-12">
                  <div class="form-group">
                    <label for="name" class="control-label">User Name:</label>
                    <input value="<?php echo $rows['user_name'] ?>" type="text" class="form-control"  name="uname"/>
                  </div>
        </div>

        <div class="col-md-12">
          <div class="form-group">
                    <label for="dob" class="control-label">Email ID</label>
                    <input type="text" class="form-control"  name="email" required value="<?php echo $rows['email'] ?>" />
                  </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                    <label for="dob" class="control-label">Password</label>
                    <input type="text" class="form-control"  name="pass" required value="<?php echo $rows['password'] ?>" />
                  </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                    <label for="dob" class="control-label">User Type</label>
                    <input type="text" class="form-control"  name="utype" required value="<?php echo $rows['utype'] ?>" />
                  </div>
          </div>

             

                </div>  
