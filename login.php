<?php
    $password = 'admin';

    if (isset($_POST['password']) && $_POST['password'] == $password) {
        setcookie("password", $password, strtotime('+1 days'));
        header('Location: ' . 'administrationpanel.php');
        exit;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>This content is password protected</title>
</head>
<body>
    <div style="text-align:center;margin-top:50px;">
	    PSL Administration Panel <br>
        Please enter the password and press ENTER
        <form method="POST">
            <input type="text" name="password">
        </form>
    </div>
</body>
</html>