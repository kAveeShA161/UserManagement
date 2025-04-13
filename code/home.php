<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>

    <!--Navigation bar starts here--> 
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="home.php">HOME</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="signin.php">Sign in</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="register.php">Get Started</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    <!--Navigation bar ends here-->

        <div style="padding: 50px;">
            <img src="img/homeimage.jpg" class="rounded float-end shadow-lg bg-body-tertiary rounded" class="" alt="...">
        </div>
            <div style="max-width: 55%;">
              <h1 style="padding: 10px; padding-left: 50px;">You are Welcome!</h1>
              <p style="padding: 10px; padding-left: 50px; ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio odit perferendis laudantium perspiciatis laborum officiis nesciunt libero nisi, corrupti maiores cupiditate repellat nihil! Repellat autem at rem laborum veritatis cum?</p>
              <div style="padding: 10px; padding-left: 50px; padding-bottom: 95px;">
                  <button type="button" class="btn btn-primary btn-lg"><a href="register.php" style="text-decoration: none; color: white;">Create an account</a></button>
                  <button type="button" class="btn btn-primary btn-lg"><a href="signin.php" style="text-decoration: none; color: white;">Sign in</a></button>
              </div>
            </div>
            <footer class="bg-light text-dark text-start py-5">
                <p class="pl-5 mb-0 fs-5">© 2025Home. All rights reserved.</p>
            </footer>  

    
</body>

</html>