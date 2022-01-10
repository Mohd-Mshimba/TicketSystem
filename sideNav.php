<?php 
session_start();
if ($_SESSION["status"]=="Admin"){
?>
<!-- ADMIN NAVIGATION -->
<div class="col-sm-3" id="sideN">
  <div id="ul">
    <ul>
      <li id="link" style="margin-top: 30px;">
        <a href="HomeAdmin.php"><i class="fa fa-user">&nbsp&nbsp</i>Profile</a>
      </li>
      <li id="link">
        <a href="AssignTask.php"><i class="fa fa-ticket">&nbsp&nbsp</i>Assign Ticket</a>
      </li>
      <li id="link">
        <a href="ManageTicket.php"><i class="fa fa-tasks">&nbsp&nbsp</i>Manage Ticket</a>
      </li>
      <li id="link">
        <a href="ChangePassword.php"><i class="fa fa-lock">&nbsp&nbsp</i>Security Change</a>
      </li>
      <li id="link">
        <a href="GenerateReport.php"><i class="fa fa-print">&nbsp&nbsp</i>Generate Report</a>
      </li>
      <li id="link">
        <a href="SignOut.php"><i class="fa fa-power-off">&nbsp&nbsp</i>Sign-Out</a>
      </li>
    </ul>
  </div>
</div>
<?php } ?>

