<?php
    $con = mysqli_connect("localhost", "root", "root", "a_database");

    $statement = mysqli_prepare($con, "SELECT message,username,sentat FROM messages ");
    mysqli_stmt_execute($statement);
	mysqli_stmt_bind_result($statement, $message,$username,$sentat);
    $response = array();
 	
while(mysqli_stmt_fetch($statement))
{
	$response[] = array('username' => $username, 'message' => $message, 'sentat' => $sentat);	
	}
 
	echo json_encode($response);
?>