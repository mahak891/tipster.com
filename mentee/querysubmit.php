<?php
session_start();
include('../connectdb.php');
if (isset($_POST['title']) and isset($_POST['descr']) and isset($_POST['mentors']))
{

	if($_POST['title']==""||$_POST['descr']=="" ||$_POST['mentors']=="")
{
    echo "FILL ALL FIELDS";
}
else{
	$querytitle = $_POST["title"];
	$querydescription = $_POST["descr"];
	$mentorchosen = $_POST["mentors"];

	$tid = $_SESSION['uid'];

    $sql4 =  "INSERT INTO queries(title,description,mid,tid)VALUES('$querytitle','$querydescription','$mentorchosen','$tid')";
    $query2 = mysql_query($sql4,$conn);
    echo "QUERY SUBMITTED ";
}
}
header("Refresh:0.4; url=querypage.php"); 
?>
