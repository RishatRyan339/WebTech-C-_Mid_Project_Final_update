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
<form method="post" action="search-report-result.php">


            

              
                     
                          
                 
               
<label>Search By Reported by Name/ Mobile No / Location</label>
<input type="text" name="serachdata" required="true" placeholder="Enter Reported by Name/ Mobile No / Location">
                                  
<br>


<input type="submit" name="search" value="Search">                           
                         
</form>

    

</body>
</html>