<?php
session_start();
include('../connectdb.php');

 //print_r($_POST['chk1']);
if (isset($_POST['chk1']))
{
  
  //print($_POST['chk1']);
	$value = $_POST['chk1'];
   //print_r($value);
	for ($i=0; $i <= sizeof($value); $i++) { 
    
	$sql7 = "update login_user set status='approved' where uid='$value[$i]'";
	$query = mysql_query($sql7,$conn);
	//print($query);
/*	$sql8 = "select name,password,email from mentee_info where tid='$val'";
	$query1 = mysql_query($sql8,$conn);
	$details = mysql_fetch_array($query1);
        $pass   = $details['password'];
        $name = $details['name'];
        $email = $details['email'];
      //  $uniqueness = "select email from  where email='$email'"
       // $qu = mysql_query($uniqueness,$conn);
       // $re = mysql_fetch_array($qu);
        //if(!empty($re)) {
        //	echo "already user exits.";
        //	continue;
      //  }
        $sql9 = "insert into login_user(name,password,email,rid)values('$name','$pass',$email,'3')";
        $query2 = mysql_query($sql9,$conn);

        $sql10 = "select uid from login_user where email='$email'";
        $sql11 = "select tid from mentee_info where tid= '$val'";
        $query3 = mysql_query($sql10,$conn);
        $query4 = mysql_query($sql11,$conn);
	$details1 = mysql_fetch_array($query3);
	$details2 = mysql_fetch_array($query4);
     $uid = $details1['uid'];
	$tid = $details2['tid'];
	$sql12 = "insert into menteeapproval()"
}*/


$sql21 = "select email from login_user where uid='$value[$i]'";
$query21 = mysql_query($sql21,$conn);
$details21 = mysql_fetch_array($query21);
    $email = $details21['email'];
    $sub = "Registration regrading on query system";
    $msg = "Your details have been approved. You can login into your account.";

     mail($email, $sub, $msg);
     echo "SUCESSFULLY APPROVED";
     header("location:admin.php");

}
}
?>
