<?php include 'connection.php';
$fullname = $_POST['name'];
$username = $_POST['user']; 
$contact=$_POST['contactno']; 
$password = $_POST['pass']; 
$city = $_POST['city']; 
$area = $_POST['area']; 
$sql = "INSERT INTO volunteers(`name`,`city`,`area`,`contact`,`username`,`password`) VALUES ('$fullname','$city','$area','$contact','$username','$password')"; 
$data = $conn->query($sql); 
if($data) 
{ 
	echo "YOUR REGISTRATION IS COMPLETED..."; 
}


?>
