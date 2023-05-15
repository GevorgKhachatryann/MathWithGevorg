<?php
    include "connection.php";
    if(isset($_GET['user_id'])){
        $id = $_GET['user_id'];
        $sql = "DELETE from `user` where user_id=$id";
        $conn->query($sql);
    }
    header('Location: ../admin/index.php');
    exit;
?>