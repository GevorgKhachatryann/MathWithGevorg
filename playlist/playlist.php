<? 
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
  <link rel="stylesheet" href="../Style/menu.css">
  <link rel="stylesheet" href="../Style/playlist.css">
  <link rel="stylesheet" href="../Style/dashboard.css">
  <link rel="stylesheet" href="../Style/style.css">
  <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/546/546743.png" type="image/x-icon">
  <!-- <link rel="stylesheet" href="../Style/task.css"> -->

</head>
<style>

    
</style>

<body style="flex-wrap:wrap;justify-content:center;">
<nav>
    <div class="sidebar-top">
      <span class="shrink-btn">
        <i class='bx bx-chevron-left'></i>
      </span>
      <img src="https://cdn-icons-png.flaticon.com/128/546/546743.png" class="logo" alt="">
      <h3 class="hide">Math with Gevorg</h3>
    </div>
    <div class="search">
      <i class='bx bx-search'></i>
      <input type="text" class="hide" placeholder="Quick Search ...">
    </div>

    <div class="sidebar-links">
      <ul>
        <li class="tooltip-element" data-tooltip="0">
          <a href="../php/dashboard.php" data-active="0">
            <div class="icon">
              <i class='bx bx-tachometer'></i>
              <i class='bx bxs-tachometer'></i>
            </div>
            <span class="link hide">Dashboard</span>
          </a>
        </li>
        <li class="tooltip-element"   data-tooltip="1">
          <a href="../project/lessons.php"  class="active"  data-active="1">
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
        <li class="tooltip-element" data-tooltip="3">
          <a href="../php/task.php" data-active="3">
            <div class="icon">
              <i class='bx bx-bar-chart-square'></i>
              <i class='bx bxs-bar-chart-square'></i>
            </div>
            <span class="link hide">Tasks</span>
          </a>
        </li>
        
        <div class="tooltip">
          <span >Dashboard</span>
          <span class="show">Courses</span>
          <span>About</span>
          <span>Tasks</span>
        </div>
   
      </ul>
      <div>
<br>


    <div class="sidebar-footer">
      <a href="#" class="account tooltip-element" data-tooltip="0">
        <i class='bx bx-user'></i>
      </a>
      <div class="admin-user tooltip-element" data-tooltip="1">
        <div class="admin-profile hide">
          <img src="./img/face-1.png" alt="">
          <div class="admin-info">
            <h3><?php  
        
        $x = $_SESSION['username'];
        echo "$x";
        ?></h3>
            <h5>User</h5>
          </div>
        </div>
        <a href="../project/login-reg.html" class="log-out">
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

    <h1 class="sticky">
    Բարձրագույն<span class="bubble"></span>
    մաթեմատիկա<span class="bubble"></span>
    </h1>
   
    <section class="playlist-videos">

   <!-- <h1 class="heading">Բարձրագույն մաթեմատիկա</h1> -->

   <div class="box-container">

      <a class="box" href="sahman.php">
         <i class="fas fa-play"></i>
         <img src="../images/mat.jfif" alt="">
         <h3 >Սահման. ներածություն | Մաթանալիզ</h3>
      </a>

      <a class="box" href="acancum.php">
         <i class="fas fa-play"></i>
         <img src="../images/mat.jfif" alt="">
         <h3>Ածանցման հիմնական օրենքները | Մաթանալիզ</h3>
      </a>

      <a class="box" href="anorosh.php">
         <i class="fas fa-play"></i>
         <img src="../images/mat.jfif" alt="">
         <h3>Նախնական և անորոշ ինտեգրալ </h3>
      </a>
  

      <a class="box" href="voroshyal.php">
         <i class="fas fa-play"></i>
         <img src="../images/mat.jfif" alt="">
         <h3>Որոշյալ ինտեգրալը մեկ կետի վրա</h3>
      </a>

      <a class="box" href="hamakarg.php">
         <i class="fas fa-play"></i>
         <img src="../images/mat.jfif" alt="">
         <h3>Գծային համակարգերի լուծում մատրիցների օգնությամբ</h3>
      </a>

      <a class="box" href="kor.php" style="padding-bottom:15 ;" >
         <i class="fas fa-play"></i>
         <img src="../images/mat.jfif"  alt="">
         <h3>Կորի տակ ընկած մակերեսի մոտարկումը սեղաններով | Ինտեգրալ հաշիվ</h3>
      </a>

   </div>
<!-- custom js file link  -->
<!-- <script src="index.js"></script> -->
</section>



   




  </main>
  <script src="../Script/menu.js">

    
  </script>
  <script src="../Script/script.js"></script>
  
</body>

<p class="copyright" >
      &copy; 2023 - Gevorg Khachatryan
    </p>
</html>