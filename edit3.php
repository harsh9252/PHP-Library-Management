<?php
$link=mysqli_connect("localhost","root","","library");
$id=$_GET['ed'];
$n=$_GET['n'];
$m=$_GET['m'];
$s=$_GET['s'];
$e=$_GET['e'];


if(isset($_REQUEST['save']))
{
    $id=$_REQUEST['id'];
    $name=$_REQUEST['name'];
    $join_date=$_REQUEST['join_date'];
    $period=$_REQUEST['period'];
    $email=$_REQUEST['email'];
    
    


    $harsh="UPDATE Members SET id='$id',name='$name',join_date='$join_date',period='$period',email='$email'";
   // echo $harsh;
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
        background-image:url('images/12.jpg');
        background-size:cover;
       }
    label{
        font-size:43px;
    }
    #btn{
        background:black;
        border-radius:23px;
        font-size:23px;
        padding:10px;
        color:white;
    }
    </style>
<body>
<form method="post">
   <div class="container">
    <div class="row">
        <div class="col-6">
            <label  class="form-label">Enter id</label>
            <input type="text" class="form-control" name="id" value=<?php echo $id ?>>
        </div>

        <div class="col-6">
            <label  class="form-label">Enter your Name</label>
             <input type="text" class="form-control" name="name" value=<?php echo $n ?>>
        </div>

        <div class="col-6">
            <label  class="form-label">Enter Join Date</label>
             <input type="text" class="form-control" name="join_date" value=<?php echo $m ?>>
        </div>

        <div class="col-6">
            <label  class="form-label">Enter Period </label>
             <input type="text" class="form-control" name="period" value=<?php echo $s ?>>
        </div>

        <div class="col-6">
            <label  class="form-label">Enter Email ID</label>
             <input type="text" class="form-control" name="email" value=<?php echo $e ?>>
        </div>

        

        <div class="col-6">
       <input type="submit"  id="btn" class="mt-3" name="save" value="Edit">
        </div>
        <div class="col-6">
      <button class="btn btn-primary mt-4" ><a href="insert.php" style="color:white; text-decoration:none;">Insert</button>
        </div>
    </div>
   </div>
    </form>
</body>
</html>
