<?php
    require("password.php");

    $con = mysqli_connect("localhost", "root", "root", "a_database");
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $statement = mysqli_prepare($con, "SELECT id,name,username,password FROM users WHERE username = ?");
    mysqli_stmt_bind_param($statement, "s", $username);
    mysqli_stmt_execute($statement);
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $users_id, $colName, $colUsername, $colPassword);
    
    $response = array();
    $response["success"] = false;  
    
    while(mysqli_stmt_fetch($statement)){
        if (password_verify($password, $colPassword)) {
            $response["success"] = true;  
            $response["name"] = $colName;
			$response["users_id"] = $users_id;
        }
    }

    echo json_encode($response);
?>