<?php
    $id=$_GET['id'];
    require_once("../config.php");
    $db = new dbObj();
  $conn =  $db->getConnstring();
  $sql="select *  from add_teacher where ID='$id'";
  $result = mysqli_query($conn,$sql);
  $rows =mysqli_fetch_array($result);
  
    //mysqli_close($conn);
   //print_r($rows);
?>

      <div class="row">
         <div class="col-md-12">
                  <div class="form-group">
                    <label for="name" class="control-label">Teacher Name:</label>
                    <input value="<?php echo $rows['tname'] ?>" type="text" class="form-control"  name="tname"/>
                  </div>
        </div>

        <div class="col-md-12">
          <div class="form-group">
                    <label for="dob" class="control-label">Address</label>
                    <input type="text" class="form-control"  name="addr" required value="<?php echo $rows['addr'] ?>" />
                  </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                    <label for="dob" class="control-label">City</label>
                    <input type="text" class="form-control"  name="city" required value="<?php echo $rows['city'] ?>" />
                  </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                    <label for="dob" class="control-label">Contact</label>
                    <input type="text" class="form-control"  name="cont" required value="<?php echo $rows['cont'] ?>" />
                  </div>
          </div>
          <div class="form-group">
                    <label for="dob" class="control-label">Qualification</label>
                    <input type="text" class="form-control"  name="quali" required value="<?php echo $rows['quali'] ?>" />
                  </div>
          </div>
          <div class="form-group">
                    <label for="dob" class="control-label">Specialization</label>
                    <input type="text" class="form-control"  name="spec" required value="<?php echo $rows['spec'] ?>" />
                  </div>
          </div>
          <div class="form-group">
                    <label for="dob" class="control-label">Subject Name</label>
                    <input type="text" class="form-control"  name="subname" required value="<?php echo $rows['subname'] ?>" />
                  </div>
          </div>

             

                </div>  
