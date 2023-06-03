<?php
$link=mysqli_connect("localhost","root","","library");

$id=$_GET['ed'];
$n=$_GET['n'];
$m=$_GET['m'];


if(isset($_GET['edit']))
{
    $id=$_GET['id'];

    $harsh="SELECT  * FROM Authors  WHERE id='$id'";

    $data=mysqli_query($link,$harsh);

if($data)
{
    echo "<script>alert('Record Updated')</script>";
}
else{
    echo "Record Updated";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<style>
   body{
        background-image:url('images/13.jpg');
        background-size:cover;
       }
    label{
        font-size:33px;
    }
    </style>

<body>
<form method="post">
   <div class="container">
    <div class="row">
        <div class="col-6">
            <label  class="form-label">YOUR ID NUMBER</label>
            <input type="text" class="form-control" readonly name="id" value=<?php echo $id ?>>
        </div>

        <div class="col-6">
            <label  class="form-label"> YOUR NAME</label>
             <input type="text" class="form-control"  readonly name="name" value=<?php echo $n ?>>
        </div>

        <div class="col-6">
            <label  class="form-label"> Enter Email ID</label>
             <input type="text" class="form-control"  readonly  name="email" value=<?php echo $m ?>>
        </div>


        <div class="col-6">
      <button class="btn btn-info mt-4" ><a href="insert.php" style="color:white; text-decoration:none;">Insert</button>
        </div>
    </div>
   </div>
 
   
    </form>
  
</body>
</html>

<!-- <?php
$link=mysqli_connect("localhost","root","","school");

?> -->
