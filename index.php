<!DOCTYPE html>
<html>
<head>
<title> WELCOME </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
</script>
<script type="text/javascript" src="testhome.js">
</script>

</head>
<style>

body {
	margin: 0;
	background: #ecf0f1;
	color: #fff;
	font-family: sans-serif;
	line-height: 1.5;
  background-image: url(fjffjg.jpg);
  background-repeat: no-repeat;
  background-position: top;
  background-size: cover;
  background-attachment: fixed;
}

ul {
  list-style: none;
  padding: 0;
  margin: 0; 
}

.main-header {
  margin-left:;
  width: 100%;
  min-height: 90px;
  padding-top: 1%;
  padding-left:5%;
  border: none;
  border-top: none;
  border-radius:;
	background: none;
	margin-right: -5%;
  padding-right: -10px;
  box-sizing: border-box;
}
  
  


.main-nav,
.drop-nav {
  background: #2c3e50;
}
.main-nav {
  float: left;
  border-radius: 4px;
  margin-top: 8px;
  margin-left:46.5%;
}
  li {
    float: left;
    border-left
  }
  
  
  .main-nav a {
    color: #fff;
    display: block;
    padding: 10px 30px;
    text-decoration: none;
    background-color: black;
  }
.dropdown
 {
  position: relative;
  display: block;
}
.dropdown:after {
  content: "\25BC";
  font-size: .5em;
  display: block;
  position: absolute;
  top: 38%;
  right: 12%;
}
.drop-nav{
  position: absolute;
  display: none;
  background-color: black;
}
.drop-nav li {
  border-bottom: 1px solid rgba(255,255,255,.2);
  background-color: black;
}
.dropdown:hover > .drop-nav{
  display: block;
}
.aboutus{ display: none;
         color: black;
        margin-top: 12%;
        margin-left: 45%;
}
.contact{display: none;
        color: black;
        margin-top: 12%;
        margin-left: 45%;
}
}



</style>
</head>
<body>
 <header class="main-header">
   
 
   
 <ul class="main-nav">
      
<li><a href="#" id="home-link">Home</a></li>
    
 <li><a href="#" id="aboutus-link">About Us</a></li>
     
 <li class="dropdown"><a href="#">Mentors list</a>
        
      <ul class="drop-nav">
                  <li><a href="mentor1.php">Mentor1</a></li>
         
           <li><a href="mentor2.php">Mentor2</a></li>
          
           <li>
<a href="mentor3.php">Mentor3</a> </li>
                    <li><a href="mentorlist.php">See All</a></li>       
       
       </ul>
      
     </li>
      
<li><a href="#" id="contactus-link">Contact Us</a></li>
   <li style="float:right;"><a href="final1.php"> Log in / Sign up</a></li>
 </ul>
  
</header>
<div class="aboutus">
<p>here u can get all the information</p>
</div>
<div class="contact">
<p>address</p>
<p>mobile-6541321264</p>
</div>
</body>

</html>