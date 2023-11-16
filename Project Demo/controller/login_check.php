 <!-- <?php 
   
//     require_once('../model/userModel.php');
//     $con = getConnection();
//   //db manually check


//      $username= $_REQUEST['AdminuserName'];
//     $password= $_REQUEST['Password'];
  
  
  
  
  
//      if($username == "" || $password == ""){
//          echo"null AdminuserName / Password";


 
//     }else{ 
     
//     /* $con = mysqli_connect('localhost','root','','web_tech');*/    
     
//         $status = adminlogin($username, $password);
//         if($status){
//              $_SESSION['flag'] = " true";
//            header('location: ../Admin/dashboard.php');



//         /* 
//       } else if($username ==$_SESSION['user']['username'] && $password ==$_SESSION['user']['password']){
//              $_SESSION['flag'] = "true";
//             header('location: ../view/home.php');
//  */
//         }else{
//              echo"invalid user!";
//         }

//     }
    

session_start();
require_once('../model/userModel.php');
$con = getConnection(); // Ensure you have a valid database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['Name'];
    $password = $_POST['Password'];

    if ($username == "" || $password == "") {
        echo "null Name or Password";
    } else {
        // Query the database to validate the user
        $query = "SELECT * FROM user_type WHERE Name = '$username' AND Password = '$password'";
        $result = mysqli_query($con, $query);

        if ($row = mysqli_fetch_assoc($result)) {
            $user_type = $row['User_type'];
            
            // Determine the user type and redirect accordingly
            if ($user_type === 'Admin') {
                $_SESSION['flag'] = "true"; // Set the session flag
                header("Location: ../Admin/dashboard.php");
            } elseif ($user_type === 'FireFighter') {
                $_SESSION['flag'] = "true"; // Set the session flag
                header("Location: ../FireFighter/dashboard.php");
            } elseif ($user_type === 'Medic') {
                $_SESSION['flag'] = "true"; // Set the session flag
                header("Location: ../Medic/dashboard.php");
            } else {
                echo "Invalid user type.";
            }
        } else {
            echo "Invalid username or password.";
        }
    }
} else {
    echo "Invalid request method.";
}

 ?>