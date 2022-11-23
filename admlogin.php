<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
<body>
    <div class="loginbox">
    <img src="assets/img/avatar.png" class="avatar">
        <h1>Admin Login</h1>
        <form action = "checkadmlogin.php" method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="password" name="passwd" placeholder="Enter Password" required>
            <input type="submit" value="Login">
        </form>
        
    </div>

</body>
</head>
</html>