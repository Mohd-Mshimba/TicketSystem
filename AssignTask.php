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
      Assign Ticket To Users
    </h4>
    <hr><br>
    <div class="col-sm-9">
      <div class="row" style="padding: 5px 0px 0px 25px">
        <?php
        if (!isset($_SESSION["status"])) {
          header("location:loginForm.php");
        }else{?>
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
          <form method="POST" action="AssignTaskHandler.php" name="myForm" >
            <div id="AssignTaskForm" >
              <!----------- CUSTOMER INFORMATIONS ------------>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="fName">
                      <i id="star">*&nbsp</i>First Name
                    </label>
                    <div class="form-group has-success has-feedback">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-user"></i>
                        </span>
                        <input type="text" name="fName" id="fName" class="form-control" required="" placeholder="Eg: Moh'd">
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
                        <input type="text" id="mName" name="mName" class="form-control" required="" placeholder="Eg: Mshimba">
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
                        <input type="text" id="lName" name="lName" class="form-control" required="" placeholder="Eg: Seif">
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
                        <select name="gender" id="gender" class="form-control" required="">
                          <option value="">---Select Gender---</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
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
                        <input type="date" name="dob" id="dob" class="form-control" required="" style="padding: 0px 0px 12px 5px;">
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
                        <input type="number" name="phone" id="phone" class="form-control" required="" placeholder="776666813" >
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
                        <input type="email" name="email" id="email" class="form-control" required="" placeholder="mohd.m.seif@gmail.com">
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
                        <input type="text" name="address" id="address" class="form-control" required="" placeholder="Eg: M/kwerekwe">
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
                          <input type="number" name="nida" id="nida" class="form-control" required="" placeholder="Eg: 15031995">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!------------------ TICKET INFORMATIONS  ---------------- -->
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="Froms">
                      <i id="star">*&nbsp</i>From
                    </label>
                    <div class="form-group has-success has-feedback">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-mail-reply"></i>
                        </span>
                        <select name="Froms" id="Froms" class="form-control" required="">
                          <option value="">---Select Country---</option>
                          <option value="Zanzibar">Zanzibar</option>
                          <option value="Kenya">kenya</option>
                          <option value="Dar-es-salam">Dar-es-salam</option>
                          <option value="">---BUS TRANSPOT---</option>
                          <option value="Makunduchi">Makunduchi</option>
                          <option value="Nungwi">Nungwi</option>
                          <option value="StoneTown">Stone Town</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="To">
                      <i id="star">*&nbsp</i>To 
                    </label>
                    <div class="form-group has-success has-feedback">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-mail-forward"></i>
                        </span>
                       <select name="To" id="Froms" class="form-control" required="">
                          <option value="">---Select Country---</option>
                          <option value="Zanzibar">Zanzibar</option>
                          <option value="Kenya">kenya</option>
                          <option value="Dar-es-salam">Dar-es-salam</option>
                          <option value="">---BUS TRANSPOT---</option>
                          <option value="Nungwi">Nungwi</option>
                          <option value="Makunduchi">Makunduchi</option>
                          <option value="StoneTown">Stone Town</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="payment">
                      <i id="star">*&nbsp</i>Payment
                    </label>
                    <div class="form-group has-success has-feedback">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-money"></i>
                        </span>
                        <input type="number" id="payment" name="payment" class="form-control" required="" placeholder="100000">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="ticket_time">
                      <i id="star">*&nbsp</i>Ticket Time
                    </label>
                    <div class="form-group has-success has-feedback">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-clock-o"></i>
                        </span>
                        <input type="time" name="ticket_time" id="ticket_time" class="form-control" required="" style="padding: 0px 0px 12px 5px;">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="ticket_date">
                      <i id="star">*&nbsp</i>Ticket Date
                    </label>
                    <div class="form-group has-success has-feedback">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </span>
                        <input type="date" name="ticket_date" id="ticket_date" class="form-control" required="" style="padding: 0px 0px 12px 5px;">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="ticket_type">
                      <i id="star">*&nbsp</i>Ticket Type 
                    </label>
                    <div class="form-group has-success has-feedback">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-question-circle"></i>
                        </span>
                        <select name="ticket_type" id="ticket_type" class="form-control" required="">
                          <option value="">---Transport Type---</option>
                          <option value="Bus">Bus Transport</option>
                          <option value="AeroPlane">AeroPlane Transport</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- -------------------------END------------------------- -->
              <input type="submit" class="btn btn-primary" value="Submit" name="submit" id="subAssTask" onclick="return Validate()">
              <input type="reset" class="btn btn-warning" value="Reset" name="reset" id="subAssTask">
              <br><br>
              <i id="star">*&nbsp</i>
              <span id="Mandatory">Means Mandatory to Fill</span>
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
<?php
}
unset($_SESSION['there_ticket']);
?>
</body>
</html>





























<script type="text/javascript">

  function Validate()
  {

   if( document.myForm.fName.value == "" )
   {
    alert( "Please provide your First Name!" );
    document.myForm.fName.focus() ;
    return false;
  }

  if( document.myForm.mName.value == "" )
  {
    alert( "Please provide your Middle Name!" );
    document.myForm.mName.focus() ;
    return false;
  }
  if( document.myForm.lName.value == "" )
  {
    alert( "Please provide your Last Name!" );
    document.myForm.lName.focus() ;
    return false;
  }
  if( document.myForm.gender.value == "" )
  {
    alert( "Please provide your gender!" );
    document.myForm.gender.focus() ;
    return false;
  }

  if( document.myForm.phone.value == "" ||
   isNaN( document.myForm.phone.value ) ||
   document.myForm.phone.value.length != 9 )
  {
    alert( "Mobile number should contain only 9 digits(number)");
    document.myForm.phone.focus() ;
    return false;
  }


  if( document.myForm.address.value == "" )
  {
    alert( "Please provide your Address!" );
    document.myForm.address.focus() ;
    return false;
  } 

  if( document.myForm.phone.value == "" )
  {
    alert( "Please provide your Phone!" );
    document.myForm.phone.focus() ;
    return false;
  }  


  if( document.myForm.email.value == "" )
  {
    alert( "Please provide your Email!" );
    document.myForm.email.focus();
    return false;
  }

  var emailID = document.myForm.email.value;
  atpos = emailID.indexOf("@");
  dotpos = emailID.lastIndexOf(".");

  if (atpos < 1 || ( dotpos - atpos < 2 )) 
  {
    alert("Please enter correct email ID")
    document.myForm.email.focus();
    return false;
  }

  if( document.myForm.dob.value == "" )
  {
    alert( "Please provide your Date of Birth!" );
    document.myForm.dob.focus();
    return false;
  }

    if( document.myForm.nida.value == "" ||
   isNaN( document.myForm.nida.value ) ||
   document.myForm.nida.value.length != 8 )
  {
    alert( "National ID number should contain only 8 digits(number)");
    document.myForm.nida.focus() ;
    return false;
  }

  if( document.myForm.To.value == "" )
  {
    alert( "Please provide your Location you want to Go!" );
    document.myForm.To.focus();
    return false;
  }

   if( document.myForm.payment.value == "" ||
   isNaN( document.myForm.payment.value ))
  {
    alert( "Payment should be a only digits(number)");
    document.myForm.payment.focus() ;
    return false;
  }

   if( document.myForm.ticket_time.value == "" )
  {
    alert( "Please provide time!" );
    document.myForm.ticket_time.focus();
    return false;
  }

   if( document.myForm.ticket_date.value == "" )
  {
    alert( "Please provide Date of Transport!" );
    document.myForm.ticket_date.focus();
    return false;
  }

   if( document.myForm.ticket_type.value == "" )
  {
    alert( "Please provide Which Ticket type!" );
    document.myForm.ticket_type.focus();
    return false;
  }

}
</script>
