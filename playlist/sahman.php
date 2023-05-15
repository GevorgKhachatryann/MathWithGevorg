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
        <iframe width=100% height=600px src="https://www.youtube.com/embed/U-QjSJc8BYE?list=PLVTagC-s4RxPijkR8Kh9Dt8OiZt64SXiK" title="Սահման. ներածություն | Մաթանալիզ | «Քան» ակադեմիա" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>      </div>
      <h3 class="title">Սահման. ներածություն</h3>

      <p>Սահման, արժեք մաթեմատիկայում, որին ֆունկցիան կամ հաջորդականությունը «ձգտում» են, երբ փոփոխականը «ձգտում» է որոշակի արժեքի։ Սահմանը հիմնական հասկացություն է մաթեմատիկական անալիզում և օգտգործվում է այնպիսի հասկացություններ սահմանելիս, ինչպիսիք են՝ անընդհատությունը, ածանցյալը և ինտեգրալը։

Հաջորդականության սահմանի ավելի ընդհանրացված գաղափարը տոպոլոգիական ցանցերի սահմանն է և սերտորեն կապված է կատեգորիաների տեսության սահմանի և ուղիղ սահմանի հետ։

Բանաձևերու ֆունկցիայի սահմանը սովորաբար նշանակվում է հետևյալ կերպ՝        
<br>        
             <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/f5c4adc667e687e332a498508b01cda56fbfc208">
           <br>
             և կարդացվում է  <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/202945cce41ecebb6f643f31d119c514bec7a074">
             ֆունկցիայի սահմանը, երբ 

              x-ը ձգտում է 

              c-ի հավասար է 

              L-ի»։ Այս փաստը նաև նշանակում են հետևյալ կերպ՝
              <br>
             <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/4bcd86fe90a89df88dbdf6a71b146043ad2291e6">
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