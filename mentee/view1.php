<?php
session_start();
include('../connectdb.php');
$mentee = $_SESSION['uid'];
$sql = "select * from login_user where uid='$mentee'";
        $que = mysql_query($sql,$conn);
        $det = mysql_fetch_array($que);
        $menteename   = $det['name'];

$qid = @$_GET['qid'];
$sql10 = "select * from queries where qid='$qid' ";
$query = mysql_query($sql10,$conn);
$details = mysql_fetch_array($query);
    $sql10 = "select * from queries where qid='$qid' ";
$query = mysql_query($sql10,$conn);
$details = mysql_fetch_array($query);    
        $title   = $details['title'];
        $description   = $details['description'];
        $mentorid = $details['mid'];

$sql20 = "select * from login_user where uid='$mentorid' ";
$query30 = mysql_query($sql20,$conn);
$details30 = mysql_fetch_array($query30);
     $mentorname = $details30['name'];


if (isset($_POST['submit'])){
	if (isset($_POST['reply']))
	{
		if($_POST['reply']=="")
	{
      echo '<script language="javascript">';
  echo "alert('DO REPLY')";  
  echo '</script>';
	}
  else{
  	$reply = $_POST["reply"];
	$sql12 =  "INSERT INTO answer(comment,qid,mid)VALUES('$reply','$qid','1')";
    $query1 = mysql_query($sql12,$conn);
  }
	}
}
   
     $sql13 = "select * from answer where qid='$qid'"; 
     $query5 = mysql_query($sql13,$conn);         
?>

<!DOCTYPE html>
<html>
<head>
<style>
 body{
   background-image:  url(../hkhjkjhkhjk.jpg);
   color: white ;
   font-size: 120%;
   background-size: cover;
  

  }
  input[type="text"], textarea{
background-color:#1D1D1D;
border: 1px solid white;
width: 50%;
padding-bottom: 2%;
text-indent: 2%;
  color:white;
}
input[type="submit"]{
  background-color: #4CAF50;
  width:10%;
  padding: 1%;
  border-radius: 2%;
  border: 1px solid #4CAF50;
  cursor: pointer;
  color: white;

}
.div1{
  text-align: right;
   
}

</style>
<body>
<?php echo" <pre>QUERY ID    :<span style=color:#E91E63> $qid</span></pre>" ?>
<?php echo "<pre>TITLE       :<span style=color:#E91E63> $title</span></pre>" ?>
<?php echo "<pre>DESCRIPTION :<span style=color:#E91E63> $description</span></pre" ?><br><br>     

   <?php
while($details1 = mysql_fetch_array($query5)){
        $reply   = $details1['comment'];
        $mid = $details1['mid'];
        if ($mid==0) {
        	   echo "<br><span style=color:#FF4C3B>$mentorname:</span><span style=color:#FF4C3B>$reply</span>";
        }
        else{
           echo "<br><div class=div1><span style=color:#4CAF50>$menteename:</span><span style=color:#4CAF50>$reply</span></div>"; 
}
 }
 ?>
 <br><br>


	<form method="post" action="view1.php?qid=<?php echo $qid ?>">
REPLY: <br>
<input type="text"  name="reply"><br>
<input type="submit" value="POST" name="submit">
	</form>
</body>
</head>
</html>
