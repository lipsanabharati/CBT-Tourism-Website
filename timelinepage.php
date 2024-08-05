<?php
 session_start();
 //print_r($_SESSION);
 include "class/connect.php";
 include "class/login.php";
 include "class/user.php";
 include "class/post.php";

 //check if user is logged in
 if(isset($_SESSION["hamrog_userid"]) && is_numeric($_SESSION['hamrog_userid'])){
    $id = $_SESSION["hamrog_userid"];
    $login= new Login();
    $result=$login->check_login($id);

    if($result){
    //retreive data from class
    $user= new User();
    $user_data=$user->get_data($id);
     if(!$user_data){
        header("Location: login.php");
        die;
     }
    }
    else{
        header("Location: login.php");
        die;
    }
 }
else{
    header("Location: login.php");
    die;
}


//collect posts
$post = new Post();
$posts = $post->get_all_posts();

//echo '<pre>';
//print_r($posts);
//echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HamroGatha| For You</title>
    <link rel="icon" href="HamroGlogo.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
     
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Karla:ital,wght@0,800;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="timelinepage.css">
</head>
<body>
   <header id="header" class="pt-3">
        <div class="container d-flex">
        <a href="timelinepage.php" class="me-auto">
          <img src="HamroGlogo.png" alt="logo" id="logo">
        </a>
        <nav>
            <ul class="list-unstyled d-flex">
         <li><form class="form-inline my-2 my-lg-0 d-flex align-items-center" action="endpoint" method="GET">
            <input class="form-control mr-sm-2 me-2 w-5" type="search" placeholder="Search"  name="query"  required>
            <button class="btn btn-outline-primary my-2 my-sm-0 me-2" type="submit">Search</button>
          </form></li>
        <li><a href="profilepage.php"><div id="user-pfp" class="border border-primary rounded me-2"><img src="examplepfp.avif" alt="pfp" id="pfp" class="rounded"></div></a></li>
        <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket text-black"></i></a></li>
          <ul>
        </nav>
          </div>
</header>

<section id="main">
    <div class="container">
        <div class="row pt-5">
         <div class="col-9">
         <div id="post-list" class="mt-5">
         <?php
         if($posts){
          foreach ($posts as $ROW) {
            $user= new User();
            $ROW_USER = $user->get_user($ROW['userid']);

            include "post.php";
          }
        }
        ?>
        </div>
                <div id="post-list" class="mt-5">
                    <div id="heading" class="d-flex align-items-center p-2 rounded-top">
                    <h4 class="border border-black p-1 rounded me-3" id="post-name">Post Name</h4>
                    <a href="communitypage.php" class="text-decoration-none"><h4>...in Community_Name</h4></a>
                    </div>
                    <div id="content" class="p-4 d-flex align-items-center">
                    <div id="image">
                    <img src="intro-bg.png" id="post-photo">
                    </div>
                    <div id="text" class="rounded p-4">
                    <p>Description: Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem porro iure laudantium cumque expedita ex, explicabo pariatur quam quae? Ducimus nostrum, ut perferendis nihil mollitia quasi exercitationem nemo suscipit eius.</p>
                    </div>
                    </div>
                    <div id="footing" class="d-flex align-items-center p-2 rounded-bottom">
                    <a href="a" ><i class="fa-regular fa-comment me-3 text-black"></i></a>
                    <a href="a"><i class="fa-regular fa-heart me-3 text-black"></i></a>
                    </div>
                    </div>
                    <div id="post-list" class="mt-5">
                        <div id="heading" class="d-flex align-items-center p-2 rounded-top">
                        <h4 class="border border-black p-1 rounded me-3" id="post-name">Post Name</h4>
                        <a href="communitypage.php" class="text-decoration-none"><h4>...in Community_Name</h4></a>
                        </div>
                        <div id="content" class="p-4 d-flex align-items-center">
                        <div id="image">
                        <img src="intro-bg.png" id="post-photo">
                        </div>
                        <div id="text" class="rounded p-4">
                        <p>Description: Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem porro iure laudantium cumque expedita ex, explicabo pariatur quam quae? Ducimus nostrum, ut perferendis nihil mollitia quasi exercitationem nemo suscipit eius.</p>
                        </div>
                        </div>
                        <div id="footing" class="d-flex align-items-center p-2 rounded-bottom">
                        <a href="a" ><i class="fa-regular fa-comment me-3 text-black"></i></a>
                        <a href="a"><i class="fa-regular fa-heart me-3 text-black"></i></a>
                        </div>
                        </div>
         </div>   
         <div class="col-3 mt-5">
          <div id="category-list" class="shadow-lg p-3 rounded">
            <h3 class="karla-bold blue-custom text-center">Explore</h3>
            <ul class="list-unstyled d-flex flex-column">
              <li class="m-3">
                <a href="a" class="text-decoration-none">
              <div class="d-flex red-custom">
                <div class="category-icon"><i class="fa-solid fa-bowl-food fa-lg"></i></div>
                <div class="category-name ms-2 karla-bold">Cuisines</div>
              </div>
              </a>
              </li>
              <li class="m-3">
                <a href="a" class="text-decoration-none">
              <div class="d-flex red-custom">
                <div class="category-icon"><i class="fa-solid fa-calendar"></i></div>
                <div class="category-name ms-2 karla-bold">Upcoming Events</div>
              </div>
              </a>
              </li>
              <li class="m-3">
                <a href="a" class="text-decoration-none">
              <div class="d-flex red-custom">
                <div class="category-icon"><img src="flag.png" id="category-i"></div>
                <div class="category-name ms-2 karla-bold">History and Culture</div>
              </div>
              </a>
              </li>
              <li class="m-3">
                <a href="a" class="text-decoration-none">
              <div class="d-flex red-custom">
                <div class="category-icon"><i class="fa-solid fa-mountain-sun"></i></div>
                <div class="category-name ms-2 karla-bold">Trekking and Mountaineering</div>
              </div>
              </a>
              </li>
              <li class="m-3">
                <a href="a" class="text-decoration-none">
              <div class="d-flex red-custom">
                <div class="category-icon"><i class="fa-solid fa-shop"></i></div>
                <div class="category-name ms-2 karla-bold">Shops</div>
              </div>
              </a>
              </li>
              <li class="m-3">
                <a href="a" class="text-decoration-none">
              <div class="d-flex red-custom">
                <div class="category-icon"><i class="fa-solid fa-circle-dollar-to-slot"></i></div>
                <div class="category-name ms-2 karla-bold">Donate and Contribute</div>
              </div>
              </a>
              </li>
              <li class="m-3">
                <a href="a" class="text-decoration-none">
              <div class="d-flex red-custom">
                <div class="category-icon"><i class="fa-solid fa-location-dot"></i></div>
                <div class="category-name ms-2 karla-bold">Explore Destinations</div>
              </div>
              </a>
              </li>
              <li class="m-3">
                <a href="a" class="text-decoration-none">
              <div class="d-flex red-custom">
                <div class="category-icon"><i class="fa-solid fa-briefcase"></i></div>
                <div class="category-name ms-2 karla-bold">Travel Agencies</div>
              </div>
              </a>
              </li>
            </ul>
          </div>
         </div>
      </div>
</section>
    <script src="https://kit.fontawesome.com/f99f7f724d.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>        
</body>
</html>