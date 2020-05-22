
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
 $rows1=$result1->fetch_assoc();}
 else if($_SESSION['usertype']=='sp')
{ $sql="select * from servicep where username='$u' and password='$p' ";
 $result=$conn->query($sql);
 $rows=$result->fetch_assoc();
 $area=$rows['Area'];
 $sql1="select * from location where area='$area'";
 $result1=$conn->query($sql1);
 $rows1=$result1->fetch_assoc();}
 else if($_SESSION['usertype']=='v')
{ $sql="select * from volunteers where username='$u' and password='$p' ";
 $result=$conn->query($sql);
 $rows=$result->fetch_assoc();
 $area=$rows['Area'];
 $sql1="select * from location where area='$area'";
 $result1=$conn->query($sql1);
 $rows1=$result1->fetch_assoc();}
 $act=$rows1['active'];
 $sus=$rows1['suspected'];
 $tot=$rows1['totalcases'];
 ?>
 <html>

<head>

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
</style>
</head>

<body>
  <div align=right>


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
</body>

</html>
