<?php
session_start();
include('../connectdb.php');

$mentor = $_SESSION['uid']; // mentor loginid
  // echo "$mentor";
$sql9 = "select * from queries where mid='$mentor'";
        $query2 = mysql_query($sql9,$conn);
   //       $details = mysql_fetch_array($query);
   //  $quesid   = $details['qid'];
  //   $title    = $details['title'];
  //   $description = $details['description'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title></title>
	<style>
  body{
   background: url(../web-design-mrnokhei-albums-243418.jpg); 
  }
  h1{text-align: center;
    color: #F44336;}
.div1{
  
    margin-left: 36.5%;
}
	table,th,td{text-align: center;
		 border:2px solid #9E9E9E;
    border-collapse: collapse;
    color: #F44336;
    padding: 2%;
	}
   a{color: #F44336;}
  a:hover{color: #FF9800;
    cursor: pointer;}
	</style>
</head>
<body>
<h1>ALL THE MESSAGES</h1>
<div class="div1">
   <table style="width:40%">
  <tr>
    <th>From mentee</th>
    <th>Query</th>
    
  </tr>
<?php
while($r = mysql_fetch_array($query2)) {
	// print_r($r['qid']);
	$uid = $r['tid'];
	$title = $r['title'];
	$qid = $r['qid'];

	$sql1  = "select * from login_user where uid='$uid'";
        $query1 = mysql_query($sql1,$conn);
        $re = mysql_fetch_array($query1);
   $name = $re['name'];
   echo " <tr>
    <td>$name</td>
    <td><a href= 'view.php?qid=$qid'> $title </a></td>
  </tr>";
}
?>
  </table>
  </div>
</body>
</html>
