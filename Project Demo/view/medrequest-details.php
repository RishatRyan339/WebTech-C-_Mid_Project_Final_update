<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


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
    header("Location: medic_assigned-requests.php");
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

 <!---------------------------------------------------------------------------This is the working window------------------------------- --> 
 
 
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



<!---------------------------------------------------------------After selected View2nd Operation-------------------------------------------------- -->







<!---------------------------------------------------------------2nd Operation-------------------------------------------------- -->


<!---------------------------------------------------------------3rd Operation-------------------------------------------------- -->


<!-- Test Tracking History --->





<!--------------------------------------------------------------- TAKE ACTION OTHER LINK-------------------------------------------------- -->
























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
       <img src="firemedic.jpg" height="500px" width="800px"></th>
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
        <tr><td><a href="../controller/logout.php">Logout</td></tr>
</table>


<hr>






</body>
</html>
<?php ?>
    

        
