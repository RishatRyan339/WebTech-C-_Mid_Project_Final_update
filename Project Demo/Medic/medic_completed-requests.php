<?php 
include("../model/userModel.php");
$con = getConnection();




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>








<table border="5">
        <tr><th><h1>&nbsp;&nbsp;&nbsp;Welcome&nbsp;&nbsp;&nbsp;<?echo $Name?></h2>Medic Team</th>
  
    
    </tr>
        <tr><td>
        <table>
        <tr><td><b><u>Medic Teams</td></tr>
        <tr><td><a href="join_medteam.php">Join</td></tr>
      
        <tr><td><a href="view_medic.php">View Team</td></tr>
         </td>
        </table>

        <table>
        <tr><td><b><u>Medic Alerts</td></tr>
        <tr><td><a href="medic_new-requests.php">New Requests</td></tr>
        <tr><td><a href="medic_assigned-requests.php">Assigned Requests</td></tr>
        <tr><td><a href="medic_team-ontheway-requests.php">On The Way</td></tr>      
        <tr><td><a href="medic_workin-progress-requests.php">Work In Progress</td></tr>
        <tr><td><a href="medic_completed-requests.php">Completed Requests</td></tr>

         </td>
        </table>

   
    
     
 </tr>
        
       <!--Table Start -->     
   <tr><td>
        <table>
       <p><tr><td><b><u>Medic Reports</td></tr>
       <p><tr><td><a href="bwdates-medicdb.php">B/W Dates</a></td></tr>
       <p><td><a href="search-report.php">Search</a></td>
    </table>

    
    <table>
       <p><tr><td><b><u>Total Report</td></tr>
       <p><tr><td><a href="medic_all-requests.php">Medic Reports</a></td></tr>
       <p><td><a href="total_all-requests.php">All Report</a></td>
    </table>
         <!--Table End -->   
       
      
        </td></tr>
 <!--Table Start -->     
   <tr>
      
   
         <!--Table End -->   
    </tr>
    <!--Table Start -->     
   <tr><td>
       

 <!---------------------------------------------------------------------------This is the working window------------------------------- --> 
 <!---------------------------------------------------------------------------This is the working window------------------------------- --> 
 
<center>
 <table border="1" cellspacing="0">
        <tr>
           <th>Sno.</th>
            <th>Name</th>
            <th>Mobile Number</th>
            <th>Location </th>
            <th>Message</th>
            <th>Reporting Time</th>
       
        </tr>
        
        
        <?php $query=mysqli_query($con,"select * from tblfirereport where status='Request Completed' AND Service='Med'");
        $cnt=1;
        while($row=mysqli_fetch_array($query)){
        ?>

           <tr>
               <td><?php echo $cnt;?></td>
               <td><?php echo $row['fullName'];?></td>
               <td><?php echo $row['mobileNumber'];?></td>
               <td><?php echo $row['location'];?></td>
               <td><?php echo $row['message'];?></td>
               <td><?php echo $row['postingDate'];?></td>
              
        </tr>
        <?php $cnt++;
                           } ?>
    </table>


 </center>
 <!---------------------------------------------------------------------------This is the working window------------------------------- --> 
 
        
 <!---------------------------------------------------------------------------This is the working window------------------------------- --> 
        <!---Table STart-->
     



 <th colspan="10" rowspan="3"></th>
   
   </tr>

       <tr><td><a href="fire_weather.php">Fire Weather</td></tr>
       <tr><td><a href="../controller/logout.php">Logout</td></tr>
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<hr>
<center>Copyright @gms23


</body>
</html>






 
        <!---Table STart-->
       