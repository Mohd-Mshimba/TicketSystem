<?php
require_once("connection.php");
session_start();
if(isset($_POST["submit"])){
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
  $pass = sha1(12345);

     $qry1 = $db->query("INSERT INTO USERS(fName,mName,lName,gender,dob,phone,email,address,role,nida,username,password) 
      VALUES('$fName','$mName','$lName','$gender','$dob','$phone','$email','$address','customer','$nida','$lName','$pass')") or die("$db->error");

     $query = $db->query("SELECT *FROM USERS WHERE nida='$nida' AND fName='$fName'") 
     or die("$db->error");
     $n=$query->num_rows;
     $r=$query->fetch_array();
     $userId = $r['user_id'];
     $barCode = $r['nida'].'_'.$r['lName'];

     $qry2 = $db->query("INSERT INTO TICKET(ticket_date,ticket_time,Froms,
      To_,ticket_type,barcode,payment,user_id)  
      VALUES('$ticket_date','$ticket_time','$Froms','$To_','$ticket_type','$barCode',
      '$payment','$userId')") or die($db->error);
     
     $_SESSION['success']="YUO HAVE SUCCESS TO ASSIGN TICKET";
    header("location:ManageTicket.php");
   
}
?>
