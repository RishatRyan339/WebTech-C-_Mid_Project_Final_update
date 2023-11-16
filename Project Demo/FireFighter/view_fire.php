<?php 

include("../model/userModel.php");
$con = getConnection();



    if (isset($_GET['teamid'])) {
        // Access the 'teamid' index safely
        $tid = $_GET['teamid'];
   
        mysqli_query($con,"DELETE FROM tbl_fireteam WHERE ID ='$tid'");
        echo"Delete Successful";
      
           
            header("view_fire.php");

        
    } else {
        // Handle the case where 'teamid' is not set in the GET request
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
    
 <center>
 <table  border='1' cellspacing="0">
        <tr>
           <th>Sno.</th>
           <th>Team Name</th>
            <th>Team Leader Name</th>
            <th>Team Leader Mobile No:</th>
            <th>Team Members</th>
            <th>Action</th>
            <!-- <th>Service</th> -->
        </tr>
         
        
<?php $query=mysqli_query($con,"select * from tbl_fireteam   ");
$cnt=1;
while($row=mysqli_fetch_array($query)){
//AND tblfirereport where service is fire only
?>

         
               <td><?php echo $cnt;?></td>
           
               <td><?php echo $row['teamName'];?></td>
               <td><?php echo $row['teamLeaderName'];?></td>
               <td><?php echo $row['teamLeadMobno'];?></td>
               <td><?php echo $row['teamMembers'];?></td>
         
               <td>

        <a href="details-fire.php?requestid=<?php echo $row['ID'];?>">View</a> 
        <a href="view_fire.php?teamid=<?php echo $row['ID'];?>" >Delete</a></td>
        </td>
        </tr>
        <?php $cnt++;
                           } ?>
                                  </table>

                        </center>
</body>
</html>
