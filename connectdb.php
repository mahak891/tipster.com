<?php
   
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'root';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   

  mysql_select_db('query_system');
   session_start(); 
?>