<?php  
session_start();    
  
  try{
	   $price = 0;  
		$accCount = 0;  
		$sPrc = 0;
		$sTyp="";
		
	  If (isset($_GET['price'])){
		   $price = $_GET['price'];  
	  }
		else If (isset($_SESSION['price'])){
		  $price = $_SESSION['price'];  
	  }
	  
	  If (isset($_GET['accCount'])){
		  $accCount = $_GET['accCount'];  
	  }
	   else If (isset($_SESSION['accCount'])){
		   $accCount = $_SESSION['accCount'];  
	  }
	  
	  If (isset($_GET['sPrc'])){
		   $sPrc = $_GET['sPrc'];  
	  }
	  else If (isset($_SESSION['sPrc'])){
		  $sPrc = $_SESSION['sPrc'];  
	  }
	  
	  If($sPrc==2599){
		  $sTyp="Basic Service";
	  }
	  
	  If($sPrc==2999){
		   $sTyp="Standard Service";
	  }
	  
	  
	  
	 
	 
  }
  catch(Exception $e) {
    $price=0;
	$accCount=0;
  }
    
      
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
		
		$totAccPrice=$price*$accCount;
		
		
		$_SESSION["price"] = $price;
		$_SESSION["totAccPrice"] = $totAccPrice;
		$_SESSION["accCount"] = $accCount;
		
		$_SESSION["sPrc"] = $sPrc;
		$_SESSION["sTyp"] = $sTyp;
	
?>  