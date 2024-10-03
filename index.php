<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Bootstrap -->
    <link rel="stylesheet" href="add new.php">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Ubuntu&display=swap" rel="stylesheet">

    <title>CRUD-Operation</title>
	
	<style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            margin: 50px;
        }
        body{
            font-family: 'Quicksand', sans-serif;
            font-weight: 600;
            background-color: #ddd7cc;
        }
        .title{
            background-color: #00ff5573;
            text-align: center;
            padding: 1.5rem;
        }
        .dark{
            background-color: #252525;
            color: #ffff;
        }
    </style>
</head>
<body>

<h1 class="title">Employee Record System</h1>
    <div class="container">
        <a href="addnew.php" class="btn btn-dark">Add New</a>

        <table id="myTable" class="table table-hover" style="margin-top: 1rem;">
        <thead class="dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">FirstName</th>
            <th scope="col">LastName</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Created At</th>
            <th scope="col">Action</th>
            </tr>
        </thead>

		<?php
			include_once('connection.php');
			$sql = "SELECT * FROM employee";
			
			$query = $conn->query($sql);
			while($row = $query->fetch_assoc())
			{
		?>
		<tbody>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['firstname'];  ?></td>
				<td><?php echo $row['lastname']; ?></td>
				<td><?php echo $row['phone']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['created_at']; ?></td>
				<td>
					<a href="editdata.php?id=<?=$row['id'] ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i>Edit</a> 
					<a href="delete.php?id=<?=$row['id'] ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i>Delete</a>
				</td>
            </tr>
		<?php
			}
		?>
		<tbody>
		</table>


		<!-- Font-Awesome -->
		<script src="fontawesome-free-6.2.1-web\js\all.js"></script>


<!-- <script src="jQuery\jQuery.js"></script>
<script src="js\bootstrap.min.js"></script>
<script src="DataTables-1.13.2\js\jquery.dataTables.min.js"></script>
<script src="DataTables-1.13.2\js\dataTables.bootstrap5.min.js"></script>


<script>
$(document).ready(function()
	{
    $('#myTable').DataTable();
    });

DataTables is a jQuery plugin that can be used for adding interactive and advanced controls to HTML tables for the webpage. This also allows the data in the table to be searched, sorted, and filtered according to the needs of the user.

</script> -->
</body>
<footer><div class="PP"><p><b><br><h1>A3N</h1></br></b></p></div></footer>
<style>
.PP{
	text-align: center;
	color: red;
    margin-left: -100px;
    
}
</style>
</html>
