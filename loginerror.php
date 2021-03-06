
<html lang="en">
<head>
    <title>Login Error</title>
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Roboto:wght@300&family=Tangerine&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="icon" href="password.png">
    <style>
        #title {
                
                color: white;
                font-family: 'Julius Sans One', sans-serif;

                
            }
        .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 25%;
                height:50%;
            }
    </style>


</head> 

<body style="background-color: black">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-none">
  <a class="navbar-brand" href="index.php" id="title">Password Manager</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="/home.php">Your Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="passwordguide.php">Strong Password Guide</a>
      </li>
    </ul>
    <a href="login.php"><button type="button" class="btn btn-outline-light">Log In</button></a>
    <a href="signup.php"><button type="button" class="btn btn-outline-light" style="margin-left: 4px;" href="signup.php">Sign Up</button></a>
  </div>
</nav>

<div>
<img src="locked.gif" class="center" style="margin-top:5%">
<h1 style="margin-left:17%; margin-top: 5%; color: white;">You can't access this page without logging in</h1>
<h3 style="margin-left:27%; color: grey;">Log in to continue using Password Manager</h2>
</div>   
    
</body>
</html>

