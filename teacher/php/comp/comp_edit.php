<?php
    $id=$_GET['id'];
    require_once("../config.php");
    $db = new dbObj();
  $conn =  $db->getConnstring();
  $sql="select *  from add_comp where ID='$id'";
  $result = mysqli_query($conn,$sql);
  $rows =mysqli_fetch_array($result);
  
    //mysqli_close($conn);
   //print_r($rows);
?>

      <div class="row">
         <div class="col-md-6">
                  <div class="form-group">
                    <label for="name" class="control-label">Date</label>
                    <input value="<?php echo $rows['cdate'] ?>" type="date" class="form-control"  name="cdate"/>
                  </div>
        </div>

         <div class="col-md-6">
          <div class="form-group">
                    <label for="dob" class="control-label">Teacher Name</label>
                    <input value="<?php echo $rows['tname'] ?>" type="text" class="form-control"  name="tname"/>
                    
                  </div>
          </div>
          <div class="col-md-6">
          <div class="form-group">
                    <label for="dob" class="control-label">Roll No</label>
                    <input value="<?php echo $rows['rno'] ?>" type="text" class="form-control"  name="rno"/>
                    
                  </div>
          </div>
          <div class="col-md-6">
          <div class="form-group">
                    <label for="dob" class="control-label">Student Name</label>
                    <input type="text" class="form-control"  name="sname" required value="<?php echo $rows['sname'] ?>" />
                  </div>
          </div>
          <div class="col-md-6">
          <div class="form-group">
                    <label for="dob" class="control-label">Standard</label>
                    <input type="text" class="form-control"  name="std" required value="<?php echo $rows['std'] ?>" />
                  </div>
          </div>
          <div class="col-md-6">
          <div class="form-group">
                    <label for="dob" class="control-label">Division</label>
                    <input type="text" class="form-control"  name="divsn" required value="<?php echo $rows['divsn'] ?>" />
                  </div>
          </div>
          <div class="col-md-6">
          <div class="form-group">
                    <label for="dob" class="control-label">Contact</label>
                    <input type="text" class="form-control"  name="cont" required value="<?php echo $rows['cont'] ?>" />
                  </div>
          </div>
          <div class="col-md-6">
          <div class="form-group">
                    <label for="dob" class="control-label">Complaint</label>
                    <input type="text" class="form-control"  name="cdescr" required value="<?php echo $rows['cdescr'] ?>" />
                  </div>
          </div>

             

                </div>  
