<?php 
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
        <tr><th><h1>&nbsp;&nbsp;&nbsp;Welcome&nbsp;&nbsp;&nbsp;<?echo $Name?></h2>Admin</th>
  
 
    </tr>
        <tr><td>
        <table>
        <tr><td><b><u>Medic Teams</td>
       

    
    </tr>
      
    
    </tr>
      
        <tr><td><a href="view_medic.php">View Team</td></tr>
         </td>
        </table>

        <table>
        <tr><td><b><u>Fire Teams</td>
       

    
    </tr>
      
    
    </tr>
      
        <tr><td><a href="view_medic.php">View Team</td></tr>
         </td>
        </table>

        <table>
        <tr><td><b><u>Medic Alerts</td>
    
        <td><h1><center>Fire Weather Outlooks</h1></center>
<p>Updated: Wed Nov 8 19:36:05 UTC 2023 (4h 21m ago)</p>
Storm Prediction Center Mesoscale Assistant/Fire Weather Forecaster Ariel<br> Cohen describes the SPC fire weather forecast process for a meteorology class at the University of Oklahoma. You
       <h2>  Current Day 1 Fire Weather       </h2> <br> 
       <img src="../asset/day1.png" height="300px" width="400px">
    <p>Forecaster: WEINMAN<br>
Issued: 081554Z<br>
Valid: 081700Z - 091200Z<br>
Forecast Risk of Fire Weather: Elevated<br>
Note: Critical Fire Weather Criteria document in MS-Word or PDF.<br></p></td>

<td>
        <h2>Current Day 2 Fire Weather</h2>
    <img src="../asset/day2.png" height="300px" width="400px">
    <p>Forecaster: WEINMAN<br>
Issued: 081935Z<br>
Valid: 091200Z - 101200Z<br>
Forecast Risk of Fire Weather: Critical Risk<br>
Note: Critical Fire Weather Criteria document in MS-Word or PDF.<br></p>
    </td>

    <td>
        <h2>Fire Weather Composite Maps</h2>
    <img src="../asset/day3.jpg" height="300px" width="400px">
    <p>Forecast and observational maps for various fire weather variables based on the Eta and RUC models. <br>

    </td>
    
    
    </tr>
        <tr><td><a href="medic_new-requests.php">New Requests</td></tr>
        <tr><td><a href="medic_assigned-requests.php">Assigned Requests</td></tr>
        <tr><td><a href="medic_team-ontheway-requests.php">On The Way</td></tr>      
        <tr><td><a href="medic_workin-progress-requests.php">Work In Progress</td></tr>
        <tr><td><a href="medic_completed-requests.php">Completed Requests</td></tr>
        <tr><td><b><u>Fire Alerts</td>
        <tr><td><a href="fire_new-requests.php">New Requests</td></tr>
        <tr><td><a href="fire_assigned-requests.php">Assigned Requests</td></tr>
        <tr><td><a href="fire_team-ontheway-requests.php">On The Way</td></tr>      
        <tr><td><a href="fire_workin-progress-requests.php">Work In Progress</td></tr>
        <tr><td><a href="fire_completed-requests.php">Completed Requests</td></tr>
         </td>
      
       
       <td ></td>
       
      
    
    <td><h2></h2></td>
    <td><h2></h2></td>
    <td><h2></h2></td>
  
     
     
    </table>
        
       <!--Table Start -->     
   
    
         <!--Table End -->   
       
      
   
 <!--Table Start -->     
 <tr><td>
        <table>
       <p><tr><td><b><u>Medic Reports</td></tr>
       <p><tr><td><a href="bwdates-medicdb.php">B/W Dates</a></td></tr>
       <p><td><a href="search-report.php">Search</a></td>
    </table>

    <table>
       <p><tr><td><b><u>Fire Reports</td></tr>
       <p><tr><td><a href="bwdates-firedb.php">B/W Dates</a></td></tr>
       <p><td><a href="search-report.php">Search</a></td>
    </table>

    <table>
       <p><tr><td><b><u>Total Report</td></tr>
       <p><tr><td><a href="medic_all-requests.php">Medic Reports</a></td></tr>
       <p><tr><td><a href="fire_all-requests.php">Fire Reports</a></td></tr>
       <p><td><a href="total_all-requests.php">All Report</a></td>
    </table>
            









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