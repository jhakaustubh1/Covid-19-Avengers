<?php include 'connection.php';

 $fullname = $_POST['name'];
$username = $_POST['user']; 
$contact=$_POST['contactno']; 
$password = $_POST['pass']; 
$city = $_POST['city']; 
$area = $_POST['area']; 
$type=$_POST['type'];
$sql = "INSERT INTO servicep(`name`,`city`,`area`,`contact`,`username`,`password`,`type_of_service`) VALUES ('$fullname','$city','$area','$contact','$username','$password','$type')"; 
$data = $conn->query($sql); 
if($data) 
{ 
	echo "YOUR REGISTRATION IS COMPLETED..."; 
}


?>
