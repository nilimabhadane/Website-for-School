<?php
    $id=$_GET['id'];
    require_once("../config.php");
    $db = new dbObj();
  $conn =  $db->getConnstring();
  $sql="select *  from add_student where ID='$id'";
  $result = mysqli_query($conn,$sql);
  $row =mysqli_fetch_array($result);
  
    //mysqli_close($conn);
   //print_r($rows);
?>

      <div class="row">
               

         <div class="col-md-6">
                 <div class="form-group">
                    <label for="user_name" class="control-label">Roll No:</label>
                    <input type="text" class="form-control" value="<?php echo $row['rno'] ?>"  name="rno" required />
                  </div>
        </div>
         <div class="col-md-6">
                 <div class="form-group">
                    <label for="user_name" class="control-label">Student NAme:</label>
                    <input type="text" class="form-control" value="<?php echo $row['sname'] ?>"  name="sname" required />
                  </div>
        </div>
        
         <div class="col-md-6">
          <div class="form-group">
                    <label for="dob" class="control-label"> Address:</label>
                    <input type="text" class="form-control" value="<?php echo $row['addr'] ?>"  name="addr" required />
                  </div>
          </div>
             
              <div class="col-md-6">
          <div class="form-group">
                    <label for="dob" class="control-label">City:</label>
                    <input type="text" class="form-control" value="<?php echo $row['city'] ?>"  name="city" required />
                  </div>
         </div>



               <div class="col-md-6">
                  <div class="form-group">
                    <label for="email" class="control-label">Contact:</label>
                    <input type="text" class="form-control" value="<?php echo $row['cont'] ?>"  name="cont" required />
                  </div>
         </div>

        
         <div class="col-md-6">
          <div class="form-group">
                    <label for="company" class="control-label">Standard:</label>
                    <select  name="std" class="form-control">
                   <?php      include_once("php/config.php");
                       $db = new dbObj();
                       $conn =  $db->getConnstring();
                  $resu=mysqli_query($conn,"select * from add_student");
                  while($rows=mysqli_fetch_array($resu)){ ?>
                    <option <?php if($row['std']==$rows['std']){echo "selected";} ?>> <?php echo $rows['std']; ?></option>
<?php } ?>
                  </select>
                  </div>
                 </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="company" class="control-label">Division:</label>
                    <select  name="div" class="form-control">
                   <?php      include_once("php/config.php");
                       $db = new dbObj();
                       $conn =  $db->getConnstring();
                  $resu=mysqli_query($conn,"select * from add_student");
                  while($rows=mysqli_fetch_array($resu)){ ?>
                    <option <?php if($row['div']==$rows['div']){echo "selected";} ?>> <?php echo $rows['div']; ?></option>
<?php } ?>
                  </select>
                    
                  </div>
                 </div>

                 <div class="col-md-6">
          <div class="form-group">
                    <label for="dob" class="control-label">User Name:</label>
                    <input type="text" class="form-control" value="<?php echo $row['uname'] ?>"  name="uname" required />
                  </div>
         </div>
         <div class="col-md-6">
          <div class="form-group">
                    <label for="dob" class="control-label">Password:</label>
                    <input type="text" class="form-control" value="<?php echo $row['pass'] ?>"  name="pass" required />
                  </div>
         </div>
                  <!--div class="col-md-6">
          <div class="form-group">
                    <label for="company" class="control-label">FIR Date:</label>
                    <input type="date" class="form-control" value="<?php echo $row['fir_date'] ?>"  name="fir_date"/>

                    
                  </div>
                 </div>

                 <div class="col-md-6">
                  <div class="form-group">
                    <label for="address" class="control-label">Police Station Name:</label>
                    <input type="text" class="form-control" value="<?php echo $row['police_station_name'] ?>"  name="police_station_name" required />
                  </div>
               </div>


  <div class="col-md-6">
   <div class="form-group">
             <label for="gst" class="control-label">Case Details:</label>
             <input type="text" class="form-control" value="<?php echo $row['case_details'] ?>"  name="case_details" required />
           </div>
   </div>      

  <div class="col-md-6">
   <div class="form-group">
             <label for="gst" class="control-label">Investigation Officer Name:</label>
             <input type="text" class="form-control" value="<?php echo $row['investigation_officer'] ?>"  name="investigation_officer" required />
           </div>
   </div>

<div class="col-md-6">
   <div class="form-group">
             <label for="gst" class="control-label">Post:</label>
             <input type="text" class="form-control" value="<?php echo $row['post'] ?>"  name="post" required />
           </div>
   </div>
<div class="col-md-6">
   <div class="form-group">
             <label for="gst" class="control-label">Judge Name:</label>
             <input type="text" class="form-control" value="<?php echo $row['judge_name'] ?>"  name="judge_name" required />
           </div>
   </div>


   <div class="col-md-6">
                  <div class="form-group">
                    <label for="address" class="control-label">Government Advocate Name:</label>
             
                  <select  name="govt_adv_name" class="form-control">
                   <?php      include_once("php/config.php");
                       $db = new dbObj();
                       $conn =  $db->getConnstring();
                  $resu=mysqli_query($conn,"select * from advocate");
                  while($rows=mysqli_fetch_array($resu)){ ?>
                    <option <?php if($row['govt_adv_name']==$rows['name']){echo "selected";} ?>> <?php echo $rows['name']; ?> </option>
<?php } ?>
                  </select>
                  </div>
             </div>
 
<div class="col-md-4">
   <div class="form-group">
             <label for="gst" class="control-label">Victem Advocate Name:</label>
             <input type="text" class="form-control" value="<?php echo $row['victem_adv_name'] ?>" name="victem_adv_name" required />
           </div>
   </div>

   <div class="col-md-4">
   <div class="form-group">
             <label for="gst" class="control-label">Vitness 1:</label>
             <input type="text" class="form-control" value="<?php echo $row['vitness1'] ?>"  name="vitness1" required />
           </div>
   </div>
 <div class="col-md-4">
   <div class="form-group">
             <label for="gst" class="control-label">Vitness 2:</label>
             <input type="text" class="form-control" value="<?php echo $row['vitness2'] ?>"  name="vitness2" required />
           </div>
   </div-->



   


          
             

       </div>  

