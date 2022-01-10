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
          Manage tickets
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
          <!------------------- PHP BLOCK ------------------------------>
          <div style="padding: 20px; overflow: auto;">
            <table class="display table table-hover" id="example" style="width: 100%;">
            <thead>
              <tr>
                <th id="th">View</th>
                <th id="th">Full Name</th>
                <th id="th">Gender</th>
                <th id="th">Phone</th>
                <th id="th">Nida</th>
                <th id="th">Print</th>
                <th id="th">Edit</th>
                <th id="th">Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              include("connection.php");
              $query = $db->query("SELECT * FROM USERS WHERE role!='Admin'"); 
              $n=$query->num_rows;
              while($r=$query->fetch_assoc()){
                ?>
                <tr>
                  <!-- BUTTON OF VIEWS DETA -->
                  <td style="text-align: center;">
                    <a href="view_user.php?id=<?php echo $r['user_id']; ?>">
                      <i class="fa fa-eye" id="<?php echo $r["user_id"]?>"></i>
                    </a>
                  </td>
                  <!-- END BUTTON VIEW -->
                  <td><?php echo" ".$r["fName"]."  ".$r['mName']."  ".$r['lName'];?></td>
                  <td><?php echo" ".$r["gender"]?></td>
                  <td><?php echo"+255-".$r["phone"]?></td>
                  <td><?php echo" ".$r["nida"]?></td>
                  <td style="text-align: center;">
                    <a href="Processed_Ticket.php?id=<?php echo $r['user_id']; ?>">
                      <i class="fa fa-print"></i>
                    </a>
                  </td>
                  <td style="text-align: center;">
                    <a href="EditTick_User.php?id=<?php echo $r['user_id']; ?>">
                      <i class="fa fa-pencil">
                      </i>
                    </a>
                  </td>
                  <td style="text-align: center;">
                    <a href="DeleteTick_user.php?id=<?php echo $r['user_id']; ?>" 
                      onclick ="return Delete()">
                      <i class="fa fa-trash-o">
                      </i>
                    </a>
                    </td><?php } ?> 
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- ---------------------------------------------------------->
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
