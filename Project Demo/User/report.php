<?php 

 include_once('../model/userModel.php');
 $con = getConnection();

if(isset($_POST['submit'])){
$fname=$_POST['fullName'];    
$mb=$_POST['mobileNumber'];   
$location=$_POST['location'];   
$message=$_POST['message'];   
$serve=$_POST['Service'];
$query=mysqli_query($con,"INSERT INTO tblfirereport(fullName,mobileNumber,location,message,Service) value('$fname','$mb','$location','$message','$serve')");
if($query){
echo "Report Done!";
 
} else {

echo "X Report Failed X";
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

<center><table border="0">

<tr>
  
         <!--   <td><img src="a.jpg" height="80px" width="80px"></img>   -->

  
   <th>
   <a href="index.php">Home</a>
   </th>


   <th><a href="report.php">  Report</a> </th> 
<th><a href="contact.php">  Contact</a> </th> 
<th><a href="news.php">  Blog/News</a> </th> 
<th><a href="FAQ.php">  FAQ</a> </th> 
<th><a href="safety_check.php">  Safety Checklist</a> </th> 
<th> <a href="../view/signup.php">Registration</a></th> 
<th><a href="../view/login.php">Login</a> </th> 


</tr>
</table>
    <br>
    <br>
    <br>

<h2>Online Reporting System</h2>
<img src="report.jpg">



     
<form method="post">

    <table border="1" cellpadding="12" >
        <tr >
            <td>
                <fieldset>
                    <legend>Report</legend>
                    <label for="Name">Name:</label>
                    <input type="text" id="fullName" name="fullName"><br><br>
                    <label for="mob">Mobile:</label>
                    <input type="text" id="mobileNumber" name="mobileNumber"><br><br>
                
                    <label for="location">Location:</label><br>
            <textarea required name="location"></textarea><br>
         

            <label for="message">Message:</label><br>
            <textarea required name="message"></textarea><br>

            <label for="Service">Choose your service:</label>
                  <select name="Service">
                  <option value="Fire">Fire</option>
                  <option value="Med">Medic</option>
        </select><br><br>
         <center>   <input type="submit" name="submit" value="submit"> </center>
         

            &emsp;&emsp; &emsp;&emsp; &emsp;&emsp;  &emsp;&emsp;
            &emsp;&emsp;
            &emsp;&emsp;
            &emsp;&emsp;
            &emsp;&emsp;
            &emsp;&emsp;
            &emsp;&emsp;
            &emsp;&emsp;
            &emsp;&emsp;
            &emsp;&emsp;
            &emsp;&emsp;
            &emsp;&emsp;
            &emsp;&emsp;
            &emsp;&emsp;
            &emsp;&emsp;
            &emsp;&emsp;







                </fieldset>
            
            
        </tr>
    </table>
</form>
</body>
</html>

</body>
</html>