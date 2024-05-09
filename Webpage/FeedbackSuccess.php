<?php  
session_start();    
  
 
      
        /*to prevent from mysqli injection  
        $pid = stripcslashes($pid);  
        $pid = mysqli_real_escape_string($con, $pid);   
      
        $sql = "SELECT s1.SparePart_ID,Availability_,SparePart_Rating,price FROM sparepart_details1 s1,sparepart_details2 s2 WHERE s1.SparePart_ID=s2.SparePart_ID and s1.SparePart_ID='$pid'";  
        $result = mysqli_query($con, $sql);  
		
		if (!$result) {
			echo 'Could not run query: ' . mysql_error();
				exit;
		}
		$row = mysqli_fetch_array($result);*/
		
		include('connection.php');  
		$name = $_GET['name'];  
		$phone = $_GET['Phone'];  
		$subject = $_GET['subject']; 
		$comment = $_GET['message']; 
      
        //to prevent from mysqli injection  
        $name = stripcslashes($name);  
        $phone = stripcslashes($phone);  
        $subject = stripcslashes($subject); 
        $comment = stripcslashes($comment); 
		
        $name = mysqli_real_escape_string($con, $name);  
        $phone = mysqli_real_escape_string($con, $phone); 
        $subject = mysqli_real_escape_string($con, $subject);
        $comment = mysqli_real_escape_string($con, $comment);		
		
		$query = "insert into feedback values('$name','$phone','$subject','$comment')";
		$count=mysqli_query($con, $query);
		  
		  
        echo "<h1> Feedback has been submitted</h1>"; 
		echo "<h1>Go to  <a href='par.php'>HOME</a></h1>";   		
		echo "<h1> <a href='logout.php'>Logout</a></h1>";   				
        
	
?>  