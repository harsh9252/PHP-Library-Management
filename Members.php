<?php
$link=mysqli_connect("localhost","root","","library");

if($link){
    $harsh="CREATE TABLE Members (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        join_date DATE,
        period INT,
        email VARCHAR(30) NOT NULL

      )";

    if(mysqli_query($link,$harsh))
    echo "Table created";
}
else{
    echo "Error!!!".mysqli_connect_error();
    exit();
}
?>