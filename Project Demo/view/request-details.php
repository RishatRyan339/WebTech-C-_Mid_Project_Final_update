<?php 
	

//DB conncetion
include('../model/userModel.php');
$con = getConnection(); 
error_reporting(0);
//validating Session

if(isset($_POST['submit'])) {
  $rid = $_GET['requestId'];
  $assignto = $_POST['assignto'];
  $assigntime = date('d-m-y h:m:s');
  
  $sql = "UPDATE tblfirereport SET assignTo='$assignto', assignTime='$assigntime', status='Assigned' WHERE id='$rid'";
  
  $result = $con->query($sql);
  
  if ($result) {
    header("Location: fire_assigned-requests.php");
    exit;
   //   echo "Record updated successfully";
  } else {
      echo "Error updating record: " . $con->error;
  }
}
//Code for assign request
//     if(isset($_POST['submit']))
//    {
    
//     $rid=$_GET['requestId'];
//    $assignto=$_POST['assignto'];
//     $assigntime=date('d-m-y h:m:s');
// // //$query=mysqli_query($con, "UPDATE tblfirereport SET assignTo='$assignto',assignTime='$assigntime',status='Assigned' where id='$rid'");
//  $sql = "UPDATE tblfirereport SET assignTo='$assignto',assignTime='$assigntime',status='Assigned' where id='$rid";
//  $result = $con->query($sql);

//  if ($query) {

//  echo "";
//    }else{
//  echo "";
//    }

 
// Code for History
    if(isset($_POST['takeaction']))
  {
    $rid=$_GET['requestId'];
    $status=$_POST['status'];
    $remark=$_POST['remark'];
    $sql = "INSERT into tblfirerequesthistory (requestId,status,remark) values('$rid','$status','$remark')";
$result = $con->query($sql);
//$query= "INSERT into tblfirerequesthistory (requestId,status,remark) values('$rid','$status','$remark')");
if ($query) {
$query=mysqli_query($con, "update tblfirereport set status='$status' where id='$rid'");    

echo'Request has been updated';
//echo "<script>window.location.href ='all-requests.php'</script>";
header('Location:all-requests.php');
  }else{
echo"Something Went Wrong. Please try again";
    }
  }
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>





<table border="5" cellspacing="0">
        <tr><th><h1>&nbsp;&nbsp;&nbsp;Welcome&nbsp;&nbsp;&nbsp;</h2>Admin</th>
    <th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<h2></h2></th>
    <th><h2>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</h2></th>
    <th><h2>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</h2></th>
    <th><h2>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</h2></th>
    <th><h2>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</h2></th>
    <th><h2>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</h2></th>
    <th><h2>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</h2></th>
    <th><h2>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</h2></th>
    <th><h2>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</h2></th>
    <th><h2>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</h2></th>
    
    </tr>
        <tr><td>
        <table>
        <tr><td><b><u>Fire Teams</td></tr>
        <tr><td><a href="add_fireteam.php">Add</td></tr>
        <tr><td><a href="manage_fire.php">Manage</td></tr>
         </td>
        </table>
  <th colspan="10" rowspan="2" overflow="hidden">  &nbsp;

 <!---------------------------------------------------------------------------ComPLEX ONE------------------------------- --> 
 


 <?php $query=mysqli_query($con,"select * from tblfirereport 
join tblteams on tblteams.id=tblfirereport.assignTo
    where tblfirereport.id='$rid'");
$count=mysqli_num_rows($query);
if($count>0){
while($row=mysqli_fetch_array($query)){ ?>


 <table class="table table-bordered"  width="100%" cellspacing="0">
    <tr>
    <th>Team Name</th> 
    <td><?php echo $row['teamName'];?></td>
    </tr>

    <tr>
    <th>Team Leader Name</th> 
    <td><?php echo $row['teamLeaderName'];?></td>
    </tr>


    <tr>
    <th>TL Mobile No.</th> 
    <td><?php echo $row['teamLeadMobno'];?></td>
    </tr>

 <tr>
    <th>Team Members</th> 
    <td><?php echo $row['teamMembers'];?></td>
    </tr>
     <tr>
    <th>Assigned Time</th> 
    <td><?php echo $row['assignTme'];?></td>
    </tr>

</table>
<?php } }  else {?>
<h4 ></h4>
<?php } ?> 

 <?php if($row['assignTo']==''): 
    ?>
                                           
<?php else: 
$rstatus=$row['status'];
if($rstatus=='Assigned' || $rstatus=='Team On the Way' || $rstatus=='Fire Relief Work in Progress'):?>
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#takeaction">Take Action</button>
<?php 
endif;
endif;?>
<?php  ?>
        
 



<!--------------------------------------------------------------- TAKE ACTION OTHER LINK-------------------------------------------------- -->





  <form method="post" name="adminprofile">
  <?php
  $rid = $_GET['requestId'];
  $query = mysqli_query($con, "SELECT * from tblfirereport WHERE id='$rid'");
  while ($row = mysqli_fetch_array($query)) {
  ?>
    <center>
      <table border="1" cellspacing="1">
        <tr>
          <th>Full Name</th>
          <td><?php echo $row['fullName']; ?></td>
        </tr>

        <tr>
          <th>Mobile Number</th>
          <td><?php echo $row['mobileNumber']; ?></td>
        </tr>

        <tr>
          <th>Location</th>
          <td><?php echo $row['location']; ?></td>
        </tr>

        <tr>
          <th>Message</th>
          <td><?php echo $row['message']; ?></td>
        </tr>

        <tr>
          <th>Reporting Time</th>
          <td><?php echo $row['postingDate']; ?></td>
        </tr>
      </table>
    </center>
  <?php } ?>
</form>

<!---------------------------------------------------------------After selected View2nd Operation-------------------------------------------------- -->



<form method="post">
          <p>  <select name="assignTo" required="true">
            <option value="">Select Team</option>
            <?php $sql=mysqli_query($con,"select ID,teamName,teamLeaderName from tbl_fireteam ");
            while ($result=mysqli_fetch_array($sql)) {
            ?>
            <option value="<?php echo $result['ID'];?>"><?php echo $result['teamName'];?>-(<?php echo $result['teamLeaderName'];?>)</option>
        <?php } ?>
            </select></p>
            <p>
     <input type="submit" name="submit" id="submit">   </p> 
   
 
     
      
      
  </form>
        




<!---------------------------------------------------------------5th Operation-------------------------------------------------- -->


<?php $query=mysqli_query($con,"select * FROM tblfirereport 
join tbl_fireteam on tbl_fireteam.id=tblfirereport.assignTo
    where tblfirereport.id='$rid'");
$count=mysqli_num_rows($query);
if($count>0){
while($row=mysqli_fetch_array($query)){ ?>



<table>
    <tr>
    <th>Team Name</th> 
    <td><?php echo $row['teamName'];?></td>
    </tr>

    <tr>
    <th>Team Leader Name</th> 
    <td><?php echo $row['teamLeaderName'];?></td>
    </tr>


    <tr>
    <th>TL Mobile No.</th> 
    <td><?php echo $row['teamLeadMobno'];?></td>
    </tr>

 <tr>
    <th>Team Members</th> 
    <td><?php echo $row['teamMembers'];?></td>
    </tr>
     <tr>
    <th>Assigned Time</th> 
    <td><?php echo $row['assignTime'];?></td>
    </tr>

</table>
<?php } }  else {?>
<h4>Not Assigned Yet</h4>
<?php } ?>       
<!---------------------------------------------------------------3rd Operation-------------------------------------------------- -->


<!-- Test Tracking History --->
<?php
/* */
$ret=mysqli_query($con,"select * from tblfirerequesthistory where requestId='$rid'");
$num=mysqli_num_rows($ret);
?>


                       
<?php if($num>0){
?>
 <table cellspacing="0">
<tr>
    <th>Remark</th>
    <th>Status</th>
    <th>Remark Date</th>
<?php while($result=mysqli_fetch_array($ret)){?>
</tr>
    <tr>
    <td><?php echo $result['remark'];?></td> 
    <td><?php echo $result['status'];?></td>
    <td><?php echo $result['postingDate'];?></td>
    </tr>

<?php } // End while loop?>

</table>
         <?php
       //end if   
     } else { ?>    
<h4> No Tracking history found </h4>
         <?php } ?>           

         </form>

<!---------------------------------------------------------------4th Operation-------------------------------------------------- -->
<?php 

/*<form method="post">
          <p>  <select name="assignto" required="true">
            <option value="">Select Team</option>
            <?php $sql=mysqli_query($con,"select ID,teamName,teamLeaderName from tbl_fireteam");
            while ($result=mysqli_fetch_array($sql)) {
            ?>
            <option value="<?php echo $result['ID'];?>"><?php echo $result['teamName'];?>-(<?php echo $result['teamLeaderName'];?>)</option>
        <?php } ?>
            </select></p>
            <p>
     <input type="submit" name="submit" id="submit">   </p> 
   
 
     
        <button data-dismiss="modal">Close</button>
      
  </form> */


; ?>






 <!---------------------------------------------------------------------------This is the working window------------------------------- --> 

   

 <!---------------------------------------------------------------------------This is the working window------------------------------- --> 
        <!---Table STart-->
        <tr><td>
        <table>    
        <tr><td><b><u>Medic Teams</td></tr>
        <tr><td><a href="add_medicteam.php">Add</td></tr>
        <tr><td><a href="manage_medic.php">Manage</td></tr></table>
     <!------------------------------------------Table END-------------------------------------->     
    </td>
        </td> 
        <th colspan="10">  
       
    </tr>
        <tr><td>
            <table>
       <p><tr><td><b><u>Fire Alerts</td></tr>
       <p><tr><td><a href="fire_new-requests.php">New Requests</td></tr>
       <p><tr><td><a href="fire_assigned-requests.php">Assigned Requests</td></tr>
       <p><tr><td><a href="fire_team-ontheway-requests.php">On the way</td></tr>
       <p><tr><td><a href="fire_workin-progress-requests.php">Work in progress</td></tr>
       <p><tr><td><a href="fire_completed-requests.php">Completed Request</td></tr>
       <p><tr><td><a href="fire_all-requests.php">All Requests</td></tr></table>
       <th colspan="10" rowspan="4">  
        <img src="shutterstock.jpg" height="500px" width="800px"></th>
    </tr>
        
       <!--Table Start -->     
   <tr><td>
        <table>
       <p><tr><td><b><u>Fire Reports</td></tr>
       <p><tr><td>B/W Dates</td></tr>
       <p><tr><td>Search</td></tr>
    </table>
         <!--Table End -->   
       
         <th colspan="10" rowspan="4">    &nbsp;</tr>
 <!--Table Start -->     
   <tr><td>

   
        <table>
       <p><tr><td><b><u>Medic Alerts</td></tr>
       <p><tr><td><a href="medic_new-requests.php">New Requests</td></tr>
       <p><tr><td><a href="medic_assigned-requests.php">Assigned Requests</td></tr>
       <p><tr><td><a href="medic_team-ontheway-requests.php">On the way</td></tr>
       <p><tr><td><a href="medic_workin-progress-requests.php">Work in progress</td></tr>
       <p><tr><td><a href="medic_completed-requests.php">Completed Request</td></tr>
       <p><tr><td><a href="medic_all-requests.php">All Requests</td></tr>
    </table>
    <th colspan="10"></th>
    
         <!--Table End -->   
    </tr>
    <!--Table Start -->     
   <tr><td>
        <table>
       <p><tr><td><b><u>Medic Reports</td></tr>
       <p><tr><td>B/W Dates</td></tr>
       <p><tr><td>Search</td></tr>

    </table>
    <th colspan="10">
         <!--Table End -->   
      
        
        <tr><td><a href="website_manage.php"></td>
        <th colspan="10" rowspan="3"></th>
   
    </tr>

        <tr><td><a href="fire_weather.php">Fire Weather</td></tr>
        <tr><td><a href="logout.php">Logout</td></tr>
</table>


<hr>


</table>



</body>
</html>
<?php  ?>