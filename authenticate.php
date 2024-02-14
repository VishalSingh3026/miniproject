<?php        
        $conn = mysqli_connect("localhost", "root", "", "travelhowl");
        $email = $_POST['email']; 
        $password = $_POST['password'];   
        $sql = "SELECT * FROM user_data WHERE email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){
            session_start();
            $_SESSION['phone'] = $phone;
            // echo '<script>alert("Login Successfull")</script>';
            header("Location: http://localhost/feed/profile.html"); ;
           
        }  
        else{  
            echo '<script>alert("Invalid details Entered")</script>';
        }     
?>