<?php
    require("password.php");

    $connect = mysqli_connect("localhost", "root", "root", "a_database");
	
	$mobile = $_POST["MobileId"];
	$username = $_POST["username"];
	$name = $_POST["name"];
    $password = $_POST["password"];
	$privateKey = $_POST["privateKey"];
    $publicKey = $_POST["publicKey"];
    $salt = $_POST["salt"];
    $iv = $_POST["iv"];

     function registerUser() {
        global $connect, $name, $mobile, $username, $password,$privateKey,$publicKey,$salt,$iv;
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $statement = mysqli_prepare($connect, "INSERT INTO users (name, mobile, username, password,privateKey,publicKey,salt,iv) VALUES (?, ?, ?, ?,?, ?, ?, ?)");
        mysqli_stmt_bind_param($statement, "ssssssss", $name, $mobile, $username, $passwordHash,$privateKey,$publicKey,$salt,$iv);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
         $response["stat"] = $statement;
    }

    function usernameAvailable() {
        global $connect, $username;
        $statement = mysqli_prepare($connect, "SELECT * FROM users WHERE username = ?"); 
        mysqli_stmt_bind_param($statement, "s", $username);
        mysqli_stmt_execute($statement);
        mysqli_stmt_store_result($statement);
        $count = mysqli_stmt_num_rows($statement);
        mysqli_stmt_close($statement); 
        if ($count < 1){
            return true; 
        }else {
            return false; 
        }
    }

    $response = array();
    $response["success"] = false;  

    if (usernameAvailable()){
        registerUser();
        $response["success"] = true;  
    }
    
    echo json_encode($response);
?>
