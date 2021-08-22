<?php
    $id=$_GET['id'];
    require_once("../config.php");
    $db = new dbObj();
  $conn =  $db->getConnstring();
  $sql="select *  from case_master where ID='$id'";
  $result = mysqli_query($conn,$sql);
  $row =mysqli_fetch_array($result);
  
    //mysqli_close($conn);
   //print_r($rows);
?>

      <div class="row">
               

         <div class="col-md-6">
                 <div class="form-group">
                    <label for="user_name" class="control-label">Case Date:</label>
                    <input type="date" class="form-control" value="<?php echo $row['date'] ?>"  name="date" required />
                  </div>
        </div>
        
         <div class="col-md-6">
          <div class="form-group">
                    <label for="dob" class="control-label"> Court Name:</label>
                    <input type="text" class="form-control" value="<?php echo $row['court_name'] ?>"  name="court_name" required />
                  </div>
          </div>
             
              <div class="col-md-6">
          <div class="form-group">
                    <label for="dob" class="control-label">Complaint:</label>
                    <input type="text" class="form-control" value="<?php echo $row['complaint'] ?>"  name="complaint" required />
                  </div>
         </div>



               <div class="col-md-6">
                  <div class="form-group">
                    <label for="email" class="control-label">Victem Name:</label>
                    <input type="text" class="form-control" value="<?php echo $row['victem_name'] ?>"  name="victem_name" required />
                  </div>
         </div>

        
         <div class="col-md-6">
          <div class="form-group">
                    <label for="company" class="control-label">FIR No:</label>
                    <input type="text" class="form-control" value="<?php echo $row['fir_no'] ?>" name="fir_no"/>

                    
                  </div>
                 </div>

                  <div class="col-md-6">
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
   </div>



   


          
             

       </div>  

