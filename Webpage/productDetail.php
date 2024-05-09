<?php  
session_start();    
    include('connection.php');  
    $pid = $_GET['productID'];  
      
        //to prevent from mysqli injection  
        $pid = stripcslashes($pid);  
        $pid = mysqli_real_escape_string($con, $pid);   
      
        $sql = "SELECT s1.SparePart_ID,Availability_,SparePart_Rating,price FROM sparepart_details1 s1,sparepart_details2 s2 WHERE s1.SparePart_ID=s2.SparePart_ID and s1.SparePart_ID='$pid'";  
        $result = mysqli_query($con, $sql);  
		
		if (!$result) {
			echo 'Could not run query: ' . mysql_error();
				exit;
		}
		$row = mysqli_fetch_array($result);
		
		$pid= $row[0]; // SparePart_ID
		$avl= $row[1]; //Availability_
		$sprRating= $row[2]; // SparePart_Rating
		$price= $row[3]; // price   
?>  