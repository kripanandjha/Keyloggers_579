<?php
 //   require("password.php");

    $con = mysqli_connect("localhost", "root", "root", "a_database");

	$username = $_POST['senders_name'];
    $message = $_POST['msg_send'];
    $signature = $_POST['signature'];
	$id = (int)$_POST["users_id"];
    $sentto = $_POST['sent_to'];
    $sentat = $_POST['sentat'];
    $statement = mysqli_prepare($con, "INSERT INTO messages (message,signature,username,users_id,sent_to,sentat) VALUES (?,?,?,?,?,?)");
    mysqli_stmt_bind_param($statement, "sssiss", $message,$signature,$username,$id,$sentto,$sentat);
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
