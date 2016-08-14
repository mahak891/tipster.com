<?php
session_start();
include('connectdb.php');
if (isset($_POST['email']) and isset($_POST['passwd']))
{
if($_POST['passwd']==""||$_POST['email']=="")
{
    echo "FILL ALL FIELDS";
 header("Refresh:0.5; url=final1.php"); 

}
else{
 $email = $_POST["email"];
$password = $_POST["passwd"]; 

$sql1  = "select * from login_user where email='$email'";
        $query = mysql_query($sql1,$conn);
        if (!$query) {
         // die("Could not get data: " . mysql_error());
            echo "INVALID EMAIL";
            header("Refresh:0.5; url=final1.php"); 

        }
        $details = mysql_fetch_array($query);
        $pass1   = $details['password'];
        $role    = $details['rid'];
        $uid     = $details['uid'];
        $status  = $details['status'];
        if ($password == $pass1) {
          
        
        if ($status == 'approved') {
        	echo "welcome";

  $_SESSION['email'] = $email;
      	 $_SESSION['rid'] = $role;
        	 $_SESSION['uid'] = $uid;
           if($_SESSION['rid']==3){
        header("location:mentee/menteepage.php");}
       else if ($_SESSION['rid']==2){
        header("location:mentor/mentorpage.php");
       }
       else if ($_SESSION['rid']==1) {
           header("location:admin/admin.php");
       }
     }
     else{
      echo "YOU ARE NOT APPROVED USER";
      header("Refresh:0.5; url=final1.php"); 

    }
     
   }
       


        
}
}

?>
