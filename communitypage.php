<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HamroGatha|Community</title>
    <link rel="icon" href="/HamroGlogo.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
     
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Karla:ital,wght@0,800;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="communitypage.css">
    
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
            <input class="form-control mr-sm-2 me-2" type="search" placeholder="Search"  name="query" required>
            <button class="btn btn-outline-primary my-2 my-sm-0 me-2" type="submit">Search</button>
          </form></li>
          <li><a href="profilepage.php"><div id="users-pfp" class="border border-primary rounded me-2"><img src="examplepfp.avif" alt="pfp" id="pfp" class="rounded"></div></a></li>
         <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket text-black"></i></a></li>
          <ul>
        </nav>
          </div>
</header>
<section id="community-banner" class="mt-5">
  <div class="container">
   <div class="rounded p-3 d-flex" id="banner">
  <div id="name" class="me-4">
   <img src="community-pfp.jpg" alt="pfp" id="community-pfp" class="rounded-circle">
   <h4>Patan Guthi</h4>
   </div>
   <div id="join">
    <form action="/Php/join_community.php" method="post">
      <input type="hidden" name="community_id" value="1">
      <button type="submit" class="btn btn-primary px-5">Join</button>
  </form>
   </div>
   </div>
  
  
  <ul class="nav nav-tabs" id="myTab" role="tablist">
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
        Members
      </button>
    </li>
    

  <div class="tab-content">
    <div
      class="tab-pane active"
      id="home"
      role="tabpanel"
      aria-labelledby="home-tab"
    >
    <div id="post-list" class="mt-5">
      <div id="heading" class="d-flex align-items-center p-2 rounded-top">
      <h4 class="border border-black p-1 rounded me-3" id="post-name">Post Name</h4>
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
    <div
      class="tab-pane"
      id="profile"
      role="tabpanel"
      aria-labelledby="profile-tab"
    >
    <div class="row">
    <div id="user-list" class="mt-5 col-6">
      <div id="heading" class="d-flex align-items-center p-2 rounded-top">
       <a href="a"><i class="fa-solid fa-bars"></i></a>
      </div>
      <div id="content" class="p-4 d-flex align-items-center">
      <div id="image" class="me-3">
      <a href="profilepage.php" class="text-decoration-none"><img src="examplepfp.avif" id="user-pfp" class="rounded-circle"></a>
      </div>
      <div id="user-text">
      <div id="user-name" class="rounded p-4 mb-2">
      <a href="profilepage.php" class="text-decoration-none"><h3>User_Name</h3></a>
      </div>
      </div>
      </div>
      <div id="footing" class="d-flex align-items-center p-2 rounded-bottom">
      </div>
      </div>
      <div id="user-list" class="mt-5 col-6">
        <div id="heading" class="d-flex align-items-center p-2 rounded-top">
         <a href="a"><i class="fa-solid fa-bars"></i></a>
        </div>
        <div id="content" class="p-4 d-flex align-items-center">
        <div id="image" class="me-3">
        <a href="profilepage.php" class="text-decoration-none"><img src="examplepfp.avif" id="user-pfp" class="rounded-circle"></a>
        </div>
        <div id="user-text">
        <div id="user-name" class="rounded p-4 mb-2">
        <a href="profilepage.php" class="text-decoration-none"><h3>User_Name</h3></a>
        </div>
        </div>
        </div>
        <div id="footing" class="d-flex align-items-center p-2 rounded-bottom">
        </div>
        </div>
        <div id="user-list" class="mt-5 col-6">
          <div id="heading" class="d-flex align-items-center p-2 rounded-top">
           <a href="a"><i class="fa-solid fa-bars"></i></a>
          </div>
          <div id="content" class="p-4 d-flex align-items-center">
          <div id="image" class="me-3">
          <a href="profilepage.php" class="text-decoration-none"><img src="examplepfp.avif" id="user-pfp" class="rounded-circle"></a>
          </div>
          <div id="user-text">
          <div id="user-name" class="rounded p-4 mb-2">
          <a href="profilepage.php" class="text-decoration-none"><h3>User_Name</h3></a>
          </div>
          </div>
          </div>
          <div id="footing" class="d-flex align-items-center p-2 rounded-bottom">
          </div>
          </div>
          <div id="user-list" class="mt-5 col-6">
            <div id="heading" class="d-flex align-items-center p-2 rounded-top">
             <a href="a"><i class="fa-solid fa-bars"></i></a>
            </div>
            <div id="content" class="p-4 d-flex align-items-center">
            <div id="image" class="me-3">
            <a href="profilepage.php" class="text-decoration-none"><img src="examplepfp.avif" id="user-pfp" class="rounded-circle"></a>
            </div>
            <div id="user-text">
            <div id="user-name" class="rounded p-4 mb-2">
            <a href="profilepage.php" class="text-decoration-none"><h3>User_Name</h3></a>
            </div>
            </div>
            </div>
            <div id="footing" class="d-flex align-items-center p-2 rounded-bottom">
            </div>
            </div>
      </div>
    </div>

    
    </div>
  </div>
  </div>
  
  </section>
  <script src="https://kit.fontawesome.com/f99f7f724d.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>     
  </body>   
</body>
</html>