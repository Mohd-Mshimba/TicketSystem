<?php
require_once("connection.php");
session_start();
if(isset($_POST["submit"])){
  $user_id = $db->real_escape_string($_POST["user_id"]);
  $fName = $db->real_escape_string($_POST["fName"]);
  $mName = $db->real_escape_string($_POST["mName"]);
  $lName = $db->real_escape_string($_POST["lName"]);   
  $gender = $db->real_escape_string($_POST["gender"]);
  $dob =   $db->real_escape_string($_POST["dob"]);
  $phone = $db->real_escape_string($_POST["phone"]);
  $email = $db->real_escape_string($_POST["email"]);
  $address = $db->real_escape_string($_POST["address"]);
  $nida = $db->real_escape_string($_POST["nida"]);

     $qry1 = $db->query("UPDATE USERS set fName='$fName', mName='$mName',lName='$lName', gender='$gender',dob='$dob',phone='$phone',email='$email',address='$address', nida='$nida' WHERE user_id='$user_id'") or die("$db->error");
     
     $_SESSION['success']="YUO HAVE SUCCESS TO UPDATE INFORMATION";
    header("location:HomeAdmin.php");
   }else{
    $_SESSION['fail']="THE UPDATION OF DATA FAILD!!";
    header("location:HomeAdmin.php");
  }
?>
