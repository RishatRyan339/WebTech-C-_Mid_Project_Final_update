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
    
 <?php $rid=$_GET['requestid'];
$query=mysqli_query($con,"SELECT * from tbl_fireteam where ID='$rid'");
while($row = mysqli_fetch_array($query)){

?>
<!--- ON THE WAY -->
 <table border="1" cellspacing="0">
    <tr>
    <th>Team Name</th> 
    <td><?php echo $row['teamName'];?></td>
    </tr>

     <tr>
    <th>Team Leader</th> 
    <td><?php echo $row['teamLeaderName'];?></td>
    </tr>

     <tr>
    <th>Team Mobile No:</th> 
    <td><?php echo $row['teamLeadMobno'];?></td>
    </tr>
    <tr>
    <th>Team Member</th> 
    <td><?php echo $row['teamMembers'];?></td>
    </tr>

    <a href="view_fire.php">Back</a>

  



    </tr>
 </table>
 <?php } ?>



 </body>
 </html>