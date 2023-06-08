<?php
    $name=$_POST["Name"];
    $username=$_POST["Username"];
    $password = $_POST["Password"];
    $country=$_POST["country"];

    var_dump($name, $username, $password, $country);

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
       $sql = "INSERT INTO user (name, username, password, country)
                VALUES (?, ?, ?, ?)";

    $stmt= mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)){
        die (mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "ssss", $name, $username, $password, $country);

    mysqli_stmt_execute($stmt);
     
    echo "Record saved";



?>