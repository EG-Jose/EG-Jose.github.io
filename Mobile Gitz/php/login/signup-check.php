<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['userName']) && isset($_POST['pass'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $userName = validate($_POST['userName']);
    $firstName = validate($POST['firstName']);
    $lastName = validate($_POST['lastName']);
    $email = validate($_POST['email']);
    $pass = validate($_POST['pass']);
    
    $user_data = 'userName='. $userName. '&firstName='. $firstName. '&lastName='. $lastName. '&email='. $email;

    if (empty($userName)) {
        header("Location: signup.php?error=User Name is required&$user_data");
        exit();
    } else if (empty($firstName)) {
        header("Location: signup.php?error=First name is required&$user_data");
        exit();
    } else if (empty($lastName)) {
        header("Location: signup.php?error=Last name is required&$user_data");
        exit();
    } else if (empty($email)) {
        header("Location: signup.php?error=email is required&$user_data");
        exit();
    } else {

        // Hash the password using MD5
        //$hashedPass = md5($pass);

        $sql = "SELECT * FROM users WHERE userName='$userName' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: signup.php?error=The username is taken try another&$user_data");
            exit();
        } else {
            $sql2 = "INSERT INTO users(userName, firstName, lastName, pass, email) VALUES('$userName', '$firstName', '$lastName', '$pass', '$email')";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                header("Location: signup.php?success=Your account has been created successfully");
                exit();
            } else {
                header("Location: signup.php?error=unknown error occurred&$user_data");
                exit();
            }
        }
    }
    
} else {
    header("Location: signup.php");
    exit();
}
