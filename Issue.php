<?php
$link=mysqli_connect("localhost","root","","library");

if($link){
    $harsh="CREATE TABLE Issue (
        id INT NOT NULL AUTO_INCREMENT,
        bid INT ,
        mid Int,
        issue_date DATE,
        IssuePeriod INT,
        return_date DATE,
        PRIMARY KEY(id),
        FOREIGN KEY (bid) REFERENCES Books(id),
        FOREIGN KEY (mid) REFERENCES Members(id)
        
        
      )";

    if(mysqli_query($link,$harsh))
    echo "Table created";
}
else{
    echo "Error!!!".mysqli_connect_error();
    exit();
}
?>