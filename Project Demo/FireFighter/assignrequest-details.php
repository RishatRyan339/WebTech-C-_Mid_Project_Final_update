<?php 
include('../model/userModel.php');
$con = getConnection(); 


/* */

if(isset($_POST['takeaction']))
{
//$rid = $_POST['requestid'];
$rid=$_GET['requestid'];
$rstatus=$_POST['status'];
$remark=$_POST['remark'];
$sql = "INSERT into tblfirerequesthistory (requestId,status,remark) values('$rid','$rstatus','$remark')";
$result = $con->query($sql);
//$query= "INSERT into tblfirerequesthistory (requestId,status,remark) values('$rid','$status','$remark')");
if ($result) {
$result=mysqli_query($con, "update tblfirereport set status='$rstatus' WHERE id='$rid'");    
//if ($query) {
//$query=mysqli_query($con, "update tblfirereport set status='$rstatus' WHERE id='$rid'");    

//
echo'Request has been updated';
//echo "<script>window.location.href ='all-requests.php'</script>";
header('Location:fire_all-requests.php');
}else{
echo"Something Went Wrong. Please try again";
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
    
 <?php $rid=$_GET['requestid'];
$query=mysqli_query($con,"SELECT * from tblfirereport where id='$rid'");
while($row = mysqli_fetch_array($query)){
?>
<!--- ON THE WAY -->
 <table border="1" cellspacing="0">
    <tr>
    <th>Full Name</th> 
    <td><?php echo $row['fullName'];?></td>
    </tr>

     <tr>
    <th>Mobile Number</th> 
    <td><?php echo $row['mobileNumber'];?></td>
    </tr>

     <tr>
    <th>Location</th> 
    <td><?php echo $row['location'];?></td>
    </tr>


  



    </tr>
 </table>

 <!-- <?php $query=mysqli_query($con,"select * from tblfirereport 
join tbl_fireteam on tbl_fireteam.id=tblfirereport.assignTo
    where tblfirereport.id='$rid'");
$count=mysqli_num_rows($query);
if($count>0){
while($row=mysqli_fetch_array($query)){ ?>


<?php } }  else {?>

<?php } ?> 

 <?php if($row['assignTo']==''): 
    ?>
                                           
<?php else: 
$rstatus=$row['status'];
if($rstatus=='Assigned' || $rstatus=='Team On the Way' || $rstatus=='Fire Relief Work in Progress'):?>

--><?php 
endif;
endif;?>
<?php } ?>
        
 


<form method="post" enctype="multipart/form-data" >
          <p>  <select class="form-control" name="status" id="status" required="true">
            <option value="">Select Action</option>
  <?php 

  $query=mysqli_query($con,"select status from tblfirereport where id='$rid'");
  while($result=mysqli_fetch_array($query)):
$rstatus=$result['status'];
endwhile;
  ?>

            <?php if($rstatus=='Assigned'):?>
            <option value="Team On the Way">Team On the Way</option>
            <option value="Fire Relief Work in Progress">Fire Relief Work in Progress</option>
            <option value="Request Completed">Request Completed</option>
            <?php elseif($rstatus=='Team On the Way'):?>
        <option value="Fire Relief Work in Progress">Fire Relief Work in Progress</option>
            <option value="Request Completed">Request Completed</option>
            <?php elseif($rstatus=='Fire Relief Work in Progress'):?>
               <option value="Request Completed">Request Completed</option>
         <?php endif;?>

            </select>

       <p>
<textarea name="remark"  required="true" placeholder="Remark (Max 500 Characters)" maxlength="500" rows="5"></textarea>  </p> 
  <p>
     <input type="submit"value="takeaction" name="takeaction" id="submit">   </p> 
   
    
  </form>
</body>
</html>
<!--<form method="post" enctype="multipart/form-data">
  <p>
    <select name="status" id="status" required>
      <option value="">Select Action</option>
      <?php /* /
      $query = mysqli_query($con, "select status from tblfirereport where id='$rid'");
      while ($result = mysqli_fetch_array($query)) {
        $rstatus = $result['status'];

        if ($rstatus == 'Assigned') {
          ?>
          <option value="Team On the Way">Team On the Way</option>
          <option value="Fire Relief Work in Progress">Fire Relief Work in Progress</option>
          <option value="Request Completed">Request Completed</option>
          <?php
        } elseif ($rstatus == 'Team On the Way') {
          ?>
          <option value="Fire Relief Work in Progress">Fire Relief Work in Progress</option>
          <option value="Request Completed">Request Completed</option>
          <?php
        } elseif ($rstatus == 'Fire Relief Work in Progress') {
          ?>
          <option value="Request Completed">Request Completed</option>
          <?php
        }
      }
    */ ;  ?>
    </select>
  </p>
</form> -->

