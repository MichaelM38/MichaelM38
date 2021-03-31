<!DOCTYPE html>
<html>
<head>
	<title>Log-In Page</title>
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
                            font-weight-normal">Log in </h1>
                            <label for="username"
                            class="sr-only visually-hidden"> User Name</label>
                            <input type="text" id="username" class="form-control" 
                            placeholder="userName" required autofocus>
                            <label for="password"
                            class="sr-only visually-hidden">Password</label>
                            <input type="text" id="password"
                            placeholder="Password" class="form-control" required>
                            <div class="mt-3">
                                <button class="btn btn-lg btn-primary btn-block">Sign In</button>
                            </div>
                            <div id="register-link" class="text-right mt-3">
                                <a href="RegisterPage.php" class="text-info ">Register here</a>
                                <a href="AdminHomepage.php" class="text-info">Administrator login</a>
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