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
          <!----------- CONTENT ------------>
          <h3>
            <p style="font-family: Lucida Handwriting">CONTACT US - BUS TICKET</p>
          </h3>
          <div class="row">
            <div class="col-sm-6"><br>
              TICKET OFFICE<br>
              P.O BOX: XXX<br>
              Tel: +255-776-666-813<br>
              Email: ticket@gmail.com<br>
              Website: www.ticket.go.tz
            </div><br>
            <div class="col-sm-6">
              OFISI YA TIKETI<br>
              P.O BOX: XXX<br>
              Tel: Tel: +255-776-666-813<br>
              Email: ticket@gmail.com<br>
              Website: www.ticket.go.tz
            </div>
          </div>
          <!-- --------------- SEND US MESSANGE--------------->
          <div class="row">
            <div class="col-sm-12">
              <div id="msg">
                SEND US MESSANGE
              </div><br>
              <form>
               <div class="form-group">
                <label for="exampleInputEmail1">
                 Full Name
               </label>
               <div class="form-group has-success has-feedback">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-user"></i>
                  </span>
                  <input type="text" class="form-control" id="inputGroupSuccess4">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">
               Email
             </label>
             <div class="form-group has-success has-feedback">
              <div class="input-group">
                <span class="input-group-addon">
                  <i>@</i>
                </span>
                <input type="text" class="form-control" id="inputGroupSuccess4">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">
             Mobile
           </label>
           <div class="form-group has-success has-feedback">
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-phone"></i>
              </span>
              <input type="text" class="form-control" id="inputGroupSuccess4">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">
           Comment:
         </label>
         <div class="form-group has-success has-feedback">
          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-comment"></i>
            </span>
            <textarea class="form-control" id="inputGroupSuccess4" style="width: 100%;"></textarea>
          </div>
        </div>
      </div>
      <input type="submit" class="btn btn-primary" value="Submit">
      <input type="reset" class="btn btn-warning" value="Reset">
    </form>
  </div>
</div>
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
</body>
</html>
