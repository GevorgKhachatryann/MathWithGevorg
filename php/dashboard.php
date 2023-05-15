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
  <link rel="stylesheet" href="../Style/dashboard.css">
  <link rel="stylesheet" href="../Style/style.css">
  <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/546/546743.png" type="image/x-icon">
  <!-- <link rel="stylesheet" href="../Style/task.css"> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
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
        <div class="active-tab"></div>
        <li class="tooltip-element" data-tooltip="0">
          <a href="../php/dashboard.php" class="active" data-active="0">
            <div class="icon">
              <i class='bx bx-tachometer'></i>
              <i class='bx bxs-tachometer'></i>
            </div>
            <span class="link hide">Dashboard</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="1">
          <a href="../project/lessons.php" data-active="1">
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
          <span class="show">Dashboard</span>
          <span>Courses</span>
          <span>About</span>
          <span>Tasks</span>
        </div>
      </ul>

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

    <h1>
        My<span class="bubble"></span>
        Dashboard<span class="bubble"></span>
    </h1>


	<div class="container1">
	
	<!--   *******  Main Heading Starts  *******   -->

	<div class="main-title">

		<p>Իմ առաջընթացը ներկայացված է ստորև՝</p>
	</div>

	<!--   *******  Main Heading Ends  *******   -->

	<div class="row">
		
		<!--   *******  Left Section Starts here  *******   -->

		<section class="col">
			
		
			<div class="skills-container">
				
				<div class="skill">
					<div class="subject">Բարձրագույն մաթեմատիկա</div>
					<div class="progress-bar" value="<?php  echo round($_SESSION["percentageCorrect"],1); ?>%">
						<div class="progress-line" style="max-width: <?php  echo round($_SESSION["percentageCorrect"],1); ?>%"></div>
					</div>
				</div>

				<div class="skill">
					<div class="subject">Անալիտիկ երկրաչափություն</div>
					<div class="progress-bar" value="83%">
						<div class="progress-line" style="max-width: 83%"></div>
					</div>
				</div>

                <div class="skill">
					<div class="subject">Մաթեմատիկական անալիզի հիմունքներ</div>
					<div class="progress-bar" value="88%">
						<div class="progress-line" style="max-width: 88%"></div>
					</div>
				</div>

				<div class="skill">
					<div class="subject">Հավանականությունների տեսություն</div>
					<div class="progress-bar" value="68%">
						<div class="progress-line" style="max-width: 68%"></div>
					</div>
				</div>
                <div class="skill">
					<div class="subject">Տարրական մաթեմատիկա</div>
					<div class="progress-bar" value="68%">
						<div class="progress-line" style="max-width: 68%"></div>
					</div>
				</div>
                <div class="skill">
					<div class="subject">Դիֆերենցիալ և ինտեգրալ հաշիվ</div>
					<div class="progress-bar" value="68%">
						<div class="progress-line" style="max-width: 68%"></div>
					</div>
				</div>

			</div>
		</section>

		<!--   ********  Left Section Ends Here  *******  -->

		<!--   ********  Right Section Starts Here  ********  -->

		<section class="col" style="margin-left:7px;">
		
			
<canvas id="myChart" style="width:100%;height:330px;"></canvas>

<script>
var xValues = ["Բարձրագույն մաթեմատիկա", "Անալիտիկ երկրաչափություն", "Մաթեմատիկական անալիզի հիմունքներ", "Հավանականությունների տեսություն", "Տարրական մաթեմատիկա","Դիֆերենցիալ և ինտեգրալ հաշիվ"];
var yValues = [<?php  echo round($_SESSION["percentageCorrect"],1); ?>, 49, 90, 24, 15,80];
var barColors = ["#ffa64d", "#ffb366","#ffbf80","#ffcc99","#ffd9b3","#ffe6cc"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Իմ առաջընթացը"
    }
  }
});
</script>

			</div>
		</section>

		<!--   ********  Right Section Ends Here  ********   -->
	</div>

</div>

   
<div></div>
<br>



  </main>
  
    

<script src="../Script/script.js"></script>
  <script src="../Script/menu.js"></script>
</body>
<p class="copyright" >
      &copy; 2023 - Gevorg Khachatryan
    </p>
</html>