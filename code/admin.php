<?php
    include ("connection.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="admin-page" style="padding: 50px; text-align: center; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        <h2 style="font-size:50px;">Welcome to admin page!</h2>
        <p style="padding: 10px; margin: 10px; font-size: 20px;">Admin : <span><?php echo $_SESSION['admin']; ?></span></p>
        <a href="logout.php"><button class="btn font-weight-bold" style="background-color:rgb(21, 49, 164); color: white; padding: 10px; border:0; width:20%; border-radius: 5px; font-size: 15px;">Logout</button></a>
    </div>
</body>
</html>