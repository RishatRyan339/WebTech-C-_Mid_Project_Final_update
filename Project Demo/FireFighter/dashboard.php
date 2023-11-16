<?php 
include('../model/userModel.php');
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
        <tr><th><h1>&nbsp;&nbsp;&nbsp;Welcome&nbsp;&nbsp;&nbsp;<?echo $Name?></h2>Fire Team</th>
  
    
    </tr>
        <tr><td>
        <table>
        <tr><td><b><u>Fire Teams</td></tr>
        <tr><td><a href="join_fireteam.php">Join</td></tr>
      
        <tr><td><a href="view_fire.php">View Team</td></tr>
         </td>
        </table>

        <table>
        <tr><td><b><u>Fire Alerts</td></tr>
        <tr><td><a href="fire_new-requests.php">New Requests</td></tr>
        <tr><td><a href="fire_assigned-requests.php">Assigned Requests</td></tr>
        <tr><td><a href="fire_team-ontheway-requests.php">On The Way</td></tr>      
        <tr><td><a href="fire_workin-progress-requests.php">Work In Progress</td></tr>
        <tr><td><a href="fire_completed-requests.php">Completed Requests</td></tr>

         </td>
        </table>

   
    
     
 </tr>
        
       <!--Table Start -->     
   <tr><td>
        <table>
       <p><tr><td><b><u>Fire Reports</td></tr>
       <p><tr><td><a href="bwdates-firedb.php">B/W Dates</a></td></tr>
       <p><td><a href="search-report.php">Search</a></td>
    </table>

    
    <table>
       <p><tr><td><b><u>Total Report</td></tr>
       <p><tr><td><a href="">Fire Reports</a></td></tr>
       <p><td><a href="">All Report</a></td>
    </table>
         <!--Table End -->   
       
      
        </td></tr>
 <!--Table Start -->     
   <tr>
      
   
         <!--Table End -->   
    </tr>
    <!--Table Start -->     
   <tr><td>
       
    
            









        </form>    
</fieldset>
         <!--Table End -->   
      
        
       
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