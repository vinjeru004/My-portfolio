<?php
    $username=$_POST["Username"];
    $email=$_POST["Email"];
    $message = $_POST["What can do for you?"];

    var_dump($username, $email, $message);

    $serverName= "localhost";
    $db_user= "root";
    $password= "";
    $db_name="my_portfolio";

    $conn=mysqli_connect($serverName, $db_user, $password,$db_name);

    if (!$conn){
        echo "an error has occured";
                }
       else{
        echo "it is was a success";
       }     
       if(mysqli_connect_error()){
        die("connection error: " .mysqli_connect_error());
       }
       $sql = "INSERT INTO contacts (username, email, message)
                VALUES (?, ?, ?)";

    $stmt= mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)){
        die (mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $message);

    mysqli_stmt_execute($stmt);
     
    echo "Record saved";



?>