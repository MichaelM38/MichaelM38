<?php
  /*
  * Description: Process Post, update and delete selected post.
  * Date: 2021-02-06
  * Author: Michael Merene
  */
  require 'Connect.php';

  $userId = filter_input(INPUT_POST, 'userId',FILTER_SANITIZE_NUMBER_INT);
  $firstName = filter_input(INPUT_POST,'firstName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $lastName = filter_input(INPUT_POST,'lastName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $password = filter_input(INPUT_POST,'userPassword', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  $error = '';


    if(!$firstName){
        $error.='<p>first Name must be at least 1 character.</p>';
    }
    if(!$lastName){
        $error.='<p>Last Name must be at least 1 character.</p>';
    }
    if(!$userName){
        $error.='<p>Username must be at least 1 character.</p>';
    }
    if(!$password){
        $error.='<p>password must be at least 1 character.</p>';
    } 
    elseif($POST['command'] == "Register" && !$error){
        $query = "INSERT user SET firstName = :firstName, lastName = :lastName, username = :username, userPassword = :userPassword";

        $statement = $db -> prepare($query);

        $statement->bindValue(':userId', $userId);
        $statement->bindValue(':firstName', $firstName);
        $statement->bindValue(':lastName', $lastName);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':userPassword', $password);

        $statement->execute();
       
    }
  
?>