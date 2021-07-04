<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>system verify</title>
</head>
<body>
    <form action="login.php" method="post">
        <h4>Login User</h4>
        <?php if (isset($_GET['error'])) { ?>
     		    <p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <lebel>User Email: </lebel>
        <input type="text" name="name" placeholder="User Name"><br>
        <lebel>User Pass: </lebel>
        <input type="pass" name="pass" placeholder="User Pass"><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>