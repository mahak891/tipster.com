<!DOCTYPE html>
<html>
<body>
<!DOCTYPE html>
<html>
<head>
<title>Welcome ADMIN</title>
<link href="../style.css" rel="stylesheet" type="text/css" />
</head>
<body>

  <div class="navigation"> 
	  <a href="#">Home</a> 
	  <a href="../profile.php">Profile</a>
    <a href="approval.php">UserApproval</a>
	  <a href="../mentorlist.php">Mentorlist</a> 
	  <a href="../logout.php">LOGOUT</a> 
	  
  </div>
  <div class="logo"> <b>QUERY SYSTEM</b> <em>MAHAK JAIN</em> </div>
  
  

<div class="upload">
<form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="div2">
  
    <input type="file" name="csv" id="csv">
    </div>
    <div class="div1">
    <input type="submit" value="Upload file" name="submit">
    </div>
</form>
</div>
</body>
</html>
