<?php 
//DB conncetion
	
include('../controller/sessionCheck.php');
include('../model/userModel.php');
$con = getConnection();
//validating Session


    if(isset($_POST['update'])) 
{
        $teamid = $_GET['id'];
        $teamName = $_POST['teamName']; 
        $teamLeaderName = $_POST['teamLeaderName'];
        $teamLeadMobno = $_POST['teamLeadMobno'];
        $teamMembers    = $_POST['teamMembers'];
        $query = mysqli_query($con, "UPDATE tbl_fireteam SET teamName ='$teamName', teamLeaderName ='$teamLeaderName',teamLeadMobno ='$teamLeadMobno',teamMembers ='$teamMembers' WHERE ID = $teamid");
    if($query){
    echo"UPDATED";
    }else{
        echo "Error";
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
        <tr><th><h1>&nbsp;&nbsp;&nbsp;Welcome&nbsp;&nbsp;&nbsp;</h2><?php $query=mysqli_query($con,"SELECT AdminuserName FROM tbladmin ");
$cnt=1;
while($row=mysqli_fetch_array($query)){
}
?>
</th>
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





    
<center>


<form method="post"  name="adminprofile" >


<?php $teamid = $_GET['id']; //strangely ID did not work, id worked okay,
$query=mysqli_query($con,"SELECT * from tbl_fireteam WHERE ID='$teamid'");
while($row=mysqli_fetch_array($query)){
?>
  

                 

                    
               




<fieldset><legend><h2>Fire Fighter Team Creation</h2></legend>
        <form method ="post" action="" enctype="">


            <label for="teamName">Team Name:<br>
            <input type="text" value="<?php echo $row['teamName'];?>" name="teamName" required='true'><br>
            <label for="teamLeaderName">Team Leader Name:<br>
            <input type="text" value="<?php echo $row['teamLeaderName'];?>" name="teamLeaderName" required='true'><br>
            <label for="teamLeadMobno">Team Leader Contact No:<br>
            <input type="text" value="<?php echo $row['teamLeadMobno'];?>" name="teamLeadMobno" required='true'><br>
            <label for="teamMembers">Team Members:<br>
            <input type="text" value="<?php echo $row['teamMembers'];?>" name="teamMembers" required='true'><br>
            <input type="submit" value="SUBMIT" name="update">
            <a href="manage_fire.php">Back</a>
        </form>    
</fieldset>



<?php } ?>


  </th>
     
        
          
      

        </tr>
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
    /   <p><tr><td><a href="fire_new-requests.php">New Requests</td></tr>
      / <p><tr><td><a href="fire_assigned-requests.php">Assigned Requests</td></tr>
 /      <p><tr><td><a href="fire_team-ontheway-requests.php">On the way</td></tr>
  /     <p><tr><td><a href="fire_workin-progress-requests.php">Work in progress</td></tr>
       <p><tr><td><a href="fire_completed-requests.php">Completed Request</td></tr>
    /   <p><tr><td><a href="fire_all-requests.php">All Requests</td></tr></table>
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




</body>
</html>