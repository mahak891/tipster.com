<?php  

//connect to the database 
$connect = mysql_connect("localhost","root","root"); 
mysql_select_db("query_system"); 
 
if(!isset($_FILES['csv']) || $_FILES['csv']['error'] == true){
	 
	echo '<script language="javascript">';
  echo "alert('SELECT A FILE')";  
  echo '</script>';
}

 else{
  //if ($_FILES[csv][size] > 0) { 

    //get the csv file 
    $file = $_FILES[csv][tmp_name]; 
    $handle = fopen($file,"r"); 


 /* $sql51 = "select * from mentor_info";
  $execute = mysql_query($sql51,$conn);
        $fetch = mysql_fetch_array($execute);
        $email = $fetch['email'];
*/
     
    //loop through the csv file and insert into database 
    do { 
        if ($data[0]) { 
            mysql_query("INSERT INTO mentor_info (name, email, expertise_area, university, status) VALUES 
                ( 
                    '".addslashes($data[0])."', 
                    '".addslashes($data[1])."', 
                    '".addslashes($data[2])."', 
                    '".addslashes($data[3])."',
                    '".addslashes($data[4])."'
                ) 
            "); 
            mysql_query("REPLACE INTO TABLE mentor_info ADD UNIQUE INDEX(email);");
        } 
    } while ($data = fgetcsv($handle,1000,",","'")); 

     
    
   /*  while ($data = fgetcsv($handle,1000,",")){
     $name = $data[0];
     $email = $data[1];
     $area = $data[2];
     $univ = $data[3];
     $status = $data[4];
     $sql50  = mysql_query("INSERT INTO mentor_info (name, email, expertise_area, university, status) VALUES ('$name','$email','$area','$univ','$status') ON DUPLICATE KEY UPDATE name = '$name',expertise_area = '$area', university = '$univ', status = '$status'");*/

echo "FILE UPLOADED";
}
 header("Refresh:0.5; url=admin.php"); 
 
?>
<?php

include('../connectdb.php');

//echo "hjbxjhbvjhfvbs";
 $sql60 = "select * from mentor_info";
        $query = mysql_query($sql60,$conn);
while($r = mysql_fetch_array($query)) {
     $id =$r['mid'];
     $name =$r['name'];
     $email = $r['email'];
     $status = $r['status'];

$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
$password = substr( str_shuffle( $chars ), 0, 8 );


$chars = "abcdefghijklmnopqrstuvwxyz";
$lname = substr( str_shuffle( $chars ), 0, 5 );




	// echo "$password \n"; 
	// echo "$id";
	// echo "$name";



  
$sql61 = "INSERT INTO mentorlogininfo(name,email,password,status,mid,lname)VALUES('$name','$email','$password','$status','$id','$lname')";
 		$query1 = mysql_query($sql61,$conn);
 


$sql62 = "INSERT INTO login_user(name,email,password,status,lname,rid)VALUES('$name','$email','$password','$status','$lname','2')";
 		$query2 = mysql_query($sql62,$conn);
 
$sub2 = "Account setup on Query System";
$msg2 = "Your account has been setup on query system.Please login to check your queries asked by students\n
     EMAIL = $email\n
     PASSWORD = $password";
     mail($email, $sub2, $msg2);


 }
?>