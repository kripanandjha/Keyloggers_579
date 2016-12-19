<?php
    $con = mysqli_connect("localhost", "root", "root", "a_database");
    $username = $_POST['senders_name'];
    $statement = mysqli_prepare($con, "SELECT username FROM users where username != ?");
    mysqli_stmt_bind_param($statement, "s", $username);
    mysqli_stmt_execute($statement);
    mysqli_stmt_bind_result($statement, $username);
    $response = array();
    
    while(mysqli_stmt_fetch($statement))
    {
        $response[] = array('username' => $username);
    }
    
    echo json_encode($response);
    ?>
