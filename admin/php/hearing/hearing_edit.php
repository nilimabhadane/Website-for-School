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
         
        <div class="col-md-12">
          <div class="form-group">
                    <label for="dob" class="control-label">Date:</label>
                    <input type="date" value="<?php echo $rows['adate'] ?>" class="form-control"  name="adate"/>
                  </div>
        </div>
        
        <div class="col-md-12">
          <div class="form-group">
                    <label for="dob" class="control-label">Month</label>
                   <select name="mnth">
                    <option>January</option>
                    <option>February</option>
                    <option>March</option>
                    <option>April</option>
                    <option>May</option>
                    <option>June</option>
                    <option>July</option>
                    <option>August</option>
                    <option>September</option>
                    <option>October</option>
                    <option>November</option>
                    <option>December</option>

                   </select>
                  </div>
          </div>  
         <div class="col-md-12">
                  <div class="form-group">
                    <label for="address" class="control-label">Victem Name:</label>
             
                  <select  name="victem_name" class="form-control">
                   <?php     
                  $resu1=mysqli_query($conn,"select * from case_master");
                  while($rows1=mysqli_fetch_array($resu1)){ ?>
                    <option value="<?php echo $rows1['ID']; ?>"  
           <?php if($rows1['ID']==$rows['case_no']){ echo "selected"; } ?>
          
          > <?php echo $rows1['victem_name']; ?> </option>
<?php } ?>
                  </select>
                  </div>
             </div>


              <div class="col-md-12">
              <div class="form-group">
                <label for="address" class="control-label">Hearing Date:</label>
                  <input type="date" value="<?php echo $rows['hearing_date'] ?>" class="form-control"  name="date"/>
                </div>
              </div>
         
    </div>  

