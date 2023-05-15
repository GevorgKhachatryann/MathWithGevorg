<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Math with Gevorg</title>
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <!-- <link rel="stylesheet" href="../Style/playlist.css"> -->
  <link rel="stylesheet" href="../Style/menu.css">
  <link rel="stylesheet" href="../Style/style.css">
  <link rel="stylesheet" href="../Style/lessons.css">
  <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/546/546743.png" type="image/x-icon">
  <link rel="stylesheet" href="../Style/sahman.css">
</head>

<body style="flex-wrap:wrap;justify-content:center;">
  <nav>
    <div class="sidebar-top">
      <span class="shrink-btn">
        <i class='bx bx-chevron-left'></i>
      </span>
      <img src="https://cdn-icons-png.flaticon.com/128/546/546743.png" class="logo" alt="">
      <h3 class="hide" style="padding:0px;margin:0px;padding-left:0px;">Math with Gevorg</h3>
    </div>

    <div class="search">
      <i class='bx bx-search'></i>
      <input type="text" class="hide" placeholder="Quick Search ...">
    </div>

    <div class="sidebar-links">
      <ul>
        <li class="tooltip-element" data-tooltip="0">
          <a href="../php/dashboard.php"  data-active="0">
            <div class="icon">
              <i class='bx bx-tachometer'></i>
              <i class='bx bxs-tachometer'></i>
            </div>
            <span class="link hide">Dashboard</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="1">
          <a href="../project/lessons.php" class="active"  data-active="1">
          <div class="active-tab"></div>

          <div class="icon">
              <i class='bx bx-folder'></i>
              <i class='bx bxs-folder'></i>
            </div>
            <span class="link hide">Courses</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="2">
          <a href="../project/about.php" data-active="2">
            <div class="icon">
              <i class='bx bx-message-square-detail'></i>
              <i class='bx bxs-message-square-detail'></i>
            </div>
            <span class="link hide">About</span>
          </a>
        </li>
       
        <div class="tooltip">
          <span >Dashboard</span>
          <span class="show">Courses</span>
          <span>About</span>
        </div>
      </ul>

      <!-- <h4 class="hide">Shortcuts</h4> -->

      <ul>
        <li class="tooltip-element" data-tooltip="0">
          <a href="../php/task.php" data-active="4">
            <div class="icon">
              <i class='bx bx-notepad'></i>
              <i class='bx bxs-notepad'></i>
            </div>
            <span class="link hide">Tasks</span>
          </a>
        </li>
       
        <!-- <li class="tooltip-element" data-tooltip="1">
          <a href="#" data-active="5">
            <div class="icon">
              <i class='bx bx-help-circle'></i>
              <i class='bx bxs-help-circle'></i>
            </div>
            <span class="link hide">Help</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="2">
          <a href="#" data-active="6">
            <div class="icon">
              <i class='bx bx-cog'></i>
              <i class='bx bxs-cog'></i>
            </div>
            <span class="link hide">Settings</span>
          </a>
        </li> -->
        <div class="tooltip">
          <span class="show">Tasks</span>
        </div>
      </ul>
    </div>
    <br>
       
       

    <div class="sidebar-footer">
      <a href="#" class="account tooltip-element" data-tooltip="0">
        <i class='bx bx-user'></i>
      </a>
      <div class="admin-user tooltip-element" data-tooltip="1">
        <div class="admin-profile hide">
          <img src="../images/face-1.png" alt="">
          <div class="admin-info">
            <h3><?php  
        
              $x = $_SESSION['username'];
              echo "$x";
              ?></h3>
                  <h5>User</h5>
          </div>
        </div>
        <a  href="../project/login-reg.html" class="log-out">
          <i class='bx bx-log-out'></i>
        </a>
      </div>
      <div class="tooltip">
        <span class="show"><?php   
        $x = $_SESSION['username'];
        echo "$x";
        ?></span>
        <span>Logout</span>
      </div>
    </div>
  </nav>


  <main>
  
  <div class="video-container">
      <div class="video">
      <iframe width="1080" height="608" src="https://www.youtube.com/embed/R6qJUq9Ayug" title="Ածանցման հիմնական օրենքները | Մաթանալիզ | «Քան» ակադեմիա" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>      <h3 class="title">Ածանցման հիմնական օրենքները</h3>

      <p>Ածանցման հիմնական օրենքներն են՝ <br>
     <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/cd0e3e8980164e7de16899715de99be8d68329b7">
     <br>
     <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/d858f5de93aa418df24f6f953e85d1c95587ef7f" alt="">
     <br>
     <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/fe1196d7c82601623013d1c7a5779259e707ac9c" alt=""> 
     <br>
     <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/e18a260c8711eb1c0c05928ab6c6704e02ec9004" alt="">
      <br>
      <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/abcfeea34ec248db2a3bbc9fc7afc3842a553fe5" alt="">
    <br>
    <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/8e57a9a8e61e37f893533f3b160cb2a67df8fea7" alt="">
    <br>
    <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/e85fa27e5995e4136e53377265ed71ea1daee43d" alt="">    
    <br>
    <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/31bd4b1d80116144b297e30970f2c1847bf0fbbd" alt="">
     <br>
     <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/2ba472988f53b91a3c5c7805e845dd8881a69726" alt="">
     <br>
     <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/8f2cd50cb71f9a438f6db258a7c0c738ff5b7dd3" alt="">
      <br>
<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/7b104889f344d74bcf5b444ac28f5ed38644a4c6" alt="">
     <br>
     <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/bef271912e54de0c3449a2865df952776a99b722" alt="">
    </p>

      <a class="button" href="../playlist/playlist.php">view playlist</a>
      <div class="info">
         <p class="date"><i class="fas fa-calendar"></i><span>
            <?php 
          echo   date("Y/m/d")
            ?>
         </span></p>
       
      </div>
     
      <!-- <form action="" method="post" class="flex">
      
         <div class="inline-btn">
            <a href="playlist.html" >view playlist</a> 
            </div>
      </form> -->
    

        </div>
        </div>
        </div>

  </main>

  <script src="../Script/menu.js"></script>
</body>
<p class="copyright">
          &copy; 2023 - Gevorg Khachatryan
    </p>
</html>