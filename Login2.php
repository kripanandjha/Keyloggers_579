<?php
    require("password.php");

    $con = mysqli_connect("localhost", "root", "root", "a_database");
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $statement = mysqli_prepare($con, "SELECT id,name,username,password,privateKey,publicKey,salt,iv FROM users WHERE username = ?");
    mysqli_stmt_bind_param($statement, "s", $username);
    mysqli_stmt_execute($statement);
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $users_id, $colName, $colUsername, $colPassword,$privateKey,$publicKey,$salt,$iv);
    
    $response = array();
    $response["success"] = false;  
    
    while(mysqli_stmt_fetch($statement)){
        if (password_verify($password, $colPassword)) {
            $response["success"] = true;  
            $response["name"] = $colUsername;
			$response["users_id"] = $users_id;
            $response["privateKey"] = $privateKey;
            $response["publicKey"] = $publicKey;
            $response["salt"] = $salt;
            $response["iv"] = $iv;
        }
    }

    echo json_encode($response);
?>
