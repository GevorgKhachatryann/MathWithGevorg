<?php
  include "connection.php";
  $id="";
  $name="";
  $email="";
  $password="";

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['user_id'])){
      header("location:admin/index.php");
      exit;
    }
    $id = $_GET['user_id'];
    $sql = "select * from user where user_id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location: admin/index.php");
      exit;
    }
    $name=$row["username"];
    $email=$row["email"];
    $password=$row["password"];

  }
  else{
    $id = $_POST["user_id"];
    $name=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];

    $sql = "update user set username='$name', email='$email', password='$password' where user_id='$id'";
    $result = $conn->query($sql);
    header('Location: ../admin/index.php');

  }
  
?>
<!DOCTYPE html>
<html>
<head>
 <title>Math with Gevorg</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<style>
    .btn.btn-primary.nav-link.active{
    background-color:#3d2f1a!important;
    

}
.bg-dark{
    background-color:#635238!important;
}
.btn-check:active+.btn-outline-light, .btn-check:checked+.btn-outline-light, .btn-outline-light.active, .btn-outline-light.dropdown-toggle.show, .btn-outline-light:active{
    background-color:#3d2f1a!important;
    
}
#navbarNav > ul > li:nth-child(1){
 margin-left:700%;
 
}
 /* Styling for form */
 form {
  width: 500px;
  margin: 0 auto;
  height:180px;
  
}
.card{
    padding:5px;
}
#bu{
    display:flex;
    justify-content:space-around;
    margin-bottom:8px;
}
body > div > form > div > input{
  width: 90%;
  /* padding: 0.5rem; */
  border: 1px solid #ccc;
  border-radius: 0.25rem;
  font-size: 1rem;
  margin-bottom: 1rem;
}

[class="btn btn-success"]
 {
  display: inline-block;
  /* padding: 0.5rem 1rem; */
  background-color: #2da149;
  border: none;
  color: #fff;
  font-size: 1rem;
  border-radius: 0.25rem;
  transition: all 0.2s ease-in-out;
  width:200px;
  height:38px;
}
[class="btn btn-info"]
 {
  display: inline-block;
  /* padding: 0.5rem 1rem; */
  background-color: #c72a2a;
  border: none;
  color: #fff;
  font-size: 1rem;
  border-radius: 0.25rem;
  transition: all 0.2s ease-in-out;
  width:200px;
  height:38px;
}
[class="btn btn-info"]:hover{
    background-color:#eb4646;
    
}
.card-header.bg-warning{
  background-color:#635238!important;

}
</style>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Math with Gevorg</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a type="button" class="btn btn-outline-light nav-link active" href="create.php">Add New</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-warning">
 <h1 class="text-white text-center">  Update Member </h1>
 </div><br>

 <input type="hidden" name="user_id" value="<?php echo $id; ?>" class="form-control"> <br>

 <label> Username: </label>
 <input type="text" name="username" value="<?php echo $name; ?>" class="form-control"> <br>

 <label> Email: </label>
 <input type="text" name="email" value="<?php echo $email; ?>" class="form-control"> <br>

 <label> Password: </label>
 <input type="text" name="password" value="<?php echo $password; ?>" class="form-control"> <br>

 
 <div id="bu">
 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>
</div>
 </div>
 </form>
 </div>
</body>
</html>