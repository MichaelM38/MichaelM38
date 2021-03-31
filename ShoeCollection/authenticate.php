<?php 
/*
  * Description: Authenticates user and password.
  * Date: 2021-03-20
  * Author: Michael Merene
  */
  //defines the login and password
  define('ADMIN_LOGIN','wally'); 
  define('ADMIN_PASSWORD','mypass'); 

  if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) 
      || ($_SERVER['PHP_AUTH_USER'] != ADMIN_LOGIN) 
      || ($_SERVER['PHP_AUTH_PW'] != ADMIN_PASSWORD)) { 
    header('HTTP/1.1 401 Unauthorized'); 
    header('WWW-Authenticate: Basic realm="admin Homepage"'); 
    exit("Access Denied: Username and password required."); 
  } 
?> 