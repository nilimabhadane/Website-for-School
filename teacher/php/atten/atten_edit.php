<?php
    $id=$_GET['id'];
    require_once("../config.php");
    $db = new dbObj();
  $conn =  $db->getConnstring();
  $sql="select *  from attendance where ID='$id'";
  $result = mysqli_query($conn,$sql);
  $rows =mysqli_fetch_array($result);
  
    //mysqli_close($conn);
   //print_r($rows);
?>

      <div class="row">
         <div class="col-md-6">
                  <div class="form-group">
                    <label for="name" class="control-label">Date</label>
                    <input value="<?php echo $rows['adate'] ?>" type="date" class="form-control"  name="adate"/>
                  </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
                    <label for="dob" class="control-label">Month</label>
                   <input value="<?php echo $rows['mnth'] ?>" type="text" class="form-control"  name="mnth"/>
                    
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
                    <label for="dob" class="control-label">No of Day Present</label>
                    <input type="text" class="form-control"  name="nofp" required value="<?php echo $rows['nofp'] ?>" />
                  </div>
          </div>
          <div class="col-md-6">
          <div class="form-group">
                    <label for="dob" class="control-label">No of Day Abscent</label>
                    <input type="text" class="form-control"  name="nofa" required value="<?php echo $rows['nofa'] ?>" />
                  </div>
          </div>
          <div class="col-md-6">
          <div class="form-group">
                    <label for="dob" class="control-label">No of Day Holiday</label>
                    <input type="text" class="form-control"  name="holi" required value="<?php echo $rows['holi'] ?>" />
                  </div>
          </div>

             

                </div>  
