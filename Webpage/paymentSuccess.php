<?php  
session_start();    
  
 
      
     	include('connection.php');  
		$type = $_GET['type'];  
		
		if($type=="netbank"){
			$cid = $_GET['Cid'];  
			$tot = $_SESSION["tot"]; 
			
			$cid = stripcslashes($cid);  
			$tot = stripcslashes($tot);  
			
			$cid = mysqli_real_escape_string($con, $cid);
			$tot = mysqli_real_escape_string($con, $tot);		
		
			$query = "insert into netbanking values('$cid','$tot')";
			$count=mysqli_query($con, $query);
		
			
		}else if($type=="card"){
			$cNo = $_GET['cNo'];
			$cNm = $_GET['cNm'];
			$eDt1 = $_GET['eDt1'];		
			$eDt2 = $_GET['eDt2'];			
			$tot = $_SESSION["tot"]; 
			
			$eDt = $eDt1."-".$eDt2 ;
			
			$cNo = stripcslashes($cNo);  
			$cNm = stripcslashes($cNm);  
			$eDt = stripcslashes($eDt);  
			$tot = stripcslashes($tot);  
			
			$cNo = mysqli_real_escape_string($con, $cNo);
			$cNm = mysqli_real_escape_string($con, $cNm);
			$eDt = mysqli_real_escape_string($con, $eDt);
			$tot = mysqli_real_escape_string($con, $tot);		
		
			$query = "insert into cardpayment values('$cNo','$cNm','$tot','$eDt')";
			$count=mysqli_query($con, $query);
		
		}
		
		$_SESSION["totAccPrice"]=0;
		$_SESSION["sPrc"]=0;
		     
            echo "<h1> Payment has been successfully made</h1>"; 
			echo "<h1>Go to  <a href='par.php'>HOME</a></h1>";   		
			echo "<h1> <a href='logout.php'>Logout</a></h1>";   				
        
	
?>  