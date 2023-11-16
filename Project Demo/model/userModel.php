<?php 
    require_once('db.php');
    function login($username, $password){
        $con = getConnection();
        $sql = "select * from tbladmin where Name='{$username}' and Password='{$password}'";
      
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;  
        }
        }
      
        // function firelogin($username, $password){
        //     $con = getConnection();
        //     $sql = "select * from users where username='{$username}' and password='{$password}'";
          
        //     $result = mysqli_query($con, $sql);
        //     $count = mysqli_num_rows($result);
    
        //     if($count == 1){
        //         return true;
        //     }else{
        //         return false;  
        //     }
        //     }
    
        //     require_once('db.php');
        //     function mediclogin($username, $password){
        //         $con = getConnection();
        //         $sql = "select * from users where username='{$username}' and password='{$password}'";
              
        //         $result = mysqli_query($con, $sql);
        //         $count = mysqli_num_rows($result);
        
        //         if($count == 1){
        //             return true;
        //         }else{
        //             return false;  
        //         }
        //         }
        
        

    function create_FireTeam(){
 // Retrieve data from the form
/*
      
*/ $con = getConnection();

  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form was submitted using POST

    // Retrieve user input from the form
    
    $teamName = $_POST['teamName']; 
    $teamLeaderName = $_POST['teamLeaderName'];
    $teamLeadMobno = $_POST['teamLeadMobno'];
    $teamMembers    = $_POST['teamMembers'];
  //  $postingDate = $_POST['postingDate'];
   
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    

$stmt = $con->prepare("INSERT INTO tbl_fireteam (teamName, teamLeaderName, teamLeadMobno, teamMembers) VALUES (?, ?, ?, ?)");

// Bind parameters
$stmt->bind_param("ssss", $teamName, $teamLeaderName, $teamLeadMobno, $teamMembers);
    if ($stmt->execute()) {
        echo "Member Added";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $con->close();
}





/* 


        $stmt = $con->prepare($sql);
        $stmt->bind_param("sss", $username, $password, $email); 
        if ($stmt->execute()) {
            echo "User data inserted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    
        // Close the database connection
        $stmt->close();
        $con->close();
  
    }

*/
      
    }

    function create_MedicTeam(){
        $con = getConnection();

  
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Check if the form was submitted using POST
      
          // Retrieve user input from the form
          
          $teamName1 = $_POST['teamName']; 
          $teamLeaderName1 = $_POST['teamLeaderName'];
          $teamLeadMobno1 = $_POST['teamLeadMobno'];
          $teamMembers1    = $_POST['teamMembers'];
        //  $postingDate = $_POST['postingDate'];
         
          if ($con->connect_error) {
              die("Connection failed: " . $con->connect_error);
          }
      
          
      
      $stmt = $con->prepare("INSERT INTO tbl_medteam (teamName, teamLeaderName, teamLeadMobno, teamMembers) VALUES (?, ?, ?, ?)");
      
      // Bind parameters
      $stmt->bind_param("ssss", $teamName1, $teamLeaderName1, $teamLeadMobno1, $teamMembers1);
          if ($stmt->execute()) {
              echo "Member Added";
          } else {
              echo "Error: " . $stmt->error;
          }
      
          // Close the database connection
          $stmt->close();
          $con->close();
      }
      
      
      
      
    }



    function join_FireTeam(){
        $con = getConnection();

  
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Check if the form was submitted using POST
      
          // Retrieve user input from the form
          
          $teamName1 = $_POST['teamName']; 
          $teamLeaderName1 = $_POST['teamLeaderName'];
          $teamLeadMobno1 = $_POST['teamLeadMobno'];
          $teamMembers1    = $_POST['teamMembers'];
        //  $postingDate = $_POST['postingDate'];
         
          if ($con->connect_error) {
              die("Connection failed: " . $con->connect_error);
          }
      
          
      
      $stmt = $con->prepare("INSERT INTO tbl_fireteam (teamName, teamLeaderName, teamLeadMobno, teamMembers) VALUES (?, ?, ?, ?)");
      
      // Bind parameters
      $stmt->bind_param("ssss", $teamName1, $teamLeaderName1, $teamLeadMobno1, $teamMembers1);
          if ($stmt->execute()) {
              echo "Member Added";
          } else {
              echo "Error: " . $stmt->error;
          }
      
          // Close the database connection
          $stmt->close();
          $con->close();
      }
      
      
      
      
    }

    function join_MedTeam(){
        $con = getConnection();

  
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Check if the form was submitted using POST
      
          // Retrieve user input from the form
          
          $teamName2 = $_POST['teamName']; 
          $teamLeaderName2 = $_POST['teamLeaderName'];
          $teamLeadMobno2 = $_POST['teamLeadMobno'];
          $teamMembers2    = $_POST['teamMembers'];
        //  $postingDate = $_POST['postingDate'];
         
          if ($con->connect_error) {
              die("Connection failed: " . $con->connect_error);
          }
      
          
      
      $stmt = $con->prepare("INSERT INTO tbl_medteam (teamName, teamLeaderName, teamLeadMobno, teamMembers) VALUES (?, ?, ?, ?)");
      
      // Bind parameters
      $stmt->bind_param("ssss", $teamName2, $teamLeaderName2, $teamLeadMobno2, $teamMembers2);
          if ($stmt->execute()) {
              echo "Member Added";
          } else {
              echo "Error: " . $stmt->error;
          }
      
          // Close the database connection
          $stmt->close();
          $con->close();
      }
      
      
      
      
    }

    function contact(){
        $con = getConnection();

  
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Check if the form was submitted using POST
      
          // Retrieve user input from the form
          
          $first_name = $_POST["firstname"];
          $email = $_POST["email"];
          $contact = $_POST["contacts"];
          $subject = $_POST["subject"];
        //  $postingDate = $_POST['postingDate'];
         
          if ($con->connect_error) {
              die("Connection failed: " . $con->connect_error);
          }
      
          
      
      $stmt = $con->prepare("INSERT INTO contact (first_name, email, contacts, subject) VALUES (?, ?, ?, ?)");
      
      // Bind parameters
      $stmt->bind_param("ssss",  $first_name, $email, $contact, $subject);
          if ($stmt->execute()) {
              echo "Contact Successful";
          } else {
              echo "Error: " . $stmt->error;
          }
      
          // Close the database connection
          $stmt->close();
          $con->close();
      }
      
      
      
      
    }




    function update_FireTeam(){

    }

    function update_MedicTeam(){

        
    }

      /* 
      
      
              $stmt = $con->prepare($sql);
              $stmt->bind_param("sss", $username, $password, $email); 
              if ($stmt->execute()) {
                  echo "User data inserted successfully.";
              } else {
                  echo "Error: " . $sql . "<br>" . $con->error;
              }
          
              // Close the database connection
              $stmt->close();
              $con->close();
        
          }
      
    }
    function getUser($id){

    }

    function getAllUser(){
        $con = getConnection(); 
        $sql = "select * from users";

        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users, $row);
        }
        return $users;
    }

    function updateUser() {
        
          
    }
    function editUser(){

    }
    
/* 





// code 1----------------------------------------


$sql = "UPDATE users SET username=?, email=? WHERE ID=?";
$stmt = $con->prepare($sql);
$stmt->bind_param("ssi", $username, $email, $ID);

if ($stmt->execute()) {
    // Query executed successfully
    header("Location:view_users.php");
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();



// code 2-------------------------------------------

$sql = "UPDATE users SET username='$username', email='$email' WHERE ID=$ID";
        
        if (mysqli_query($con, $sql)) {
            header("Location:view_users.php");
        } else {
            echo "Error: " . mysqli_error($con);
        }
    
        mysqli_close($con);
    

*/

?>


