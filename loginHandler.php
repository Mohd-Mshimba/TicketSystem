<?php 
session_start();
include("connection.php"); 
if(isset($_POST["submit"])){
 $username = $db->real_escape_string($_POST['username']);
 $password = $db->real_escape_string($_POST['password']);
 $pass = sha1($password);
 $query = $db->query("SELECT * FROM USERS WHERE username='$username' AND password='$pass'") 
 or die($db->error);
 $n=$query->num_rows;
 if($n==1){
 	$r = $query->fetch_array();
 	$_SESSION['user']=$username;
 	$_SESSION['pass']=$pass;
 	$_SESSION['pas']=$password;
 	$_SESSION['status']=$r['role']; 
 	$_SESSION['success']="YUO HAVE SUCCESS TO SIGN-IN";
 	header("location:HomeAdmin.php");
 }else{
 	$_SESSION['fail']="WRONG USERNAME OR PASSWORD!!";
 	header("location:loginForm.php");
 }
}
?>