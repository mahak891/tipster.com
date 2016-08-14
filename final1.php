 
<!DOCTYPE html>
<html>
<head>
<title>form</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
</script>
<script type="text/javascript" src="test.js">
</script>

</head>
<style>

body{
  background-color: #D8BFD8;
  color:white;
   font-family: 'Titillium Web', sans-serif;
}


.login-box{
  position:relative;
  margin: 85.0px auto;
  width: 520px;
  height: 430px;
  background-color: black;
  padding: 10px;
  border-radius: 3px;
  -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
}

.lb-header{
  position:relative;
  color:white;
  margin: 5px 10px 10px 10px;
  padding-bottom:10px;
padding-top:10px;
  text-align:center;
  height:28px;
  background-color:none;
}

.lb-header .active{
background-color:#008080;
}
.lb-header a{
  margin: 0 25px;
  padding: 8px 55px;
  text-decoration: none;
  color: white;
  font-weight: none;
  font-size: 20px;

}
.lb-header a:hover{ background-color:#008080;
                    width:200%;

}


.welcome{ color:white;
         text-align:center;
       margin:auto;
        font-size:20px;
        margin-top:8%;
        margin-bottom:8%;
}



.email-login,.email-signup{
  width: 100%;
  height:auto;
  margin-top: 20px;
  text-align:center;
}
.u-form-group{
  width:100%;
  margin-bottom: 20px;
}
.u-form-group input[type="email"],
.u-form-group input[type="password"]{
  width: calc(80% - 22px);
  height:40px;
  outline: none;
  border: 1px solid white;
  padding: 0 10px;
  border-radius: 2px;
  color: white;
  font-size:0.8rem;
  background-color:black;

}
 .u-form-group input:focus{
  border-color: #66CDAA;
}

.forgot-password{
  width:70%;
  text-align: right;
  text-decoration:none;
  color: #66CDAA;
  font-size: 1.0rem;
  margin-left:50%;
  margin-top:30%;
  padding-top:30%;
}

.u-form-group input[type="submit"]{
  width: calc(80% - 22px);
  background-color: #008080;
  border: none;
  outline: none;
  color: #fff;
  font-size: 14px;
  font-weight: normal;
  padding-top:20px;
padding-bottom:20px;
text-align:center;
  border-radius: 2px;
  text-transform: uppercase;
      margin-left: -9px;
      cursor: pointer;
}

input[type="text"], textarea{
background-color:black;
border: 1px solid white;
margin-left: 10.2%;
padding-top:10px;
padding-bottom:10px;
color:white;
width:calc(42.4% - 22px);
text-indent: 7px;
margin-right: -8.75%;
}
input[type=text]:focus {
border: 1px solid #75ff22;
}
.login{display:block;
}
.signup{display:none;
}
.div1{margin-left: 11.9%;
       width:105.3%;
      margin-top: 6px;
}
.div2{margin-left:-1.7%;
      width: 105.10%;
}
.firstname{position: relative;}
.lastname{position: absolute;
float: left;}


</style>
  <body>
 <?php
  include('connectdb.php');
   ?>

<div class="login-box">
    <div class="lb-header">
      <a href="#" class="active" id="login-box-link">LOG IN</a>
      <a href="#" id="signup-box-link">SIGN UP</a>
    </div>

    <div class="login" >
 <div class="welcome"> WELCOME BACK! </div>

    <form class="email-login" method="post" action="welcome.php">
      <div class="u-form-group">
        <input type="email" placeholder="Email*" name="email" />
        
      </div>
      <div class="u-form-group">
        <input type="password" placeholder="Password*" name="passwd" />
      </div>


   <div class="u-form-group">
        <a href="#" class="forgot-password">Forgot Password?</a>
      </div>


      <div class="u-form-group">
       <div class="div2">
     <input type="submit" value="Log in">
       </div> 
      </div>
      </form>
    </div>


         <div class="signup">

 <div class="welcome">Sign Up for Free </div>
       <form method="post" action="welcome1.php" >
       
   <input type="text" placeholder=" FirstName*" name="fname" />
   
   
 <input type="text" placeholder=" Last Name* " name="lname" />
 
   
       
     <div class="email-signup">
        <div class="u-form-group">
        <input type="email" placeholder="Email Address*" name="email" />
        
      </div>
      <div class="u-form-group">
        <input type="password" placeholder="Set a Password*" name="passwd" />
      </div>
    </div>
  
      <div class="u-form-group">
           <div class="div1">
        <input type="submit" value="get started"> 
           </div>
      </div>
      </form>
  </div>
</div>


</body>
</html>
