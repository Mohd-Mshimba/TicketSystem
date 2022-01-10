<!DOCTYPE html>
<html>
<?PHP
include("style.php");
?>
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
    <h4 id="AssignT">&nbsp
      Edit Profile Informations
    </h4>
    <hr><br>
    <div class="col-sm-9">
      <div class="row" style="padding: 5px 0px 0px 25px">
        <?php
        if (!isset($_SESSION["status"])) {
          header("location:loginForm.php");
        }?>
          <!------------------- PHP BLOCK ------------------------------>
          <div class="row">
            <div class="col-sm-12">
              <!-- ############### ERROR MSG ############# -->
      <?php
      if(isset($_SESSION['there_ticket'])){?>
        <div class="col-md-12 bg-danger" style="text-align: center; padding: 5px">
          <label class="danger">
            <?php echo $_SESSION['there_ticket']; ?>
          </label>
        </div>
      <?php }?>
      <!-- ######################################## -->
            </div>
          </div>
          <form method="POST" action="EditProfileHandler.php">
            <div id="AssignTaskForm" >
              <!-- PHP CODE -->
              <?php
              $id=$_GET['id']; 
                include("connection.php");
                $query = $db->query("SELECT * FROM USERS WHERE user_id='$id'"); 
                $n=$query->num_rows;
                $r=$query->fetch_assoc();
                  ?>
              <!----------- CUSTOMER INFORMATIONS ------------>
              <div class="row">
                <div class="col-sm-4">
                  <input type="text" name="user_id" hidden="" id="user_id"
                        value="<?php echo $r['user_id']?>">
                  <div class="form-group">
                    <label for="fName">
                      <i id="star">*&nbsp</i>First Name
                    </label>
                    <div class="form-group has-success has-feedback">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-user"></i>
                        </span>
                        <input type="text" name="fName" id="fName" class="form-control" 
                        value="<?php echo $r['fName']?>" required="" >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="mName">
                      <i id="star">*&nbsp</i>Middle Name
                    </label>
                    <div class="form-group has-success has-feedback">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-user"></i>
                        </span>
                        <input type="text" id="mName" name="mName" class="form-control" value="<?php echo $r['mName']?>" required="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="lName">
                      <i id="star">*&nbsp</i>Last Name
                    </label>
                    <div class="form-group has-success has-feedback">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-user"></i>
                        </span>
                        <input type="text" id="lName" name="lName" class="form-control" value="<?php echo $r['lName']?>" required="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="gender">
                      <i id="star">*&nbsp</i>Gender
                    </label>
                    <div class="form-group has-success has-feedback">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-female"></i><i class="fa fa-male"></i>
                        </span>
                        <input name="gender" id="gender" class="form-control" value="<?php echo $r['gender']?>" required="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="dob">
                      <i id="star">*&nbsp</i>Date of Birth
                    </label>
                    <div class="form-group has-success has-feedback">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </span>
                        <input type="date" name="dob" id="dob" class="form-control" value="<?php echo $r['dob']?>" required="" style="padding: 0px 0px 12px 5px;">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="phone">
                      <i id="star">*&nbsp</i>Phone Number
                    </label>
                    <div class="form-group has-success has-feedback">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-phone"></i>
                        </span>
                        <input type="number" name="phone" id="phone" class="form-control" value="<?php echo $r['phone']?>" required="" >
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="email">
                      <i id="star">*&nbsp</i>Email
                    </label>
                    <div class="form-group has-success has-feedback">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i>@</i>
                        </span>
                        <input type="email" name="email" id="email" class="form-control" value="<?php echo $r['email']?>" required="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="address">
                      <i id="star">*&nbsp</i>Address
                    </label>
                    <div class="form-group has-success has-feedback">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-home"></i>
                        </span>
                        <input type="text" name="address" id="address" class="form-control" value="<?php echo $r['address']?>" required="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="nida">
                        <i id="star">*&nbsp</i>National ID
                      </label>
                      <div class="form-group has-success has-feedback">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-credit-card-alt"></i>
                          </span>
                          <input type="number" name="nida" id="nida" class="form-control" 
                          value="<?php echo $r['nida']?>" required="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="role">
                      <i id="stars">*&nbsp</i>User Role
                    </label>
                    <div class="form-group has-success has-feedback">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-user-md"></i>
                        </span>
                        <input name="role" id="role" readonly="" class="form-control" 
                        value="<?php echo $r['role']?>" required="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="username">
                      <i id="stars">*&nbsp</i>Username 
                    </label>
                    <div class="form-group has-success has-feedback">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-user-secret"></i>
                        </span>
                       <input name="username" id="username" class="form-control" 
                        class="form-control" readonly="" value="<?php echo $r['username']?>" 
                        required="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="password">
                      <i id="stars">*&nbsp</i>Password 
                    </label>
                    <div class="form-group has-success has-feedback">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-lock"></i>
                        </span>
                        <input type="text" readonly="" id="password" name="password" 
                        class="form-control" value="<?php echo $_SESSION['pas']?>" 
                        required="" >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- -------------------------END------------------------- -->
              <input type="submit" class="btn btn-primary" value="Submit" name="submit" id="subAssTask">
              <br><br>
              <div class="row">
                <div class="col-sm-4">
                  <i id="star">*&nbsp</i>
              <span id="Mandatory">Means An Option to Change</span>
                </div>
                <div class="col-sm-4">
                  <i id="stars">*&nbsp</i>
              <span id="Mandatory">Means No Required to Fill</span>
                </div>
              </div>
            </div>
          </form>
          <!-- ######################################################## -->
        </div>
      </div>
      <div class="row">
       <div class="col-sm-12">
        <img src="bootstrap/img/footer.png" id="foot">
      </div>
    </div>
  </div>
</div>
</body>
</html>
