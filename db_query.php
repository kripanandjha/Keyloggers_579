<?php
 //   require("password.php");

    $con = mysqli_connect("localhost", "root", "root", "a_database");

	$username = $_POST['senders_name'];
    $message = $_POST['msg_send'];
	$id = (int)$_POST["users_id"];
    $statement = mysqli_prepare($con, "INSERT INTO messages (message,username,users_id) VALUES (?,?,?)");
    mysqli_stmt_bind_param($statement, "ssi", $message,$username,$id);
    mysqli_stmt_execute($statement);
    mysqli_stmt_store_result($statement);
    //mysqli_stmt_bind_result($statement, $colName, $colUsername, $colPassword);
    
    $response = array();
    $response["success"] = false;  
    
   // while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;  
    //}

    echo json_encode($response);
?>