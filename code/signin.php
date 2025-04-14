<?php
    include ("connection.php");

    $msg='';

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $select1 = "SELECT * FROM users WHERE email= '$email' AND password='$password';";
        $select_user = mysqli_query($conn, $select1);

        if(mysqli_num_rows($select_user) > 0){
            $row1 = mysqli_fetch_assoc($select_user);

            if($row1['user_type'] == 'user'){
                $_SESSION['user'] = $row1['email'];
                $_SESSION['id'] = $row1['id'];
                header('location: user.php');
            } else if ($row1['user_type'] == 'admin'){
                $_SESSION['admin'] = $row1['email'];
                $_SESSION['id'] = $row1['id'];
                header('location: admin.php');
            } else {
                $msg = "Incorrect email or password";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div style="padding: 25px;">
        <div class="container text-start" style="border:rgb(9, 58, 156) 1px solid; border-radius:15px;">
        <div class="row align-items-start">

            <div class="col align-items-center">
                <div class="container text-start" >
                    <a class="navbar-brand" href="home.php" style="position:absolute; margin:20px; background-color:#427ef5; padding:10px; color: white;  border-radius:5px">HOME</a>
                    <img src="img/signin.jpg" class="rounded mx-auto d-block" style="height: 400px;">
                </div>
            </div>

            <div class="col">
                <form method="post" action="">
                    <h2 style="padding: 10px; text-align:center; margin-top:20px;">Welcome Back!</h2>
                    <P style="text-align:center;">Login to your account</P>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="text-center">
                      <button type="submit" name="submit" class="btn btn-primary" style="margin:10px; width:40%;">Login</button>
                    </div>
                    <div class="text-center">
                      <p style="margin-bottom:30px;">Don't have an account? <a href="register.php">Create an account</a></p>
                    </div>
                </form>
            </div>
        </div>
        </div>
        </div>
</body>
</html>
