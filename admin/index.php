<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Math with Gevorg</title>
  </head>
  <style>
/* Style for table container */
.container {
  padding: 0 15px;
}

/* Style for table */
.table {
  width: 100%;
  margin-top: 50px;
  border-collapse: collapse;
  background-color: #f7f7f9;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
}

/* Style for table headers */
.table thead th {
  font-size: 0.85rem;
  text-transform: uppercase;
  color: #a6a6a6;
  font-weight: 600;
  letter-spacing: 1px;
  border-bottom: 2px solid #e5e5e5;
  padding: 15px 10px;
}

/* Style for table rows */
.table tbody tr {
  border-bottom: 1px solid #e5e5e5;
}

/* Style for table cells */
.table td {
  padding: 15px 10px;
  font-size: 0.9rem;
  color: #4d4d4d;
  font-weight: 400;
  line-height: 1.4;
}

/* Style for table action buttons
.btn-group .btn {
  font-size: 0.85rem;
  text-transform: uppercase;
  font-weight: 600;
  letter-spacing: 1px;
  margin: 0 5px;
  padding: 5px 10px;
  border-radius: 25px;
}

.btn-group .btn-primary {
  background-color: #1e88e5;
  border-color: #1e88e5;
}

.btn-group .btn-primary:hover {
  background-color: #1a77d4;
  border-color: #1a77d4;
}

.btn-group .btn-danger {
  background-color: #e53935;
  border-color: #e53935;
}

.btn-group .btn-danger:hover {
  background-color: #d32f2f;
  border-color: #d32f2f;
} */
.btn-edit, .btn-delete {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745;
    border-radius: 0.25rem;
    transition: all 0.2s ease-in-out;
}
.btn-edit:hover, .btn-delete:hover {
    color: #fff;
    background-color: #218838;
    border-color: #1e7e34;
}
.btn-delete {
    background-color: #dc3545;
    border-color: #dc3545;
}
.btn-delete:hover {
    background-color: #c82333;
    border-color: #bd2130;
}
#btn-add-new {
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 0.25rem;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  text-align: center;
  text-decoration: none;
  cursor: pointer;
  transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
}

#btn-add-new:hover {
  background-color: #0062cc;
  color: #fff;
  box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.5);
}
.navbar.navbar-expand-lg.navbar-dark{
    background-color:#635238!important;
}

.btn.btn-primary.nav-link.active{
    background-color:#3d2f1a!important;
}

.btn-check:active+.btn-outline-light, .btn-check:checked+.btn-outline-light, .btn-outline-light.active, .btn-outline-light.dropdown-toggle.show, .btn-outline-light:active{
    background-color:#3d2f1a!important;
    
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
        <li class="nav-item">
          <!-- <a type="button" class="btn btn-outline-light nav-link active" href="create.php">Log Out </a> -->
          <a href="../project/login-reg.html"><img src="https://cdn-icons-png.flaticon.com/128/1828/1828427.png" style="height:25px;width:25px;margin-left:10px;"></a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
    <div class="container my-4">
    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
        include "connection.php";
        $sql = "SELECT * FROM user WHERE username != 'admin'";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        <th>$row[user_id]</th>
        <td>$row[username]</td>
        <td>$row[email]</td>
        <td>$row[password]</td>
        <td>
                  <a class='btn btn-success' href='edit.php?user_id=$row[user_id]'>Edit</a>
                  <a class='btn btn-danger' href='delete.php?user_id=$row[user_id]'>Delete</a>
                </td>
      </tr>
      ";
        }
      ?>
    </tbody>
  </table>
      </div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>