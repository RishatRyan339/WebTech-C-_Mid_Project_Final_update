<?php 

include('../model/userModel.php');
$con = getConnection();
$contacts = contact();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<form method="post">

<label for="fname">First Name</label><br>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
    <br><br>
    <label for="email">Email Id:</label><br>
    <input type="email" id="email" name="email" placeholder="Your last name..">
    <br><br>
    <label for="contact">Contact No:</label><br>
    <input type="text" id="contacts" name="contacts" placeholder="">

    <br><br>
    <label for="subject">Subject</label><br>
    <textarea id="subject" name="subject" placeholder="Write something.."></textarea>
    <br><br>
    <input type="submit" value="Submit">

</form>




</body>
</html>