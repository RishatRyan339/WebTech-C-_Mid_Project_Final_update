<?php 
include("../model/userModel.php");
$con = getConnection();
; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="bwdates-fire.php">
 

                                             <label>From Date</label>
                                            <input type="date" class="form-control" id="fromdate" name="fromdate" required="true">
                                     


                                             <label>To Date</label>
                                            <input type="date" class="form-control" id="todate" name="todate" required="true">
                              


                                 <input type="submit" name="submit" value="Submit">                           
                 

</form>
</body>
</html>