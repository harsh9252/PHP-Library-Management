<?php
$link=mysqli_connect("localhost","root","","library");

$roll=$_GET['del'];
if($link){
    $harsh="DELETE FROM books WHERE id='$roll'";

    if(mysqli_query($link,$harsh))
    echo "<h1>DATA DELETED<h1>";
}
else{
    echo "Error!!!".mysqli_connect_error();
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

      <button class="btn btn-primary mt-4" ><a href="insert.php" style="color:white; text-decoration:none;">Insert</button>
</body>
</html>