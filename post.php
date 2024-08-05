<div id="post-list" class="mt-5">
        <div id="heading" class="d-flex align-items-center p-2 rounded-top">
        <h4 class="border border-black p-1 rounded me-3" id="post-name">
        <?php echo $ROW_USER['first_name'] . " " . $ROW_USER['last_name']; ?></h4>
        <a href="communitypage.php" class="text-decoration-none"><h4>...in Community_Name</h4></a>
        </div>
        <div id="content" class="p-4 d-flex align-items-center">
        <div id="image">
        <img src="intro-bg.png" id="post-photo" style="height:250px;width:400px;margin-right:30px;">
        </div>
        <div id="text" class="rounded p-4">
        <p> <?php echo $ROW['post']; ?> </p>
        </div>
        </div>
        <div id="footing" class="d-flex align-items-center p-2 rounded-bottom">
        <a href="a" ><i class="fa-regular fa-comment me-3 text-black"></i></a>
        <a href="a"><i class="fa-regular fa-heart me-3 text-black"></i></a>
        </div>
        </div>
        