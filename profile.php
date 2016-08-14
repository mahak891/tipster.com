<?php
session_start();
include('connectdb.php');

$userid = $_SESSION['uid'];

$sql65 = "select * from login_user where uid='$userid'";
        $query = mysql_query($sql65,$conn);
        $r = mysql_fetch_array($query);
        $name =$r['name'];
        $email=$r['email'];
        $lname=$r['lname'];

?>
<!DOCTYPE html>
<html>
<head>
<style>
	body{color: white;
		background-image: url(wurfel-spiel-schwarzes-punkte-dunkel.jpg);
		background-size: cover;
	}
	h1{text-align: center;}
	.main{font-size: 23px;
		    margin: 5%;
		    margin-left: 15%;

	}
</style>
</head>
<body>
<h1>PROFILE</h1>
<?php
	 echo "<div class=main>";
   echo "<p>Firstname : <span style=color:#838884> $name</span></p>";
   echo "<p>Lastname  : <span style=color:#676968> $lname</span></p>";
   echo "<p>Email Id  :  <span style=color:#747877>$email</span></p>";
   echo "</div>";
?>
</body>
</html>