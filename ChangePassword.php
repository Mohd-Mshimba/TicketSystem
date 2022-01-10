<!DOCTYPE html>
<html>
<?PHP
include("style.php");
?>
<body>
  <div class="container" style="min-height:750px;">
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
        Change Password &nbsp
        <img src="bootstrap/img/show.gif" width="10%" >
      </h4>
        <hr>
        <div class="col-sm-12">
          <?php
        if (!isset($_SESSION["status"])) {
          header("location:loginForm.php");
        }else{
          ?>

          <center>
            <div id="changePass">
              <h3>Change Password</h3>    
            </div>
            <form id="loginForm" method="POST" action="ChangePassHandler.php">

              <?php
              if(isset($_SESSION['fail'])){?>
                <div class="col-md-12 bg-danger">
                  <label class="danger">
                    <?php echo $_SESSION['fail']; ?>
                  </label>
                </div>
              <?php }

              if(isset($_SESSION['success'])){?>
                <div class="col-md-12 bg-success">
                  <label class="success">
                    <?php echo $_SESSION['success']; ?>
                  </label>
                </div>
              <?php }?>

              <div class="form-group">
                <label for="old">
                  <i id="star">*&nbsp</i>Old Password
                </label>
                <div class="form-group has-success has-feedback">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fa fa-lock"></i>
                    </span>
                    <input type="text" name="old" id="old" class="form-control" required="" placeholder="Eg:  12345678">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="new">
                  <i id="star">*&nbsp</i>New Password
                </label>
                <div class="form-group has-success has-feedback">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fa fa-lock"></i>
                    </span>
                    <input type="password" name="new" id="new" class="form-control" name="new" required="" placeholder="Eg:  54321">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="comfirm">
                  <i id="star">*&nbsp</i>Comfirm Password
                </label>
                <div class="form-group has-success has-feedback">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fa fa-lock"></i>
                    </span>
                    <input type="password" name="comf" id="comfirm" class="form-control" name="comfirm" required="" placeholder="Eg:  54321">
                  </div>
                </div>
              </div>
              <input type="submit" name="update" class="btn btn-primary" value="Update" 
              style="width: 25%">
              <br><br>
              <i id="star">*&nbsp</i>
              <span id="Mandatory">Means Mandatory to Fill</span>
            </form>
          </center>
        </div>
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
unset($_SESSION['fail']);
unset($_SESSION['success']);
?>
</body>
</html>
