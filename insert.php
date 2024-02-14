<?php
		$conn = mysqli_connect("localhost", "root", "", "travelhowl");
		$name = $_REQUEST['name'];
		$phone = $_REQUEST['phone'];
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];	
		$sql = "INSERT INTO user_data VALUES ('$name','$email','$password','$phone')";
		$result=mysqli_query($conn, $sql);
		if($result){
			session_start();
            $_SESSION['info'] = $phone;
			echo '<script>alert("Registration Successfull")</script>';  
		} 
        else{
			echo '$result';
			echo '<script>alert("Some Error occured during Registration. Try again.")</script>';
		}
		mysqli_close($conn);
?>