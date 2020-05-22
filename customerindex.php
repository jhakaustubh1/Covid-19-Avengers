<?php
include 'connection.php';
session_start();
$u=$_SESSION['u'];
$p=$_SESSION['p'];
if($_SESSION['usertype']=='c')
{ $sql="select * from customers where username='$u' and password='$p' ";
 $result=$conn->query($sql);
 $rows=$result->fetch_assoc();
 $area=$rows['Area'];
 $sql1="select * from location where area='$area'";
 $result1=$conn->query($sql1);
 $rows1=$result1->fetch_assoc();
 $act=$rows1['active'];
 $sus=$rows1['suspected'];
 $tot=$rows1['total'];
 
 
 
 }
 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cz">
<head>
	<title>
		Covid-19 Relief
	</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
table {
  border-collapse: collapse;

}
tr:nth-child(n){background-color: #e0f3ff;}

tr:hover {background-color: #ddd;}

th, td{
  border: 2px solid black;
 padding: 15px;
  text-align: left;
}
  #a
  {
    background-color: red;
  }
  #s
  {
    background-color: orange;
  }
  #t
  {
    background-color: #4f92ff;
  }
  #l
  {
    background-color: #03fc7b;
  }
  #sub{
    background-color: #4CAF50; /* Green */
  border: 2px solid black;
  color: black;
  border-radius: 25px;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  }
.mySlides {display:none;}
#Tl{
	margin-left:300px;
}


#k {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 16%;
  background-color: #333;
  position: relative;
  height: 100%;
  overflow: auto;
  margin-left: -10px;
  margin-top: -34px;
}

#j a {
	text-align: center;
  display: block;
  color: white;
  padding: 30px 2px;
  text-decoration: none;
  
}

#j a.active1 {
  background-color: #55AAFF;
  color: white;
}

#j a:hover:not(.active1) {
  background-color: #555;
  color: white;
}




</style>

<meta http-equiv="Content-language" content="cs">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content=" ">
<meta name="keywords" content=" ">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<meta name="author" content="Klára Frolichová, Sunlight webdesign">
<meta name="Copyright" content="Klára Frolichová, Sunlight webdesign 2007">
<meta name="design" content="Sunlight webdesign - http://www.sunlight.cz, info@sunlight.cz">
<link rel="stylesheet" type="text/css" href="CSS/default.css" title="default">

</head>


<body>
<div id="WholePage">
<div id="Inner">
<div id="Container" style="border:groove;border-color:#00CCFF">
<div id="Head">
<div id="Head_left">
<div id="Leaf_top"></div>

</div>
<div id="Head_right">
<div id="Logo">
<div id="Name"><span class="blue">C</span><span>OVID-19</span>&nbsp;<span class="blue">R</span><span>elief</span> </div>
<div id="Informations">In times of need,we are here to serve you</div>
</div>
<br>

<div id="Top_menu"> 

<ul id ="a">
  <li id="b" class="active"><a href="#home">Account</a></li>
  <li id="b"><a href="#news">Medical Emergengy</a></li>
  <li id="b"><a href="#contact">FAQs</a></li>
  <li id="b"><a href="#about">Service Providers</a></li>
   <li id="b"><a href="entertainment.html">Entertainment</a></li>
  <li id="b"><a href="login.php">Log Out</a></li>
</ul>
</div>

<center><div id="T1">


<table border="2px solid black">
  <tr>
    <th id='l'>Locality:</th>
    <th> <input type="text" id='area' name="area" placeholder="Enter Area" value="<?php echo $area ?>"> </th>
  </tr>
  <tr>
    <th id='a'>Active Cases</th>
    <td> <input type="number" readonly id='active' value="<?php echo $act ?>"> </td>
  </tr>
  <tr>
    <th id='s'>Suspected Cases</th>
    <td> <input type="number" readonly id='suspected' value="<?php echo $sus ?>"> </td>
  </tr>
  <tr>
    <th id='t'>Total</th>
    <td> <input type="number" readonly id='total' value="<?php echo $tot ?>"> </td>
  </tr>
  </table>
<br><br>

</div>
</center>
</div>
</div>
<br><br>
<div id="RightPart">
  <div id="Page">
  	<div  style="max-width:1500px">
  		<ul id="k">
  			<li id="j" ><a class="active1" href="#home">Medicines</a></li>
  			<li id="j"><a href="https://script.google.com/macros/s/AKfycbzTdp9892NbkRWpL2TanqJYeJARm28qhf1BzJGmx7_NirNbf3g/exec">Grocery</a></li>
  			<li id="j"><a href="https://script.google.com/macros/s/AKfycbzTdp9892NbkRWpL2TanqJYeJARm28qhf1BzJGmx7_NirNbf3g/exec">Vegetables</a></li>
  			<li id="j"><a href="https://script.google.com/macros/s/AKfycbzTdp9892NbkRWpL2TanqJYeJARm28qhf1BzJGmx7_NirNbf3g/exec">Dairy product</a></li>
	</ul>
  		
  <img class="mySlides" src="images/i2.png" style="width:30% ;margin-left: 250px;margin-top: -340px;">
  <img class="mySlides" src="images/i3.png" style="width:30%;margin-left: 250px;margin-top: -340px;">
  <img class="mySlides" src="images/i4.png" style="width:30%;margin-left: 250px; margin-top: -340px;">
  <img class="mySlides" src="images/i1.jfif" style="width:30%;margin-left: 250px;margin-top: -340px;">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "inline-block";  
  setTimeout(carousel, 2000); 
}
</script>

  <form name="f1">
  <input type="hidden" name="h1" value="0" />
  </form>
    <div id="Page_top">
  <p> <marquee behavior="scroll" direction="left" onmouseover="stop()" onmouseout="start()"><font color="#FFFF99"><h3>Covid-19 Relief here to serve you!!</h3></font><font color="#00CC99"><h4>we encourages customers to come directly to your store with given time slots . You can see additional details: the pickup date and slot, store, phone no and name of the supplier</h4></font></marquee><br>

  </p>

 
  </div>
  <div id="Page_center">

  </div>
</div></div>
<div class="cleaner"></div>
</div>

</div>
</div>
</div>
</div>












<footer class="footer-distributed">
 
		<div class="footer-left">
 
		<h3>Covid-19<span>Relief</span></h3>
 
		<p class="footer-links">
		<a href="#">Home</a><br>
	
		<a href="#">Blog</a><br>
	
		
	
		<a href="#">About</a><br>
	
	
	
		<a href="#">Contact</a>
		</p>
 
		<p class="footer-company-name">Covid-19Relief &copy; 2020</p>
		</div>
 
		<div class="footer-center">
 
		<div>
		<i class="fa fa-map-marker"></i>
		<p><span></span> Delhi, India</p>
		</div>
 
		<div>
		<i class="fa fa-phone"></i>
		<p>+91-8225852240</p>
		</div>
 
		<div>
		<i class="fa fa-envelope"></i>
		<p><a href="">abc@gmail.com</a></p>
		</div>
 
		</div>
 
		<div class="footer-right">
 
		<p class="footer-company-about">
		<span>About the Portal</span>
			Store Pickup provides your customers with a seamless pickup option which helps to maintain social distance and even save your time in current situation. 
		</p>
 
		<div class="footer-icons">
 
		<a href="#"><i class="fa fa-facebook"></i></a>
		<a href="#"><i class="fa fa-twitter"></i></a>
		<a href="#"><i class="fa fa-linkedin"></i></a>
		<a href="#"><i class="fa fa-github"></i></a>
 
		</div>
 
		</div>
 
		</footer>












</body>
</html>