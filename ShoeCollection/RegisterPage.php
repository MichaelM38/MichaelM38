<?php
/*
  * Description: Register new user.
  * Date: 2021-03-24
  * Author: Michael Merene
  */

    require "connect.php";

    $id = filter_input(INPUT_GET, 'userId', FILTER_SANITIZE_NUMBER_INT);

    $query = "SELECT * FROM user WHERE userId = :userId";

    $statement = $db->prepare($query);
    $statement->bindValue(':userId', $id, PDO::PARAM_INT);
    $statement->execute();
    $user= $statement->fetch();

    $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $userName = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
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

    $query = 'INSERT INTO users(firstName,lastName,username,userPassword) VALUES(:firstName,:lastName,:username,:userPassword)';

    $statement = $db -> prepare($query);
    $statement -> bindvalue(':firstName', $firstName);
    $statement -> bindvalue(':lastName', $lastName);
    $statement -> bindvalue(':username', $userName);
    $statement -> bindvalue(':userPassword', $password);
    $statement -> execute();

    $insert_id = $db->lastInsertId();
    
    
?>



<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div id="login">
        
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form>
                            <img class="mb-4" src="shoeIcon.png" alt="" width="72" height="57">
                            <h1 class="h3 mb-3
                            font-weight-normal">Register </h1>
                            <label for="firstname"
                            class="sr-only"> First Name</label>
                            <input type="text" id="firstname" class="form-control mb-3" 
                            placeholder="First Name" required autofocus>
                            <label for="lastname"
                            class="sr-only"> Last Name</label>
                            <input type="text" id="lastname" class="form-control mb-3" 
                            placeholder="Last Name" required >
                            <label for="username"
                            class="sr-only "> User Name</label>
                            <input type="text" id="username" class="form-control mb-3" 
                            placeholder="userName" required >
                            <label for="password"
                            class="sr-only ">Password</label>
                            <input type="text" id="password"
                            placeholder="Password" class="form-control mb-3" required>
                            <label for="password"
                            class="sr-only ">Re-Enter Password</label>
                            <input type="text" id="password"
                            placeholder="Re-Enter Password" class="form-control mb-3" required>
                            <div class="mt-3">
                                <input type="submit" class="btn btn-lg btn-primary btn-block" name="command" value="Register"></input>
                            </div>


  

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>