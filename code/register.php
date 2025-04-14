<?php
    include ("connection.php");

    $msg = '';
    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $user_type = $_POST['user_type'];
        $password = $_POST['password'];
        $cpassword = $_POST['confirmpassword'];

        if(!($password === $cpassword)){
            $msg = "Password doesn't match";
        } else {
            $select1 = "SELECT * FROM users WHERE email = '$email' AND password='$password'";
            $select_user = mysqli_query($conn,$select1);
    
            if(mysqli_num_rows($select_user) > 0){
                $msg = "User already exist!";
            } else {
                $insert1 = "INSERT INTO users (name, email, password, user_type) VALUES ('$name', '$email', '$password', '$user_type')";
                mysqli_query($conn,$insert1);
                header('location: signin.php');
            }
        }

        
    }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
                    <img src="img/registration.png" class="rounded mx-auto d-block" style="height: 400px;">
                </div>
            </div>

            <div class="col">
                <form action="" method="post">
                    <h2 style="padding: 10px; text-align:center; margin-top:20px;">Create an account</h2>
                    <P style="text-align:center;">Enter your details to get started</P>
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                        <div id="email" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="user_type" class="form-label">Who you are?</label>
                        <select name="user_type" id="" class="form-control">
                            <option value="user" name="user">User</option>
                            <option value="admin" name="admin">Admin</option>
                        </select>                    
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="confirmpassword" class="form-label">Confirm Password</label>
                        <input type="password" name="confirmpassword" class="form-control" id="confirmpassword">
                        <p class="msg" style="color:rgb(185, 10, 10); padding: 10px;"><?php echo $msg; ?></p>
                    </div>
                    <div class="text-center">
                      <button type="submit" name="submit" class="btn btn-primary" style="margin-bottom:10px; width:40%;">Sign up</button>
                    </div>
                    <div class="text-center">
                      <p style="margin-bottom:30px;">Already have an account? <a href="signin.php">Sign in</a></p>
                    </div>
                </form>
            </div>
        </div>
        </div>
        </div>
</body>
</html>
