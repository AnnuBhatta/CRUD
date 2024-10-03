<!-- Edit -->
<?php
$id = $_GET['id'];

include_once('connection.php');
$sql = "SELECT * FROM employee WHERE id=$id";

$query = $conn->query($sql);
$row = $query->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	 <!-- Bootstrap -->
	 <link rel="stylesheet" href="css\bootstrap.min.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Ubuntu&display=swap" rel="stylesheet">

	<title>CRUD-Operation</title>
</head>

<style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-family: 'Quicksand', sans-serif;
            font-weight: 500;
            background-color: #ddd7cc;
        }
        .title{
            background-color: #00ff5573;
            text-align: center;
            padding: 1.5rem;
        }
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 45vw;
            min-width: 200px;
            border: 2px solid #252525;
            border-radius: 20px;
            padding: .5rem;
        }
        .profile{
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
        .btn{
            margin-top: 0.5rem;
			position: relative;
			left: 50px;
			width: calc(100% - 100px);
        }
		button{
			width: 300px;
            height: 2.5rem;
            font-weight: 400;
            color: aliceblue;
            background-color: #0d6efd;;
            border-radius: 14px;
			font-size: 18px;
            border: none;
            cursor: pointer;
            transition: all ease-in-out .3s;
            transform: scale(1);
		}
		button:hover{
            background-color: #54f3fcf1;
            box-shadow: 0 0 5px #03e9f4,
                        0 0 25px #03e9f4,
                        0 0 50px #03e9f4,
                        0 0 100px #03e9f4;
            color: #252525;
            transform: scale(1.1);
        }
        input{
            width: 500px;
            padding: 8px;
            border-radius: 10px;
        }
    </style>
<body>
<div id="edit_<?php echo $row['id']; ?>">
	<h1 class="title">Update the records</h1>
    <div class="container">
        <h3 class="add">Update Users Data</h3>
        <p class="phase">Complete the form below to update a user data.</p>
        <img src="./img/delault-profile.jpg" class="profile" alt="" srcset="">

        <form action="edit.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <label for="">Firstname:</label><br>
            <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>"><br>

            <label for="">Lastname:</label><br>
            <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>"><br>

            <label for="">Phone:</label><br>
            <input type="number" name="phone" value="<?php echo $row['phone']; ?>"><br>

            <label for="">Email:</label><br>
            <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>

                <div class="btn">
                    <button type="submit" name="edit">Update</button>
                </div>

        </form>
    </div>
    </form>
</div>	
</body>
</html>