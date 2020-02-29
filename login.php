<?php
session_start();
// include database connection file
include_once('inc/connection.inc.php');

// check to see if the form has been submitted
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query="SELECT userPassword FROM tblUsers WHERE userEmail='$email'";
    $result=$db->query($query);
    $row = $result->fetch_array(MYSQLI_ASSOC);

    if (password_verify($password, $row['userPassword'])) {
        session_start();
        $_SESSION['logged']=1;
        $_SESSION['email'] = $row['email'];
        header("location:index.php");
    } else {
        echo "Error";
    }
}
