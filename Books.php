<?php
$link=mysqli_connect("localhost","root","","library");

if($link){
    $harsh="CREATE TABLE Books (
        id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(255),
        author_id INT,
        price INT,
        date DATE,
        availableQty INT,
        PRIMARY KEY (id),
        FOREIGN KEY (author_id) REFERENCES Authors(id)
      )";

    if(mysqli_query($link,$harsh))
    echo "Table created";
}
else{
    echo "Error!!!".mysqli_connect_error();
    exit();
}
?>