<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $subject = $_POST['subject'];
	 $message = $_POST['message'];
	 $sql = "INSERT INTO contact (name,email,subject,message)
	 VALUES ('$name','$email','$subject','$message')";
	 if (mysqli_query($conn, $sql)) {
		// echo "New record created successfully !";
		header("Location: table.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>