
<!DOCTYPE html>
<html>
<head>
<style>
body{
 background: url(../hkhjkjhkhjk.jpg);
  color: white;
}
.main{
  margin-left: 10%;
}
.div1 input[type=text] {
     width: 50%;
    padding-bottom:30px;
    background-color: #1A1A1A;
    border: 1px solid white;
    border-radius: 2px;
    color: white;
    
}
.div2 input[type=text]{  
    width: 50%;
      padding-bottom: 50px;
      background-color: #1A1A1A;
    border: 1px solid white;
    border-radius: 2px;
    color: white;
      
}
.div3 input[type=submit]{
  text-transform: uppercase;
  text-align: center;
    margin-top: 6%;
    padding:1%;
    background-color: white;
    border: 1px solid white;
    border-radius: 3px;
    cursor: pointer;
}
.div4{padding-top: 4%;}

h1{text-align: center;
color: ;}
</style>
</head>
<body>
<?php
  include('../connectdb.php');
   ?>
<h1>Write your query</h1>
<form method="post" action="querysubmit.php">
<div class="main">
  <div class="div1">

  Query title: <br><br>
  <input type="text"  name="title"><br><br>
  </div> 
  <div class="div2">
  Query description:<br><br>
  <input type="text"  name="descr">
  </div>
<div class="div4">
Choose mentor:
<?php

$conn = new mysqli('localhost', 'root', 'root', 'query_system') 
or die ('Cannot connect to db');

    $result = $conn->query("select uid, name from login_user where rid='2'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='mentors'>";

    while ($row = $result->fetch_assoc()) {


                  unset($uid, $name);
                  $uid = $row['uid'];
                  $name = $row['name']; 
                  echo '<option value="'.$uid.'">'.$name.'</option>';
                 
}

    echo "</select>";
    echo "</body>";
    echo "</html>";
?>
</div>
  <div class="div3">
  <input type="submit" value="Submit">
  </div>
  </div>
</form>
</body>
</html>
