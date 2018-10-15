<!DOCTYPE html>
<html>
<title>Webstore</title>
<link rel="stylesheet" href="css/main.css" type="text/css">
<script type="text/javascript" src="scripts/homeload.js"></script>
<script type="text/javascript" src="scripts/userlogin.js.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <?php require 'php/menu.php' ?>
    <main>
        <?php

        if (isset($_SESSION['userId'])) {
            echo '<script>login();</script>';
        }
        else {
            echo '<script>signout();</script>';
        }
        ?>
    </main>
</head>
<body onload="load()" style="margin:0;">

<div id="loader"></div>

<div style="display:none;" id="animated" class="animate-bottom">
    <h2>Yes!</h2>
    <p>It works so suck my dick...</p>
</div>

</body>
</html>