<!Doctype html>
<html>
<title>Login</title>
<link rel="stylesheet" href="../css/main.css" type="text/css">
<link rel="stylesheet" href="../css/login.css" type="text/css">
<head>
    <?php require '../php/menu.php' ?>
</head>
<body>
    <div id="loginportal">
        <form action="../php/login/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="Username/E-mail...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="login-submit">Login</button>
        </form>
        <a href="signup.php">Signup</a>
    <div>
</body>
</html>