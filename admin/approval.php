<?php
session_start();
include('../connectdb.php');
$sql6 = "select uid,name from login_user where status= 'pending'";
  $query = mysql_query($sql6,$conn);

?>
<!DOCTYPE html>
<html>
<head>
<style>
body{
   background: url(../web-design-mrnokhei-albums-243418.jpg); 
   box-sizing: border-box;
   width: 100%;
   height: 60%;
   background-repeat: no-repeat;
   background-size: cover;

  }
  h1{text-align: center;
    color: #009688;
}

	
.div1{ background-color: #607D8B;
    margin-left: 40%;
    margin-right: 40%;
    padding-bottom: 15%;
    margin-bottom: 40%;
    box-sizing: border-box;
    height: 70px;

}
.div2{
	    background-color: #009688;
    width: 100%;
    text-align: center;
    padding-bottom: 60%;
    color:white;
    text-transform: uppercase;
    font-weight: bold;
    padding-top: 5%;
}
input[type="submit"]{
	    background-color:#009688;
	    padding: 1%;
		color:white;
		border:1px solid #009688;
	    border-radius:2px;
	        width: 100%;
    padding-bottom: 3.5%;
    padding-top: 3.5%;
	    
	}
.div3{margin-top: 15%;}

	input[type="checkbox"]{
		font-size: 20px;
		text-transform: uppercase;
	}
</style>
	<title>APPROVAL</title>
</head>
<body>
<h1>List of Unapproved Users </h1>
<div class="div1">
<form action="checkbox.php" method="post">
	<?php
	echo '<div class="div2">';	
	while($result = mysql_fetch_array($query)){
		//print_r($result);
		//echo $result['name'];
	  
	  echo '<input type="checkbox" name="chk1[]" value="'.$result['uid'].'">'.$result['name'].'<br>';
	}
	echo '</div>';	
	  echo '<div class=div3><input type="submit" name="submit" value="Approve"></div>';
	 
	?>

</form> 
</div>
</body>
</html>
