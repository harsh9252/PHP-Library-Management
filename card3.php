
<?php
$link=mysqli_connect("localhost","root","","library");
$harsh="select * from Members";
$data2=mysqli_query($link,$harsh);
$data=mysqli_query($link,$harsh);
$row1=mysqli_fetch_assoc($data2);
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
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">

	<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
</head>
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


    </style>
<body>
<table border="2" class="table table-hover"  id="example">
	<thead>
		<tr>
			<?php
			foreach($row1 as $key=>$values)
			{
				?>
			<th><?php echo $key ?> </th>
			<?php
			}
			?>
            <th>Delete</th>
            <th>Edit</th>
            <th>View</th>
		</tr>
		</thead>
		
	<tbody>
			<?php
			while($row=mysqli_fetch_assoc($data))
			{
			echo "
			<tr>
			<td>".$row['id']."</td>
			<td>".$row['name']."</td>
			<td>".$row['join_date']."</td>
			<td>".$row['period']."</td>
			<td>".$row['email']."</td>
			 <td><a href='delete3.php?del=$row[id]'><div>Delete</td>
			<td><a href='edit3.php?ed=$row[id]&n=$row[name]&m=$row[join_date]&s=$row[period]&e=$row[email]'>Edit</td>
			<td><a href='view3.php?ed=$row[id]&n=$row[name]&m=$row[join_date]&s=$row[period]&e=$row[email]'>View</td>
			";
			}	
			?>

	</tbody>

	</table>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>