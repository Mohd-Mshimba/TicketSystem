<!DOCTYPE html>
<html>
<?php
include("style.php");
?>
<body>
  <div class="container" style="min-height:750px;">
   <div class="row">
     <div><img src="bootstrap/img/header.png" id="foot"></div>
   </div>
   <!-- sidenav -->
   <div class="row content">
    <div class="col-sm-3" id="sideN">
  <div id="ul">
    <ul>
      <li id="link" style="margin-top: 30px;">
        <a href="index.php"><i class="fa fa-home">&nbsp&nbsp</i>Home</a>
      </li>
      <li id="link">
        <a href="contact.php"><i class="fa fa-book">&nbsp&nbsp</i>Cotact</a>
      </li>
      <li id="link">
        <a href="loginForm.php"><i class="fa fa-sign-in">&nbsp&nbsp</i>SignIn</a>
      </li>
    </ul>
  </div>
</div>
    <div class="col-sm-9">
      <div class="row">
        <div class="col-sm-12">
          <center>
            <div id="loginFormHeader">
              <h2>SignIn</h2>    
            </div>
            <form id="loginForm" method="POST" action="loginHandler.php">
              <!-- SESSEION -->

              <?php
              session_start();
              if(isset($_SESSION['fail'])){?>
                <div class="col-md-12 bg-danger">
                  <label class="danger">
                    <?php echo $_SESSION['fail']; ?>
                  </label>
                </div>
              <?php }?>
              <div class="form-group">
                <label for="exampleInputEmail1">
                  <i id="star">*&nbsp</i>Username
                </label>
                <div class="form-group has-success has-feedback">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fa fa-user"></i>
                    </span>
                    <input type="text" name="username" class="form-control" required="">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">
                  <i id="star">*&nbsp</i>Password
                </label>
                <div class="form-group has-success has-feedback">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fa fa-lock"></i>
                    </span>
                    <input type="password" class="form-control" name="password" required="">
                  </div>
                </div>
              </div>
              <input type="submit" name="submit" class="btn btn-primary" value="SignIn" 
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
     <div class="col-sm-12"><img src="bootstrap/img/footer.png" id="foot"></div>
   </div>
 </div>
</div>
<?php 
unset($_SESSION['fail']);
?>
</body>
</html>
