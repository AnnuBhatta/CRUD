<?php
	include_once('connection.php');
	$query = "INSERT INTO employee(firstname, lastname, phone, email) VALUES(?,?,?,?)";
	
	$statement = mysqli_prepare($conn, $query);
	
	if($statement)
	{
			$fname= $_POST['firstname'];
			$lname= $_POST['lastname'];
			$phone= $_POST['phone'];
			$email= $_POST['email'];
			mysqli_stmt_bind_param($statement, "ssis", $fname, $lname, $phone, $email);
			mysqli_stmt_execute($statement);
	
			header('location: index.php');
	}
	else
	{
		echo "Error: could not execute" . $query . mysqli_error($conn);
	}
	
	mysqli_stmt_close($statement);
	
	mysqli_close($conn);

	
	// session_start();             /*.This function first checks if a session is already 
	//                               started and if none is started then it starts the session.*/
	// include_once('connection.php');
	
	// // The include_once() function in PHP is mainly used to include one PHP file into another PHP file.

	// if(isset($_POST['submit'])){
	// 	$fname = $_POST['firstname'];
	// 	$lname = $_POST['lastname'];
	// 	$phone = $_POST['phone'];
	// 	$email = $_POST['email'];
		
	// 	$sql = "INSERT INTO employee (firstname, lastname, phone, email) VALUES
	// 	 ('$fname', '$lname', '$phone', '$email')";
	
	// 	if($conn->query($sql)){
	// 		$_SESSION['success'] = 'Student added successfully';
	// 	}
	// 	else{
		// 		$_SESSION['error'] = 'Something went wrong while adding';
		// 	}
		// }
		// header('location: index.php');
		

        //Connecting database with server
        // $con = mysqli_connect("localhost", "root", "", "office");
        // if(!$con)
        // {
        //     die("Error: Database not connected !!".mysqli_error());
        // }

        // if(isset($_POST['submit']))
        // {
        //     $fname = $_POST['firstname'];
        //     $lname = $_POST['lastname'];
        //     $phone = $_POST['phone'];
        //     $email = $_POST['email'];

        //     $sql = "INSERT INTO employee(id, firstname, lastname, phone, email) VALUES (NULL, $fname, $lname, $phone, $email)";

        //     $query = mysqli_query($con, $sql);
        //     if($query)
        //     {
        //         header("Location: table.php?msg=New Record Created Successfully.");
        //     }
        //     else
        //     {
        //         echo "Something Went Wrong".mysqli_error($con);
        //     }
        // }
		
?>