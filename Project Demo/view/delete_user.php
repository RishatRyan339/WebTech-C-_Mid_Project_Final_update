<?php

// Establish a database connection
// Retrieve the ID from the query parameter
require('../controller/sessioncheck.php');
require('../model/userModel.php');

$id = $_GET['ID'];
$sql = "DELETE FROM tbl_fireteam WHERE ID = $id";
$con = getConnection(); 



$result = mysqli_query($con, $sql);

if ($result) {
    echo"Delete Successful";
    // Deletion successful
    header("Location:../view/manage_fire.php");
} else {
    // Handle deletion error
    echo "Error: " . mysqli_error($con);
}



// Close the database connection
?>