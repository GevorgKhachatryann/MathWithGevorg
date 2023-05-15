<?php
    session_start();
 
  // Check if results are already shown
  if (isset($_SESSION['resultsReady']) && $_SESSION['resultsReady']) {
      $resultsReady = true;
  } else {
      $resultsReady = false;
  }
    // Connection to MySQL database
    $mysqli = new mysqli("localhost", "root", "", "users");
    
    // Check connection
    if($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    
    // Fetch questions and options from math_quiz table
    $sql = "SELECT id, question, option1, option2, option3, option4, answer FROM math_quiz";
    $result = $mysqli->query($sql);
    
    // Store questions in an array
    $questions = array();
    while($row = $result->fetch_assoc()) {
        $questions[] = $row;
    }
    
    // Initialize variables
    $currentQuestion = 0;
    $userId = $_SESSION['id'];
    // Process form submission
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["options"])) {
            if (isset($_SESSION['id'])) {
            // Store user answer for current question in session variable
            $userAnswer = $_POST["user_answer"];
            $_SESSION["userAnswers"][$currentQuestion] = $userAnswer;
            
            // Move to next question
            $currentQuestion++;
            
            // If all questions answered, calculate results
            if($currentQuestion == count($questions)) {
                $correctAnswers = 0;
                
                // Loop through user answers and store in user_answers table
                for($i = 0; $i < count($_SESSION["userAnswers"]); $i++) {
                    $questionId = $questions[$i]["id"];
                    $userAnswer = $_SESSION["userAnswers"][$i];
                    
                    // $insertSql = "INSERT INTO user_answers (user_id, question_id, user_answer) VALUES (?, ?, ?)";
                    // $stmt = $mysqli->prepare($insertSql);
                   
                    // $stmt->bind_param("iis", $userId, $questionId, $userAnswer);
                  

                    // // Replace with actual user ID
                    // $stmt->execute();
                    // $stmt->close();
                    
                    // Check if user answer is correct
                    if($userAnswer == $questions[$i]["answer"]) {
                        $correctAnswers++;
                    }
                }
                
                // Calculate percentage of correct answers
                $totalQuestions = count($questions);
                $percentageCorrect = ($correctAnswers / $totalQuestions) * 100;
                
                // Display quiz results
                echo "Total Questions: " . $totalQuestions . "<br>";
                echo "Correct Answers: " . $correctAnswers . "<br>";
                echo "Incorrect Answers: " . ($totalQuestions - $correctAnswers) . "<br>";
                echo "Percentage Correct: " . $percentageCorrect . "%<br>";
              
                $resultsReady = true;

                
               
            
              
                
                
 
    // $updateSql = "UPDATE `user` SET `quiz_result_percentage`= $percentageCorrect WHERE `id`=$userId"; // Replace `user_id` with the actual column name for your condition
    // $updateStmt = $mysqli->prepare($updateSql);
    // $updateStmt->bind_param("di", $percentageCorrect, $_SESSION['id']);
    // $updateStmt->execute();
    // $updateStmt->close();

                // Reset session variable for user answers
                unset($_SESSION["userAnswers"]);
                
            } else {
                echo "Error: No answers submitted!";
            }
        }
    }
    }
    
    // Close database connection
    $mysqli->close();
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
  <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/546/546743.png" type="image/x-icon">
  <link rel="stylesheet" href="../Style/task.css">
  <link rel="stylesheet" href="../Style/style.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>
<style>
/* Style for quiz form container */
.quiz-form-container {
    width: 80%;
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f8f8f8;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* Style for quiz form heading */
.quiz-form-container h2 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
    text-align: center;
}

/* Style for question container */
.question-container {
    margin-bottom: 10px;
  }

/* Style for question text */
.question-container p {
    font-size: 18px;
    margin-bottom: 10px;
    color: #555;
}

/* Style for option container */
.option-container {
    display: flex;
    align-items: center;
    margin-bottom: 5px;
}

/* Style for option radio button */
.option-container input[type="radio"] {
    margin-right: 10px;
}

/* Style for option label */
.option-container label {
    font-size: 16px;
    color: #777;
}

/* Style for submit button */
.submit-btn {
    display: block;
    margin: 20px auto;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    font-size: 18px;
    cursor: pointer;
}

/* Style for submit button on hover */
.submit-btn:hover {
    background-color: #0069d9;
}
/* Style for result form container */
.result-form-container {
    margin-top:15px;
    margin-bottom:15px;
    width: 80%;
    max-width: 800px;
    margin-left:  auto;
    margin-right:  auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
  
    background-color: #f8f8f8;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* Style for result form heading */
.result-form-container h2 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
    text-align: center;
}

/* Style for result form text */
.result-form-container p {
    font-size: 18px;
    margin-bottom: 10px;
    color: #555;
}

/* Style for result form text with bold */
.result-form-container p strong {
    font-weight: bold;
}

/* Style for result form text with percentage */
.result-form-container p:last-child {
    margin-bottom: 0;
}

/* Style for result form text with percentage in bold */
.result-form-container p:last-child strong {
    color: #007bff;
    font-weight: bold;
}

</style>
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
          <a href="../php/dashboard.php" data-active="0">
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
        <li class="tooltip-element"  data-tooltip="0">
          <a href="../php/task.php" class="active" data-active="4">
          <div class="active-tab"></div>
            <div class="icon">
              <i class='bx bx-notepad'></i>
              <i class='bx bxs-notepad'></i>
            </div>
            <span class="link hide">Tasks</span>
          </a>
        </li>
        <div class="tooltip">
          <span >Dashboard</span>
          <span>Courses</span>
          <span>About</span>
          <span class="show">Tasks</span>
        </div>
      </ul>

  
    </div>

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
  <h1 class="sticky">
        My<span class="bubble"></span>
        Tasks<span class="bubble"></span>
    </h1>

  
    <?php
 
// Check if results are already shown
if (isset($_SESSION['resultsReady']) && $_SESSION['resultsReady']) {
    $resultsReady = true;
} else {
    $resultsReady = false;
}
    // session_start();
    // Process form submission
    // Connection to MySQL database
    $mysqli = new mysqli("localhost", "root", "", "users");

    // Check connection
    if($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // Store user answers in $userAnswers array
        if(isset($_POST['user_answer'])){

            $userAnswers = $_POST["user_answer"];
           
            // Calculate quiz results
            $correctAnswers = 0;
            for($i = 0; $i < count($questions); $i++) {
                if($userAnswers[$i] == $questions[$i]["answer"]) {
                   
                    $userAnswer = $userAnswers[$i];
                    $userId = $_SESSION['id'];
                   
                  // Replace with actual user ID
                    $questionId = $questions[$i]["id"];
                    $correctAnswers++;
                    // Insert user answer into user_answers table using appropriate SQL query
                    // For example:
                   
                }
                // print_r($questions[$i]);
                
              
   
            }
            // print_r($userAnswers);
        //     for($i = 0; $i <= count($userAnswers); $i++) {
        //     $insert = "INSERT INTO `user_answers`( `user_id`, `question_id`, `user_answer`) VALUES ('$userId','$questionId','$userAnswer')";
        //     mysqli_query($mysqli,$insert); // $conn is your database connection variable
            
        // }
        // Assuming $userAnswers is an array of user answers
        foreach($userAnswers as $i => $userAnswer) {
            // Update the values of $userId, $questionId, and $userAnswer for each iteration
            $userId = $_SESSION['id']; // Update with the correct user ID
            $questionId = $questions[$i]["id"]; // Update with the correct question ID
        
            // Insert the user answer into the database using prepared statements
            $stmt = $mysqli->prepare("INSERT INTO `user_answers`(`user_id`, `question_id`, `user_answer`) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $userId, $questionId, $userAnswer);
            $stmt->execute();
        }
            // for($i = 1; $i <= count($userAnswers); $i++) {
            //     $sql = "INSERT INTO `user_answers`( `user_id`, `question_id`, `user_answer`) VALUES ('$userId','$questionId','$userAnswer')";
            //     mysqli_query($mysqli, $sql); // $conn is your database connection variable
             
            // }
           
// Calculate percentage of correct answers
$totalQuestions = count($questions);
$percentageCorrect = ($correctAnswers / $totalQuestions) * 100;

// Store quiz results in session variables
$_SESSION["totalQuestions"] = $totalQuestions;
$_SESSION["correctAnswers"] = $correctAnswers;
$_SESSION["percentageCorrect"] = $percentageCorrect;
// Store $resultsReady value in $_SESSION
$_SESSION['resultsReady'] = $resultsReady;

$updateSql = "UPDATE `user` SET `quiz_result_percentage` = " . $percentageCorrect . " WHERE `id` = " . $userId;

// Execute the query
$result =$mysqli->query($updateSql);
           

        }
    }
    
    ?>
     <!-- HTML form -->
     <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="quiz-form-container">
    <?php for($i = 0; $i < count($questions); $i++) { ?>
        <div class="question-container">
            <h3><?php echo $questions[$i]["question"]; ?></h3>
            <div class="options">
                <input type="radio" name="user_answer[<?php echo $i; ?>]" value="<?php echo $questions[$i]["option1"]; ?>" <?php if(isset($resultsReady) && $resultsReady) echo 'disabled'; ?>> <?php echo $questions[$i]["option1"]; ?><br>
                <input type="radio" name="user_answer[<?php echo $i; ?>]" value="<?php echo $questions[$i]["option2"]; ?>" <?php if(isset($resultsReady) && $resultsReady) echo 'disabled'; ?>> <?php echo $questions[$i]["option2"]; ?><br>
                <input type="radio" name="user_answer[<?php echo $i; ?>]" value="<?php echo $questions[$i]["option3"]; ?>" <?php if(isset($resultsReady) && $resultsReady) echo 'disabled'; ?>> <?php echo $questions[$i]["option3"]; ?><br>
                <input type="radio" name="user_answer[<?php echo $i; ?>]" value="<?php echo $questions[$i]["option4"]; ?>" <?php if(isset($resultsReady) && $resultsReady) echo 'disabled'; ?>> <?php echo $questions[$i]["option4"]; ?><br>
            </div>
        </div>
    <?php } ?>
    <button type="submit" class="submit-btn" <?php if(isset($resultsReady) && $resultsReady) echo 'disabled'; ?>>Submit</button>
</form>

     <div class="result-form-container" <?php if (!isset($_SESSION["totalQuestions"]) || !isset($_SESSION["correctAnswers"]) || !isset($_SESSION["percentageCorrect"])) { echo 'style="display:none;"'; } ?>>
        <h2>Quiz Results</h2>     
        <p>Total Questions: <?php echo $_SESSION["totalQuestions"];?></p>
        <p>Correct Answers: <?php if(isset($userAnswers)){ echo $_SESSION["correctAnswers"];}else{ echo $correctAnswers=0;}  ?></p>
        <p>Incorrect Answers: <?php if(isset($userAnswers)){ echo ($_SESSION["totalQuestions"] - $_SESSION["correctAnswers"]); }else{ }; ?></p>
        <p>Percentage Correct: <?php if(isset($userAnswers)){ echo round($_SESSION["percentageCorrect"],1); }else{echo 0;}; ?>%</p>
    </div>

       

  </main>
        
 
<script src="../Script/quiz.js"></script>
  <script src="../Script/menu.js"></script>
</body>
<p class="copyright">
      &copy; 2023 - Gevorg Khachatryan
    </p>
</html>