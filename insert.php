
<?php

$id="";
$name="";
$author_id="";
$price="";
$date="";
$availableQty="";
// id INT PRIMARY KEY,
//         name VARCHAR(255),
//         author_id INT,
//         price INT,
//         date DATE,
//         availableQty INT

if(isset($_REQUEST['save']))
{
    $id=$_REQUEST['id'];
    $name=$_REQUEST['name'];
    $author_id=$_REQUEST['author_id'];
    $price=$_REQUEST['price'];
    $date=$_REQUEST['date'];
    $availableQty=$_REQUEST['availableQty'];
    


    $link=mysqli_connect("localhost","root","","library");

    $harsh="insert into books (id,name,author_id,price,date,availableQty) values($id,'$name',$author_id,$price,$date,$availableQty)";

    if(mysqli_query($link,$harsh))
		$x= "Record Added!"; 
	
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
    <title>Bookstore</title>
    <style>
           table {
  /* width: 100%; */
  margin:auto;
  margin-top:23px;
  border-radius:23px;
  
}

th,
td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
  
  color:dark black;
}
thead:hover{
	background:black;
	color:white;
}

.card{
	display:flex;
	display:inline-block;
}



       body{
        background-image:url('images/11.jpg');
        background-size:cover;
       }
       label{
        font-size:33px;
       /* float:right; */
       }
       #btn{
        background:black;
        border-radius:23px;
        font-size:23px;
        padding:10px;
        color:white;
        
       }
       
.modal-header {

background-color: #337AB7;

padding:16px 16px;

color:#FFF;

border-bottom:2px dashed #337AB7;

}

        </style>
</head>
<body>






    <form method="post">
   <div class="container">
    <div class="row">
        <div class="col-6">
            <label  class="form-label">Enter id</label>
            <input type="text" class="form-control" name="id" >
        </div>

        <div class="col-6">
            <label  class="form-label">Enter your Name</label>
             <input type="text" class="form-control" name="name" >
        </div>

        <div class="col-6">
            <label  class="form-label">Enter AUTHOR ID</label>
             <input type="text" class="form-control" name="author_id">
        </div>

        <div class="col-6">
            <label  class="form-label">Enter Price</label>
             <input type="text" class="form-control" name="price" >
        </div>

        <div class="col-6">
            <label  class="form-label">Enter DATE</label>
             <input type="text" class="form-control" name="date">
        </div>

        <div class="col-6">
            <label  class="form-label">Enter Available Quantity</label>
             <input type="text" class="form-control" name="availableQty">
        </div>


        <div class="col-6 mt-4">
        <input type="submit"  id="btn" class="mt-3" name="save" >
        </div>
    </div>
   </div>

   
 
   
  <center > <button class="btn btn-info mt-4 " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" >
    Show Data
  </button>
  <button class="btn btn-info mt-4" id="btn1">Hide</button>
<div class="collapse" id="collapseExample" id="hide">
  <div class="card card-body"  style="margin:23px" >
  <?php require_once "card.php"; ?>
  </div>
</div></center>
<!-- Button trigger modal -->
<!-- <center><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Show Data
</button></center> -->

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Your Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div> -->
</body>
</html>
<script>
  <?php require_once "card.php"; ?>
  $(document).ready(funtion(){
    $('#btn1').click(function(){
      $('#hide').hide();
      });
  })
  <script>
