<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){

		$id = $_POST['id'];
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];

		$sql = "UPDATE employee SET firstname = '$fname', 
		lastname = '$lname', phone = '$phone', email = '$email' WHERE id = '$id'";

		
		if($conn->query($sql)){
			$_SESSION['success'] = 'Student updated successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}

	header('location: index.php');

?>