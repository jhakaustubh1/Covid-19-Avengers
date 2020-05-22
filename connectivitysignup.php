<?php include 'connection.php';

 $fullname = $_POST['name'];
$age=$_POST['age']; 
$username = $_POST['user']; 
$contact=$_POST['contactno']; 
$password = $_POST['pass']; 
$city = $_POST['city']; 
$area = $_POST['area']; 
$hno = $_POST['hno']; 

$sql = "INSERT INTO customers (`Name`,`Age`,`City`,`Area`,`house_no`,`contact number`,`username`,`password`) VALUES ('$fullname','$age','$city','$area','$hno','$contact','$username','$password')"; 
$data = $conn->query($sql); 
if($data) { echo "YOUR REGISTRATION IS COMPLETED..."; 
}


?>

