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
    <div class="admin-page">
        <h2>Welcome to user page!</h2>
        <p>User : <span><?php echo $_SESSION['user']; ?></span></p>
        <a href="logout.php"><button class="btn font-weight-bold">Logout</button></a>

    </div>
</body>
</html>