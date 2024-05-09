<?php      
    include('connection.php');  
    $fName = $_POST['f_Name'];  
    $lName = $_POST['l_Name'];  
	 $email = $_POST['remail']; 
	  $password = $_POST['rpassword']; 
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $fName = stripcslashes($fName); 
        $lName = stripcslashes($lName); 
		
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password); 
        $fName = mysqli_real_escape_string($con, $fName);
        $lName = mysqli_real_escape_string($con, $lName);		
		
		$query = "insert into Login values('$email','$password');insert into Customer_name values('$email','$fName','$lName')";
		$count=mysqli_multi_query($con, $query);
		  
		  
		if($count == 1){  
			header('Location: login (1).html');
			exit;
        }  
        else{  
            echo "<h1> Error.</h1>";   
        }     
       
?>  