<?php 
include("../model/userModel.php");
$con = getConnection();
$tbl_fireteam = join_FireTeam();
; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>

                                         <tr>
                                            <th>Sno</th>
                                            <th>Team Name</th>
                                            <th>Leader Name</th>
                                            <th>Contact No</th>
                                             <th>Team Members:</th>
                                           
                                        </tr>
                                  
                                      

<?php $query=mysqli_query($con,"select * from tbl_fireteam");
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

                             
                                <?php $cnt++;
                           } ?>
                                </table>    

<table>
                       
                       

  <fieldset><legend><h2>Join Fire Fighter Team</h2></legend>
        <form method ="post" action="" enctype="">
            <label for="teamName">Team Name:<br>
            <input type="text" value="" name="teamName"><br>
            <label for="teamLeaderName">Team Leader Name:<br>
            <input type="text" value="" name="teamLeaderName"><br>
            <label for="teamLeadMobno">Team Leader Contact No:<br>
            <input type="text" value="" name="teamLeadMobno"><br>
            <label for="teamMembers">Team Members:<br>
            <input type="text" value="" name="teamMembers"><br>
            <input type="submit" value="SUBMIT" name="Add">
            
        </form>    
</fieldset>
<a href="dashboard.php">Home</a>
                       
                            </table>

</body>
</html>