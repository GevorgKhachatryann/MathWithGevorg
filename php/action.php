<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// require_once '../PHPMailer-master';
// require 'vendor/autoload.php'; // Include PHPMailer library
require '../vendor/autoload.php';

// Connect to the database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "users";
$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the user's data from the registration form
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) { 

    // Save the user's data to the database
    $sql = "INSERT INTO `users`.`user`(`username`, `password`, `email`) VALUES ('$username', '$password','$email')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Send an email to the user
    $mail = new PHPMailer(true);

    try {
        // Configure SMTP settings
        $mail->isSMTP();                                           
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'gevorgkhachatryan285@gmail.com'; // Your Gmail email address         
        $mail->Password   = 'vtijuzaraqlmikxc'; // Your Gmail email password     
        $mail->SMTPSecure = 'tls';                                  
        $mail->Port       = 587;                                    

        // Set the email content
        $mail->setFrom('noreply@mathwithgevorg.com', 'Math with Gevorg');
        $mail->addAddress($email); // The user's email address
        $mail->isHTML(false);
        $mail->Subject = 'Congratulations! You have successfully registered for Math with Gevorg';
        $mail->Body    = "Dear $username,\n\nThank you for registering for Math with Gevorg. We look forward to helping you achieve your math goals.\n\nBest regards,\nGevorg";

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
   header("Location: ../project/login-reg.html");

}

mysqli_close($conn);
?>
