<?php
    $con = mysqli_connect("localhost", "root", "root", "a_database");
    
    $username = $_POST["toname"];
    
    $statement = mysqli_prepare($con, "SELECT id,name,username,password,privateKey,publicKey,salt,iv FROM users WHERE username = ?");
    mysqli_stmt_bind_param($statement, "s", $username);
    mysqli_stmt_execute($statement);
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $users_id, $colName, $colUsername, $colPassword,$privateKey,$publicKey,$salt,$iv);
    
    while(mysqli_stmt_fetch($statement)){
            $response["success"] = true;
            $response["name"] = $colUsername;
            $response["users_id"] = $users_id;
            $response["privateKey"] = $privateKey;
            $response["publicKey"] = $publicKey;
            $response["salt"] = $salt;
            $response["iv"] = $iv;
    }
    

    echo json_encode($response);
?>
