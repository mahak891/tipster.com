<?php
session_start();
include('connectdb.php');

$sql = "select * from mentor_info";
$query = mysql_query($sql,$conn);
 //$det = mysql_fetch_array($query);
 /*  $id = $det['mid'];
   $name = $det['name'];
   $area = $det['expertise_area'];
   $univ = $det['university'];
   $email = $det['email'];
*/
   ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title></title>
    <style>
    body{
   background: url(web-design-mrnokhei-albums-243418.jpg); 
  }
  h1{text-align: center;
    color: #F44336;}
    .div1{
  
    margin-left: 31.5%;
}
  table,th,td{text-align: center;
    border:2px solid #9E9E9E;
    border-collapse: collapse;
    color: #F44336;
    padding: 2.5%;
  }
  a{
    color: #F44336;
    cursor: pointer;
  }
  a:hover{
    color:#009688;}

</style>
</head>
<body>
<h1>MENTORS LIST</h1>
<div class="div1">
   <table style="width:50%">
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>EXPERTISE</th>
    <th>UNIVERSITY</th>   
  </tr>
<?php
while($det = mysql_fetch_array($query)) {
     $id = $det['mid'];
   $name = $det['name'];
   $area = $det['expertise_area'];
   $univ = $det['university'];
   $email = $det['email'];

   echo"<tr>
   <td>$id</td>
   <td><a href='profilelist.php?mid=$id'>$name</a></td>
   <td>$email</td>
   <td>$area</td>
   <td>$univ</td>
   </tr>";
}
?>
</table>
</div>
</body>
</html>