<?php
session_start();
require_once("connection.php");
if(!isset($_SESSION["status"])){
  header("location:regForm.php");
}
if(isset($_POST["update"])){

    $Old=sha1($db->real_escape_string($_POST["old"]));
    $New=sha1($db->real_escape_string($_POST["new"]));
    $Comf=sha1($db->real_escape_string($_POST["comf"]));
    $user = $_SESSION["user"];

     $query=$db->query("SELECT * FROM USERS WHERE username='$user'") or die($db->error_no);  
     $result=$query->fetch_assoc();
     if ($result['password']==$Old) {
       if ($result['password']==$Old and $New==$Comf){
       $query1=$db->query("UPDATE USERS SET password='$New' WHERE username='$user'")or die($db->error);
       $_SESSION['success']="YOU HAVE SUCCESS TO CHANGE PASSWORD!";
       header("location:ChangePassword.php");
      }else{
        $_SESSION['fail']="NEW AND CONFIRM PASSWORD NOT MATCHED!";
       header("location:ChangePassword.php");
      }
    }else{
      $_SESSION['fail']="THE OLD PASSWORD IS NOT CORRECT!";
       header("location:ChangePassword.php");
    }
}
?>