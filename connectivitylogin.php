<?php include 'connection.php';
session_start();	
$user=$_POST['user'];
$pass=$_POST['pass'];
$_SESSION["u"]=$user;
$_SESSION["p"]=$pass;

$sql="SELECT * FROM customers where username='$user' and password='$pass'";
$sql1="SELECT * FROM servicep where username='$user' and password='$pass'";
$sql2="SELECT * FROM volunteers where username='$user' and password='$pass'";
$result=$conn->query($sql);
$result1=$conn->query($sql1);
$result2=$conn->query($sql2);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
$row2=  mysqli_fetch_array($result2, MYSQLI_ASSOC);
$count = mysqli_num_rows($result); 
$count1 = mysqli_num_rows($result1);
$count2= mysqli_num_rows($result2);
if($count == 1){  
    // echo "<h1><center> Login successful for customer</center></h1>"; 
    
    // echo $_SESSION['u'];
    $_SESSION["usertype"]='c';
    header("Location: customerindex.php");  
}  
elseif($count1 ==1){
	// echo "<h1><center> Login successful for service provider</center></h1>";
	$_SESSION["usertype"]='sp';
	header("Location: serviceproviderindex.html"); 
}
elseif($count2 ==1){
	// echo "<h1><center> Login successful for volunteers</center></h1>";
	$_SESSION["usertype"]='v';
	header("Location: counter.php"); 	
}
else{
	echo "<h1><center> Login Failed</center></h1>";
}
?>