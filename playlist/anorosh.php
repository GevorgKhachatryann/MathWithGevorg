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
      <iframe width="1080" height="608" src="https://www.youtube.com/embed/mALkgDt4E7w" title="Նախնական և անորոշ ինտեգրալ | Ինտեգրալ հաշիվ | «Քան» ակադեմիա" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <h3 class="title">Նախնական և անորոշ ինտեգրալ </h3>
        <p>Անորոշը ինտեգրալը <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/202945cce41ecebb6f643f31d119c514bec7a074">
                   ֆունկցիայի համար իր նախնական ֆունկցիայի բոլոր տվյալների ամբողջությունն է։ Եթե  <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/202945cce41ecebb6f643f31d119c514bec7a074">
                   ֆունկցիան որոշված է և անընդհատ է  <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/d08818bfd86771e9f67314aeec6e2aa83a55ee41"> միջակայքում, իսկ իր նախնական
                   <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/ef7c9dc516f87ed3e17287c60f65c0743b57a8f5">-ը, այսինքն՝
                   <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/92a91d207cdb58e0f70d76379092ce34db6f5993">, երբ
                   <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/3c948733b1dfeb59ab2f69e276bc82686a0ad6e5">
                   , ապա
                  <br>
                  <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/61f00eafcf915b849c8d6c0412038390322f8edf"></p>

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