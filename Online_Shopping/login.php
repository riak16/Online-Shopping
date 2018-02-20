<?php

//include database connection file
require_once 'login_db.php';
 
 
// verifying user from database using PDO
$encpass=md5($_POST['password']);
$stmt = $DBcon->prepare("SELECT username, password from user WHERE username='".$_POST['username']."' && password='".$encpass."'");
$stmt->execute();
$row = $stmt->rowCount();
if ($row > 0){
    echo "correct";
    session_start();
    $_SESSION["user"] = $_POST['username'];
} else{
    echo 'wrong';
}
 
?>