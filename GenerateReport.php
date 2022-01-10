<!DOCTYPE html>
<html>
<?PHP
include("style.php");
?>
<style type="text/css">
  @media print{
    /* Hide every other elements */
    body{
      visibility: hidden;
    }
    /* Then display print container elements*/
    .print-container, .print-container *{
      visibility: visible;

    }
    /* Adjust the possition */
    .print-container{
      left: -10px;
      top: -100px;
    }
  }
</style>
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
          Generate Report 
        </h4>
        <hr>
        <?php
        if (!isset($_SESSION["status"])) {
          header("location:loginForm.php");
        }else{?>
          <!------------------- LETTER BLOCK ------------------------------>
          <form>
            <div class="row">
              <div class="col-sm-4">
                <button class="btn" onclick="window.print();" id="printBtn">
                  <i class="fa fa-print"></i>&nbsp;Print Out
                </button>
              </div>
            </div>

            <div>
              <div class="col-xl-12 col-md-12">
                <div id="tbOveFl">
                  <!-- start -->
                  <div style="height: 450px;width: 750px; border-radius: 3px;">
                    <div style="min-height: 400px;">
                      <!-- content -->
                      <div style="padding: 65px 0px 0px 15px;background-color: #EBEDEF;" class="row print-container">
                        <table id="table example" class="display">
                          <!-- PHP CODE -->
                          <tr>
                            <tr>
                              <td colspan="2">
                                <u id="u">
                                  AIRPLANE & BUS REPORT
                                </u>
                              </td>
                            </tr>
                            <td>
                              <p style="margin-left: 450px; font-size: 18px;">
                                <span id="date">
                                  Date:&nbsp;&nbsp; 
                                  </span><?php echo date("d/m/Y h:i:s a", time()); ?>
                                </p>
                              </td>
                            </tr>
                          </table>
                          <?php
                          require_once('connection.php');
                      // ================ START REPORTS ===================

                          $query = $db->query("SELECT * FROM users, ticket WHERE 
                            (users.user_id=ticket.user_id and users.role='customer')");
                          $n = $query->num_rows;
                          while($r=$query->fetch_array()){
                            ?>
                            <table class="table table-striped" style="font-size: 16px">
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
                              <!-- 4 ROW -->
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
                              <!-- 5 ROW -->
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
                              <!-- 6 ROW -->
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
                              <tr>
                                <td colspan="4">
                                  <center>
                                    ******************************************************************
                                  </center>
                                </td>
                              </tr>
                            </table>
                            <?php 
                          } 
                          ?>
                        </div>
                        <!-- end content -->
                      </div>
                    </div>
                    <!-- ---end-- -->
                  </div>
                </div>
              </div>
            </form>
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
<?php } ?>
</body>
</html>
