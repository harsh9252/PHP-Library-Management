<?php
$link=mysqli_connect("localhost","root","","library");

if($link){
    $harsh="CREATE TABLE Authors (
        id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        PRIMARY KEY(id)
      )";

    if(mysqli_query($link,$harsh))
    echo "Table created";
}
else{
    echo "Error!!!".mysqli_connect_error();
    exit();
}
?>