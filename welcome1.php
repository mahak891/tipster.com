<?php
session_start();
include('connectdb.php');
if (isset($_POST['email']) and isset($_POST['passwd']) and isset($_POST['fname']) and isset($_POST['lname']))
{
	if($_POST['fname']==""||$_POST['email']==""||$_POST['lname']==""||$_POST['passwd']==""){
echo "Fill All Fields..";
 header("Refresh:0.5; url=final1.php"); 

}
else{
$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$password = $_POST["passwd"];
$status = "pending";
$sql2  = "select * from login_user where email='$email'";
        $query = mysql_query($sql2,$conn);
        $details = mysql_fetch_array($query);
        if (!empty($details)) {
        echo "<div><p>email is already registred with us.</p><a href='final1.php'>click here</a>for signup</div>";
        }
        else{
        	$sql3 = "INSERT INTO login_user (name,lname,email,password,status,rid)VALUES('$firstname','$lastname','$email','$password','$status','3')";
       $query1 = mysql_query($sql3,$conn);
           if ($query1) {
           	echo "check your email";
            header("Refresh:0.5; url=final1.php"); 

           }
       }
     $msg = "you are successfully registred.\n Your details will be checked for approval.";

      mail($email, "registration", $msg);
     }
 }
     $msg1 = "some new users registred on website";
     $sub1 = "registration on query_system project";
     mail("mahakjain1010@gmail.com", $sub1,$msg1);
 
   
 //header("Refresh:0.5; url=final1.php"); 
   
   ?> 