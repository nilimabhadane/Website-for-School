<?php
    $id=$_GET['id'];
    require_once("../config.php");
    $db = new dbObj();
  $conn =  $db->getConnstring();
  $sql="select *  from add_marks where ID='$id'";
  $result = mysqli_query($conn,$sql);
  $rows =mysqli_fetch_array($result);
  
    //mysqli_close($conn);
   //print_r($rows);
?>

      <div class="row">
         <div class="col-md-6">
                  <div class="form-group">
                    <label for="name" class="control-label">Date</label>
                    <input value="<?php echo $rows['mdate'] ?>" type="date" class="form-control"  name="mdate"/>
                  </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
                    <label for="dob" class="control-label">Test Type</label>
                   <input value="<?php echo $rows['testtype'] ?>" type="text" class="form-control"  name="testtype"/>
                    
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
                    <label for="dob" class="control-label">Subject Name</label>
                    <input type="text" class="form-control"  name="subname" required value="<?php echo $rows['subname'] ?>" />
                  </div>
          </div>
          <div class="col-md-6">
          <div class="form-group">
                    <label for="dob" class="control-label">Marks</label>
                    <input type="text" class="form-control"  name="marks" required value="<?php echo $rows['marks'] ?>" />
                  </div>
          </div>
          <div class="col-md-6">
          <div class="form-group">
                    <label for="dob" class="control-label">Total Marks</label>
                    <input type="text" class="form-control"  name="totmark" required value="<?php echo $rows['totmark'] ?>" />
                  </div>
          </div>

             

                </div>  
