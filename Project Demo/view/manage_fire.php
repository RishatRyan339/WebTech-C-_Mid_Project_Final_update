<?php 
	
	
    include('../controller/sessionCheck.php');
    include('../model/userModel.php');
    $con = getConnection();

	error_reporting(0);
	//validating Session
	
                  

?>



	



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
<table border="1"  cellspacing="0">

     <tr>
         <th>Sno.</th>
		 <td>Team Name</td>
		 <th>Team Leader Name</th>
		 <th>TL Mobile Number</th>
		 <th>Team Memebers</th>
	    
		 <th>Action</th>
		 </tr>
		
		 <tr>
		 
  
  <?php $query=mysqli_query($con,"SELECT * FROM tbl_fireteam ");
$cnt=1;
while($row=mysqli_fetch_array($query)){
?>

<tr>
    <td><?php echo $cnt;?></td>
	<td><?php echo $row['teamName'];?></td>
	<td><?php echo $row['teamLeaderName'];?></td>
	<td><?php echo $row['teamLeadMobno'];?></td>
	<td><?php echo $row['teamMembers'];?></td>
	
	<td>

<!-- -->   
       <a href="edit_fire.php?id=<?php echo $row['ID'];?>"> UPDATE </a> 

   


	</tr>
	<?php $cnt++;
        } ?>
    </tbody>
     </table>
    </center>
     <center>
 <h3> </h3>
    <table border="1">
        
</center>

      



</table>


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
        <tr><td><a href="../controller/logout.php">Logout</td></tr>
</table>


<hr>


   

</body>
</html>
