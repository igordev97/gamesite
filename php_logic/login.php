<?php
    require_once "./database.php";
    include "./load_session.php";
    if(!isset($_POST["usernameEmail"]) || empty(trim($_POST["usernameEmail"]))){
        $err = "Please enter email or username";
        header("Location:../admin.php?err=$err");
        exit();
    }

    if(!isset($_POST["password"]) || empty(trim($_POST["password"]))){
        $err = "Please enter password";
        header("Location:../admin.php?err=$err");
        exit();
    }
    $emailUsername = $_POST["usernameEmail"];
    $db->real_escape_string($emailUsername);
    $password = $_POST["password"];
    $db->real_escape_string($password);

    $result = $db->query("SELECT * FROM admin WHERE username='$emailUsername' OR email='$emailUsername'");

    if($result->num_rows == 0){
        $err = "Email or username are not corected";
        header("Location:../admin.php?err=$err");
        exit();
    }
    $user = $result->fetch_assoc();
    if($user["password"] != $password){
        $err = "Please enter correct password";
        header("Location:../admin.php?err=$err");
        exit();
    }
    
    $_SESSION["admin"] = "admin";
    header("Location:../admin.php");
    

    



?>