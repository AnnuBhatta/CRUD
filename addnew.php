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
    width: 50vw;
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
}
input{
    width: 500px;
    padding: 8px;
    border-radius: 10px;
}
            


	
    </style>
<body>
	<h1 class="title">Log In to see the records</h1>
    <div class="container">
        <h3 class="add">Add New Users</h3>
        <p class="phase">Complete the form below to add a new user.</p>
        <img src="./img/delault-profile.jpg" class="profile" alt="" srcset="">

        <form action="add.php" method="POST">
            <label for="">Firstname:</label><br>
            <input type="text" name="firstname" placeholder="Enter your firstname" required><br>

            <label for="">Lastname:</label><br>
            <input type="text" name="lastname" placeholder="Enter your lastname" required><br>

            <label for="">Phone:</label><br>
            <input type="number" name="phone" placeholder="Enter your phone number" autocomplete="off" required><br>
			
            <label for="">Email:</label><br>
            <input type="text" name="email" placeholder="name@example.com" autocomplete="off" required><br>

                <div class="btn">
                    <button type="submit" class="btn btn-success">Send</button>
                    <a href="index.php" class="btn btn-danger">Cancle</a>
                </div>

        </form>
    </div>
    </form>
</body>
</html>
     
     