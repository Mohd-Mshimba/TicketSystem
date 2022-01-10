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
  $ticket_date = $db->real_escape_string($_POST["ticket_date"]);
  $ticket_time = $db->real_escape_string($_POST["ticket_time"]);
  $Froms = $db->real_escape_string($_POST["Froms"]);
  $To_ = $db->real_escape_string($_POST["To"]);
  $ticket_type = $db->real_escape_string($_POST["ticket_type"]);
  $payment = $db->real_escape_string($_POST["payment"]);

     $qry1 = $db->query("UPDATE USERS set fName='$fName', mName='$mName',lName='$lName', gender='$gender',dob='$dob',phone='$phone',email='$email',address='$address', nida='$nida' WHERE user_id='$user_id'") or die("$db->error");

     $query = $db->query("SELECT *FROM USERS WHERE user_id='$user_id'") 
     or die("$db->error");
     $n=$query->num_rows;
     $r=$query->fetch_array();
     $barCode = $r['nida'].'_'.$r['lName'];

     $qry2 = $db->query("UPDATE TICKET set ticket_date='$ticket_date',ticket_time='$ticket_time',Froms='$Froms',To_='$To_',ticket_type='$ticket_type',barcode='$barCode',payment='$payment' WHERE user_id='$user_id'") or die($db->error);
     
     $_SESSION['success']="YUO HAVE SUCCESS TO UPDATE INFORMATION";
    header("location:ManageTicket.php");
   }else{
    $_SESSION['fail']="THE UPDATION OF DATA FAILD!!";
    header("location:ManageTicket.php");
  }
?>
