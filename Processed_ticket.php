<!DOCTYPE html>
<html>
<head>
  <title>TICKET SYSTEM</title>
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
  <link href="bootstrap/css/styleee.css" rel="stylesheet" type="text/css" media="all"/>
  <script src="bootstrap/js/jquery-2.1.1.min.js"></script> 
  <link rel="icon" type="image/jpg" href="bootstrap/img/suza.png" />
  <link href="bootstrap/css/font-awesome.css" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css"/>
  <style type="text/css">
    table {
      border-collapse: collapse;
    }

    table, th, td {
      border: 1px solid black;
    }
    #pad{
      padding: 25px 0px 0px 5px
    }

    #txt{
      font-family: Segoe UI;
    }
  </style>
</head>
<body>
  <div class="container" id="cont">
   <div class="row">
     <div><img src="bootstrap/img/header.png" id="foot"></div>
   </div>
   <!-- sidenav -->
   <div class="row content">
    <?php 
    include("sideNav.php"); 
    ?>
    <div class="col-sm-9">
      <div class="row">
        <h4 id="AssignT">
          &nbsp;Tickets  Processing 
        </h4>
        <hr>
        <?php
        if (!isset($_SESSION["status"])) {
          header("location:loginForm.php");
        }else{?>

          <!-- -----------------php block------------------------------- -->
          <?php
          include("connection.php");
          $id=$_GET['id'];
          $query = $db->query("SELECT * FROM users, ticket WHERE (users.user_id=ticket.user_id AND users.user_id=$id)");
          $n = $query->num_rows;
          $r=$query->fetch_array();
          ?>
          <!------------------- LETTER BLOCK ------------------------------>

          <!-------------- BACK BUTTON------------- -->
          <div class="row">
            <div class="col-sm-4">
              <a href="ManageTicket.php" style="color: white" class="btn" id="printBtn">
                <i class="fa fa-arrow-left">&nbsp;BACK</i>
              </a>
            </div>
            <div class="col-sm-5"></div>
            <div class="col-sm-3">
              <button class="btn" onclick="window.print();" id="printBtn">
              <i class="fa fa-print"></i>&nbsp;Print Out
            </button>
          </div>
        </div>
          <!------------------- END BACK BLOCK ------------------------------>
            
        <div class="row print-container">
        <div class="col-xl-12 col-md-12">
          <div style="margin: auto; overflow: auto; padding: 25px">
            <!-- start background-image: url('bootstrap/img/ticket.png'); -->
            <div style="height: 432px; width: 752px; border-radius: 3px;">
              <img src="bootstrap/img/ticket.png" id="imgT">
                <!-- content -->
                <div style="padding: 67px 0px 0px 50px;">
                  <table class="table" style="width:98%; margin: -427px 0px 0px 10px;">

                    <!-- 1 ROW -->
                    <tr>
                      <td rowspan="2" id="pad">
                        <b id="txt">Full Name</b> :&nbsp&nbsp 
                        <?php echo $r['fName']." ".$r['mName']." ".$r['lName']; ?>
                      </td>
                      <td colspan="2">
                        <b id="txt" style="padding-left: 120px">Ticket No:</b>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php echo $r['ticket_id'];?>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2">
                       <b id="txt" style="padding-left: 120px">Date :</b> 
                       <?php echo $r['ticket_date'];?> 
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <b id="txt">Time :</b> 
                       <?php echo $r['ticket_time'];?>
                     </td>
                   </tr>

                   <!-- 2 ROWS -->
                   <tr>
                    <td rowspan="2" id="pad">
                      <b id="txt">Ticket Type</b> :&nbsp&nbsp 
                      <?php echo $r['ticket_type']; ?>
                    </td>
                    <td>
                      <b id="txt" style="padding-left: 120px">Gender</b>
                    </td>
                    <td>
                      <b id="txt">Date of Birth</b>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span style="padding-left: 120px">
                        <?php echo $r['gender']; ?>
                          
                        </span>
                    </td>
                    <td>
                      <span>
                        <?php echo $r['dob']; ?>
                      </span>
                    </td>
                  </tr> 

                  <!-- 3 ROWS -->
                  <tr>
                    <td>
                      <b id="txt">Phone No:</b>&nbsp;&nbsp;&nbsp;
                      +255-<?php echo $r['phone']; ?>
                    </td>
                    <td rowspan="2" colspan="2" id="pad">
                      <b id="txt" style="padding-left: 120px">Email:</b>&nbsp;&nbsp;&nbsp;
                      <?php echo $r['email']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td>
                     <b id="txt">Address:</b>&nbsp;&nbsp;&nbsp;
                     <?php echo $r['address']; ?>
                   </td>
                 </tr>

                 <!-- 4 ROWS -->
                 <tr>
                  <td>
                    <b id="txt">From:</b><br>&nbsp;&nbsp;&nbsp;
                    <?php echo $r['Froms']; ?>
                  </td>
                  <td colspan="2">
                    <b id="txt" style="padding-left: 120px">To:</b><br>&nbsp;&nbsp;&nbsp;
                    <spa style="padding-left: 120px">
                      <?php echo $r['To_']; ?>
                    </spa>
                  </td>
                </tr>

                <!-- 5 ROW -->
                <tr>
                  <td>
                    <b id="txt">National ID :</b>&nbsp;&nbsp;&nbsp;
                    <?php echo $r['nida']; ?>
                  </td>
                  <td colspan="2" rowspan="2" style="padding-left: 50px"><b>Scan BarCode</b>
                    <img alt='<?php echo $r['barcode']; ?>' src="bootstrap/img/barcode.php?text=<?php echo $r['barcode'];?>" 
                    style="margin:10px 2px 0px 100px; margin-right: 10px;">
                  </td>
                </tr>
                <tr>
                  <td>
                    <b id="txt">Payments :</b>&nbsp;&nbsp;&nbsp;TShs.
                    <?php echo $r['payment']; ?>/=
                  </td>
                </tr>
                <!-- END ROW -->
              </table>
            </div>
            <!-- end content -->
        </div>
        <!-- ---end-- -->
      </div>
    </div>
  </div>
    <!-- ---------------------------------------------------------->
  </div>
</div>
<div class="row">
 <div class="col-sm-12">
  <img src="bootstrap/img/footer.png" id="foot">
</div>
</div>
</div>
</div>
<?php
}
?>
</body>
</html>
