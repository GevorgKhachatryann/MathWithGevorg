<?php
  session_start();

  $connect = new mysqli ('localhost','root','','users'); 

  if(isset($_POST['username1'])  && isset($_POST['password1'])){
   
  // }
  // if (isset($_POST['username1']) && isset($_POST['password1'])) { 
    $username = $_POST['username1'];
    $password = $_POST['password1'];

    $condidat = $connect->query("SELECT * FROM `users`.`user` WHERE `username` = '$username' && `password` = '$password'"); 
    $n = mysqli_num_rows($condidat);
     if($n && $username == "admin" && $password == "admin1234"){
      header("Location: ../admin/index.php");
     }else{

       if ($n && $username !== "" && $password !== "") {
         header("Location: ../php/dashboard.php"); 
         
         foreach ($condidat as $values) {
           $_SESSION['username'] = $values["username"];
           $_SESSION['email'] = $values["email"];
           $_SESSION['id'] = $values["id"];
          }
        } else {
          header("Location: ../project/login-reg.html");
        }
      }
  }    
 
?>
