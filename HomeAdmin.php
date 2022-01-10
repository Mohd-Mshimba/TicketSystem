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
    <div class="col-sm-9">
      <div class="row">
        <!------------------- PHP BLOCK ------------------------------>
        <?php
        if (!isset($_SESSION["status"])) {
          header("location:loginForm.php");
        }else{
          include("connection.php");
          $user = $_SESSION["user"];
          $pass = $_SESSION["pass"];
          $query=$db->query("SELECT * FROM USERS WHERE username='$user'") 
          or die($db->error);
          $n=$query->num_rows;
          $r = $query->fetch_array();
          ?>
          <!-- ####### CONTENT ###### -->
          <div class="row container-fluid" id="row">
            <div class="col-sm-8">
              <table class="table table-hover">
                <?php
                if(isset($_SESSION['success'])){?>
                  <div class="col-md-12 bg-success" id="success">
                    <label class="success">
                      <?php echo $_SESSION['success']; ?>
                    </label>
                  </div>
                <?php 
                }if(isset($_SESSION['fail'])){?>
                  <div class="col-md-12 bg-danger" id="fail">
                    <label class="danger">
                      <?php echo $_SESSION['fail']; ?>
                    </label>
                  </div>
                <?php }?>

                <h4 id="heading">PERSONAL BACKGROUND</h4>
                <tbody>
                  <tr>
                    <th>Full Name</th>
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
                  <tr>
                    <th>Gender</th>
                    <td colspan="3">
                      <?php echo $r["gender"];?>
                    </td>
                  </tr>
                  <tr>
                    <th>Date of Birth </th>
                    <td colspan="3">
                      <?php echo $r["dob"];?>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table class="table table-hover">
               <h4 id="heading">CONTACT INFORMATIONS</h4>
               <tbody>
                <tr>
                  <th>Email Address </th>
                  <td colspan="3">
                    <?php echo $r["email"];?>
                  </td>
                </tr>
                <tr>
                  <th>Permanent Address</th>
                  <td colspan="3">
                    <?php echo $r["address"];?>
                  </td>
                </tr>
                <tr>
                  <th>Phone Number</th>
                  <td colspan="3"> 
                    <?php echo "+255-".$r["phone"];?>
                  </td>
                </tr>
              </tbody>
            </table>

            <table class="table table-hover">
             <h4 id="heading">OTHER INFORMATIONS</h4>
             <tbody>
              <tr>
                <th>National ID</th>
                <td colspan="3"> 
                  <?php echo $r["nida"];?>
                </td>
              </tr>
              <tr>
                <th>User Status</th>
                <td colspan="3"> 
                  <?php echo $r["role"];?>
                </td>
              </tr>
              <tr>
                <th>Username</th>
                <td colspan="3">
                  <?php echo $r["username"];?>
                </td>
              </tr>
              <tr>
                <th></th>
                <td colspan="3">
                </td>
              </tr>
            </tbody>
          </table>
          <button type="submit" name="submit" class="btn btn-primary" id="submit1">
            <a href="EditProfile.php?id=<?php echo $r['user_id']; ?>">
              <i class="fa fa-pencil" style="color: white">&nbsp;Update Profile</i>
            </a>
          </button>
        </div>
        <!-- ==== PROFILE PICT ===== -->
        <div class="col-sm-4">
         <div class="row">
           <div class="col-sm-12">
            <img src="bootstrap/img/asfar.png" style="width: 80%; border-radius: 5px">
          </div>
          <div class="col-sm-12">
            <input type="file" name="profile" id="prof" required="required" class="btn btn-primary"/>
            <br>
            <input  type="submit" name="save" value="UPLOAD" class="btn btn-primary" 
            id="submit2">
          </div>
        </div>
      </div>
      <!-- --------END------------ -->
    </div>
    <!-- ####################### -->
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
unset($_SESSION['success']);
?>
</body>
</html>
