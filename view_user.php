<!DOCTYPE html>
<html>
<?php include("style.php"); ?>
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
        <h4 id="AssignT">&nbsp
          User Details
        </h4>
        <hr>
        <?php
        if (!isset($_SESSION["status"])) {
          header("location:loginForm.php");
        }else{?>
          <!-- ############# MSG ERROR ################ -->
          <?php
          if(isset($_SESSION['success'])){?>
            <div class="col-md-12 bg-success" style="text-align: center;">
              <label class="success">
                <?php echo $_SESSION['success']; ?>
              </label>
            </div>
          <?php }?>
          <?php
          if(isset($_SESSION['fail'])){?>
            <div class="col-md-12 bg-danger" style="text-align: center;">
              <label class="danger">
                <?php echo $_SESSION['fail']; ?>
              </label>
            </div>
          <?php }?>
          <!-------------- BACK BUTTON------------- -->
          <div class="row">
            <div class="col-xl-12 col-md-12 mb-12 col-sm-12">
              <a href="ManageTicket.php" style="color: white" class="btn" id="printBtn">
                <i class="fa fa-arrow-left">&nbsp;BACK</i>
              </a>
            </div>
          </div>
          <!------------------- PHP BLOCK ------------------------------>
          <?php
          include("connection.php");
          $id=$_GET['id'];
          $query = $db->query("SELECT * FROM users, ticket WHERE (users.user_id=ticket.user_id AND users.user_id=$id)");
          $n = $query->num_rows;
          $r=$query->fetch_array();
          ?>
<!-- 
                                  -->

             <!-- ####### CONTENT ###### -->
             <div class="row">
              <div class="col-sm-8"style="padding-left: 50px">
                <table class="table table-hover" >
                  <center>
                    <h4 id="heading">PERSONAL INFORMATIONS</h4>
                  </center>
                  <!-- 1 ROW -->
                  <tr>
                    <td>
                      <b>Full Name</b>
                    </td>
                    <td> 
                      <?php echo $r["fName"]; ?>
                    </td>
                    <td>
                      <?php echo $r["mName"]; ?>
                    </td>
                    <td>
                      <?php echo $r["lName"]; ?>
                    </td>
                  </tr>
                  <!-- 2 ROW -->
                  <tr>
                    <td>
                      <b>Gender</b>
                    </td>
                    <td>
                      <?php echo $r["gender"];?>
                    </td>
                    <td>
                      <b>Date of Birb</b>
                    </td>
                    <td>
                      <?php echo $r["dob"];?>
                    </td>
                  </tr>
                  <!-- 3 ROW -->
                  <tr>
                    <td colspan="2">
                      <b>Phone Number</b>
                    </td>
                    <td colspan="2"> 
                      <?php echo "+255-".$r["phone"];?>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <b>Email</b>
                    </td>
                    <td>
                      <?php echo $r["email"];?>
                    </td>
                    <td>
                      <b>Status</b>
                    </td>
                    <td> 
                      <?php echo $r["role"];?>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <b>Address</b>
                    </td>
                    <td>
                      <?php echo $r["address"];?>
                    </td>
                    <td>
                      <b>National ID</b>
                    </td>
                    <td> 
                      <?php echo $r["nida"];?>
                    </td>
                  </tr>
                </table>
              <table class="table table-hover" >
                  <center>
                    <h4 id="heading">TICKET INFORMATIONS</h4>
                  </center>
                  <!-- 1 ROW -->
                  <tr>
                    <td>
                      <b>Ticket ID</b>
                    </td>
                    <td> 
                      <?php echo $r["ticket_id"]; ?>
                    </td>
                    <td>
                      <b>Ticket Date</b>
                    </td>
                    <td>
                      <?php echo $r["ticket_date"]; ?>
                    </td>
                  </tr>
                  <!-- 2 ROW -->
                  <tr>
                    <td>
                      <b>Ticket Type</b>
                    </td>
                    <td>
                      <?php echo $r["ticket_type"];?>
                    </td>
                    <td>
                      <b>Ticket Time</b>
                    </td>
                    <td>
                      <?php echo $r["ticket_time"];?>
                    </td>
                  </tr>
                  <!-- 3 ROW -->
                  <tr>
                    <td>
                      <b>Come From</b>
                    </td>
                    <td> 
                      <?php echo $r["Froms"];?>
                    </td>
                    <td>
                      <b>To</b>
                    </td>
                    <td> 
                      <?php echo $r["To_"];?>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <b>Payment</b>
                    </td>
                    <td>
                      <?php echo $r["payment"];?>/=
                    </td>
                    <td>
                      <b>Bar Code</b>
                    </td>
                    <td> 
                      <?php echo $r["barcode"];?>
                    </td>
                  </tr>
              </table>
            </div>
          </div>
          <!-- ==== PROFILE PICT ===== -->
        </div>
      </div>
      <div class="container">
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
unset($_SESSION['fail']);
unset($_SESSION['success']);
?>
</body>
</html>
