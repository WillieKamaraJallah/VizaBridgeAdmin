<?php
session_start(); 
// ******************  LOGIN BUTTON ACTION ***************

include('Config.php');
include('error_handler.php');
    
    if (isset($_POST['login'])) {

        $Email = $_POST['Email'];
        $Password = $_POST['Password'];

      if (empty($Email)) 
      {
          array_push($error, "Email is required");
      }
      if (empty($Password)) 
      {
          array_push($errors, "Password is required");
      }
      if (is_countable($errors) && count($errors) == 0) 
      {
          $Password = md5($Password);
          $query = "SELECT * FROM user WHERE email='$Email' AND password='$Password'";
          $stmt = $conn->query($query);
          $total_result = $stmt->rowCount();

      }
    if ( $total_result === 1) {

        $row = $stmt->fetch(PDO::FETCH_ASSOC); 

        if ($row['Email'] == $Email && $row['Password'] == $Password) {

            echo "Login in Success!";

            $_SESSION['Email'] = $row['Email'];

            $_SESSION['Firstname'] = $row['Firstname'];

            $_SESSION['Id'] = $row['Id'];

            echo "<script>
                     window.location.href = 'dashboard.php';
                     alert('Login Success');
                </script>";

            exit();

        }else{
            echo "<script>
                     window.location.href = 'dashboard.php';
                     alert('Login Success');
                </script>";

            exit();

        }

    }else{
        echo "<script>
            window.location.href = 'index.php';
            alert('Error!! Invalid Email or Password');
       </script>";

        exit();

    }
}
?>