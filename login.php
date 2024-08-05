<?php
session_start();
include "class/connect.php";
include "class/login.php";
$email="";
$password= "";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login=new Login();
   $result= $login->evaluate($_POST);
   if($result != "") {
       echo"<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
       echo"<br>The following errors occurred:<br><br>";
       echo $result;
       echo "</div>";
    }
    else
    {
       header("Location:profilepage.php");
       die;
    }
    $email=$_POST['email'];
    $password=$_POST['password'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HamroGatha|Log In</title>
    <link rel="icon" href="HamroGlogo.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
     
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Karla:ital,wght@0,800;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>
<body class="karla-regular">
<header id="header" class="pt-3">
        <div class="container d-flex">
        <a href="timelinepage.php" class="me-auto">
          <img src="HamroGlogo.png" alt="logo" id="logo">
        </a>
        </div>
</header>
<section id="main">
    <div class="container">
    <h2 class="mb-4 text-center red-custom">Log In to <span class="k2d-bold blue-custom">HamroGatha</span></h2>
<div id="login" class="mx-auto w-25">
    <form  method="post" class="row border border-primary rounded mb-3 p-4 mx-auto">
    <input value="<?php echo $email?>" name="email" type="email" placeholder="Email" class="form-control mb-3 rounded col-lg-12" required>
    <input value="<?php echo $password?>" name="password" type="password" placeholder="Password" class="form-control rounded mb-3 col-lg-12 " required> 
    <button type="submit" class="btn btn-primary col-lg-3 mx-auto">Log In</button>
    </form>
    <p class="ms-5 grey-custom">Don’t have an account? <a href="signup.php" class="text-decoration-none">Sign Up</a></p>
</div>
</div>
</section>
    
</body>
</html>