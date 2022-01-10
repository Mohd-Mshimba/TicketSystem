<?php
session_start();
   	if(isset($_GET["id"])){
    require_once("connection.php");
	$id=$_GET["id"];
       $q = $db->query("DELETE FROM USERS WHERE user_id='$id'") or die($db->error);
       $q = $db->query("DELETE FROM TICKET WHERE user_id='$id'") or die($db->error);
       $_SESSION['success']="REMOVING DATA HAVE BEEN SUCCESSFULLY";
     header("location:ManageTicket.php");
}else{
		$_SESSION['fail']="REMOVING THE DATA HAVE BEEN FAIL";
	   header("location:ManageTicket.php");
}
?>