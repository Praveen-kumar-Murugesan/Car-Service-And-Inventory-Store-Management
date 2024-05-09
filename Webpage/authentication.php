<?php  
session_start();    
    include('connection.php');  
    $username = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from login where email_id = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
		
		 echo "<h1>$sql</h1>"; 
		 
        if($count == 1){  
			
			$_SESSION["username"] = $username;
			header('Location: par.php');
			exit;
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";   
        }     
?>  