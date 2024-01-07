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

    $uname = validate($_POST['userName']);
    $pass = validate($_POST['pass']);

    if (empty($userName)) {
        header("Location: Welcome.php?error=User Name is required");
        exit();
    } else if (empty($pass)) {
        header("Location: Welcome.php?error=Password is required");
        exit();
    } else {
        // Hash the password using MD5
        // $hashedPass = md5($pass);

        $sql = "SELECT * FROM users WHERE userName='$userName' AND pass='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['userName'] === $userName && $row['passw'] === $pass) {
                $_SESSION['gender'] = $row['gender'];
                $_SESSION['address'] = $row['address'];
                $_SESSION['age'] = $row['age'];
                $_SESSION['birthday'] = $row['birthday'];
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: home.php");
                exit();
            } else {
                header("Location: Welcome.php?error=Incorrect User name or password");
                exit();
            }
        } else {
            header("Location: Welcome.php?error=Incorrect User name or password");
            exit();
        }
    }
    
} else {
    header("Location: Welcome.php");
    exit();
}
