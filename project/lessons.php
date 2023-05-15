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
  <link rel="stylesheet" href="../Style/lessons.css">
  <!-- <link rel="stylesheet" href="../Style/dashboard.css"> -->
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
          <a href="about.php" data-active="2">
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
<!-- <br> -->


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
        My<span class="bubble"></span>
        Courses<span class="bubble"></span>
    </h1>
    <section class="courses">

<!-- <h1 class="heading">Մեր դասընթացները</h1> -->

<div class="box-container">

    <div class="box">

        <div class="thumb">
            <img src="../images/mat.jfif" alt="">
        </div>
        <h3 class="title">Բարձրագույն մաթեմատիկա</h3>
        <div class="inline-btn">
            <a id="das" href="../playlist/playlist.php">view playlist</a>
        </div>
    </div>

    <div class="box">
        <div class="thumb">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJKT1gjPauIxtgZTt93YqIdrvqkqUQqgI2Rw&usqp=CAU" alt="">
        </div>
        <h3 class="title">Անալիտիկ երկրաչափություն</h3>
        <div class="inline-btn">
            <a id="das" href="../playlist/playlist.php">view playlist</a>
        </div>
    </div>

    <div class="box">

        <div class="thumb">
            <img src="data:image/jpeg;base64,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" alt="">
        </div>
        <h3 class="title" id="poqr">Մաթանալիզի հիմունքներ</h3>
        <div class="inline-btn">
            <a  id="das" href="../playlist/playlist.php">view playlist</a>
        </div>
    </div>
    <div class="box">

        <div class="thumb">
            <img src="data:image/jpeg;base64,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" alt="">
        </div>
        <h3 class="title" id="poqr">Հավանականություններ</h3>
        <div class="inline-btn">
            <a id="das" href="../playlist/playlist.php">view playlist</a>
        </div>
    </div>
    <div class="box">

        <div class="thumb">
            <img src="../images/tarrakan.webp" alt="">
        </div>
        <h3 class="title">Տարրական մաթեմատիկա</h3>
        <div class="inline-btn">
            <a id="das" href="../playlist/playlist.php">view playlist</a>
        </div>
    </div>
    <div class="box">

     <div class="thumb">
         <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcLrRlhCbMbhRaVwRNHvJ6kEHW_So2b8zENEd48lrcI9KPGmOpCjg8SmvPcblKJknysNs&usqp=CAU" alt="">
     </div>
     <h3 class="title" id="poqr">Դիֆ. և ինտ. հաշիվ</h3>
     <div class="inline-btn">
         <a id="das" href="../playlist/playlist.php">view playlist</a>
     </div>
 </div>

</div>

</section>

   





  </main>
  <p class="copyright" >
      &copy; 2023 - Gevorg Khachatryan
    </p>
  <script src="../Script/menu.js">

    
  </script>
  <script src="../Script/script.js"></script>
  
</body>

</html>