<?php include('MyHometown.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="Style.css"/>
    <link rel="icon" href="images/login.png" type="image/gif">
</head>

<body>
    <form method="post" class="form" name="login" action="Login.php">
        <?php include('Errors.php'); ?>
        <h1 class="login-title">Login</h1>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" class="login-input"/>
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" class="login-input"/>
        </div>
        <div class="input-group" align="center">
            <input type="submit" class="login-button" value="Login" name="login_user"/>
        </div>

        <p>
            Not yet a member? <a href="Register.php">New Registration</a></p>
  </form>
</body>
</html>