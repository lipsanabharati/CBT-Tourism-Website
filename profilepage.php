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

//posting starts

if($_SERVER['REQUEST_METHOD']=='POST')
{   $post= new Post();
    $id=$_SESSION['hamrog_userid'];
    $result=$post->create_post($id,$_POST);

    if($result == "")
    {
        header("Location:profilepage.php");
        die;
    }
    else{
        echo"<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
        echo"<br>The following errors occurred:<br><br>";
        echo $result;
        echo "</div>";
    }
    
}
//collect posts
$post= new Post();
$id=$_SESSION['hamrog_userid'];
$posts = $post->get_posts($id);

//echo '<pre>';
//print_r($posts);
//echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HamroGatha|Profile</title>
    <link rel="icon" href="HamroGlogo.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
     
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Karla:ital,wght@0,800;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="profilepage.css">
</head>
<body class="karla-regular">
<header id="header" class="pt-3">
        <div class="container d-flex">
        <a href="timelinepage.php" class="me-auto">
          <img src="HamroGlogo.png" alt="logo" id="logo">
        </a>
        <nav>
            <ul class="list-unstyled d-flex">
         <li><form class="form-inline my-2 my-lg-0 d-flex align-items-center" action="endpoint" method="GET">
            <input class="form-control mr-sm-2 me-2" type="search" placeholder="Search"  name="query" required>
            <button class="btn btn-outline-primary my-2 my-sm-0 me-2" type="submit">Search</button>
          </form></li>
        <li><a href="profilepage.php"><div id="user-pfp" class="border border-primary rounded me-2"><img src="examplepfp.avif" alt="pfp" id="pfp" class="rounded"></div></a></li>
        <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket text-black"></i></a></li>
          <ul>
        </nav>
          </div>
</header>
<section id="profile-banner" class="mt-5">
    <div class="container">
     <div class="rounded p-3 d-flex" id="banner">
    <div id="name">
     <img src="examplepfp.avif" alt="pfp" id="person-pfp" class="rounded-circle">
     <h4>
        <?php echo $user_data['first_name']." ".$user_data['last_name']?>
    </h4>
     </div>
     </div>
     <ul class="nav nav-tabs " id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button
                class="nav-link active"
                id="home-tab"
                data-bs-toggle="tab"
                data-bs-target="#home"
                type="button"
                role="tab"
                aria-controls="home"
                aria-selected="true"
            >
                Posts
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button
                class="nav-link"
                id="profile-tab"
                data-bs-toggle="tab"
                data-bs-target="#profile"
                type="button"
                role="tab"
                aria-controls="profile"
                aria-selected="false"
            >
                Communities
            </button>
        </li>
     </ul>
     <div class="tab-content">
        <div
            class="tab-pane active"
            id="home"
            role="tabpanel"
            aria-labelledby="home-tab"
        >
        <div id="post-list" class="mt-5">
        <div id="create-post" class=" border border-black rounded" style="height:auto;">
        <form method="post">
        <textarea name="post" placeholder="Something to say?" rows="3" cols="150" class="form-control"></textarea>
         <div id="footing" class="d-flex align-items-center p-2 rounded-bottom">
        <button type="sumbit" class="btn btn-primary">Post</button>
        </div>
        </form>
        </div>
        </div>
        

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
        </div>
        
        <div
            class="tab-pane"
            id="profile"
            role="tabpanel"
            aria-labelledby="profile-tab"
        >
        <div id="community-list" class="mt-5">
            <div id="heading" class="d-flex align-items-center p-2 rounded-top">
             <a href="a"><i class="fa-solid fa-bars"></i></a>
            </div>
            <div id="content" class="p-4 d-flex align-items-center">
            <div id="image" class="me-3">
            <a href="communitypage.php" class="text-decoration-none"><img src="community-pfp.jpg" id="community-pfp" class="rounded-circle"></a>
            </div>
            <div id="community-text">
            <div id="community-name" class="rounded p-4 mb-2">
            <a href="communitypage.php" class="text-decoration-none"><h3>Community_Name</h3></a>
            </div>
            <div id="community-desc" class="rounded p-4">
            <p>Description:<br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nam voluptatum repudiandae rem eaque odit. Quod dolor, molestias omnis beatae doloribus provident incidunt debitis architecto veritatis, officiis repellendus quae quo!
            </p>
            </div>
            </div>
            </div>
            <div id="footing" class="d-flex align-items-center p-2 rounded-bottom">
            </div>
            </div>
            <div id="community-list" class="mt-5">
                <div id="heading" class="d-flex align-items-center p-2 rounded-top">
                 <a href="a"><i class="fa-solid fa-bars"></i></a>
                </div>
                <div id="content" class="p-4 d-flex align-items-center">
                <div id="image" class="me-3">
                <a href="communitypage.php" class="text-decoration-none"><img src="community-pfp.jpg" id="community-pfp" class="rounded-circle"></a>
                </div>
                <div id="community-text">
                <div id="community-name" class="rounded p-4 mb-2">
                <a href="communitypage.php" class="text-decoration-none"><h3>Community_Name</h3></a>
                </div>
                <div id="community-desc" class="rounded p-4">
                <p>Description:<br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nam voluptatum repudiandae rem eaque odit. Quod dolor, molestias omnis beatae doloribus provident incidunt debitis architecto veritatis, officiis repellendus quae quo!
                </p>
                </div>
                </div>
                </div>
                <div id="footing" class="d-flex align-items-center p-2 rounded-bottom">
                </div>
                </div>
                <div id="community-list" class="mt-5">
                    <div id="heading" class="d-flex align-items-center p-2 rounded-top">
                     <a href="a"><i class="fa-solid fa-bars"></i></a>
                    </div>
                    <div id="content" class="p-4 d-flex align-items-center">
                    <div id="image" class="me-3">
                    <a href="communitypage.php" class="text-decoration-none"><img src="community-pfp.jpg" id="community-pfp" class="rounded-circle"></a>
                    </div>
                    <div id="community-text">
                    <div id="community-name" class="rounded p-4 mb-2">
                    <a href="communitypage.php" class="text-decoration-none"><h3>Community_Name</h3></a>
                    </div>
                    <div id="community-desc" class="rounded p-4">
                    <p>Description:<br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nam voluptatum repudiandae rem eaque odit. Quod dolor, molestias omnis beatae doloribus provident incidunt debitis architecto veritatis, officiis repellendus quae quo!
                    </p>
                    </div>
                    </div>
                    </div>
                    <div id="footing" class="d-flex align-items-center p-2 rounded-bottom">
                    </div>
                    </div>
        </div>
     </div>
     </div>
</section>

<script src="https://kit.fontawesome.com/f99f7f724d.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>     
</body>
</html>