<?php
    $con = mysqli_connect("localhost", "root", "root", "a_database");
    $username = $_POST['senders_name'];
    $sent_to = $_POST['sent_to'];
    $statement = mysqli_prepare($con, "SELECT message,signature,username,sent_to,sentat FROM messages where (username = ? and sent_to = ?) or (username = ? and sent_to = ?)");
    mysqli_stmt_bind_param($statement, "ssss", $username,$sent_to,$sent_to,$username);
        mysqli_stmt_execute($statement);
	mysqli_stmt_bind_result($statement, $message,$signature,$username,$sent_to,$sentat);
    $response = array();
 	
while(mysqli_stmt_fetch($statement))
{
    $response[] = array('username' => $username, 'message' => $message, 'signature' => $signature,'sent_to' =>$sent_to, 'sentat' => $sentat);
	}
 
	echo json_encode($response);
?>
