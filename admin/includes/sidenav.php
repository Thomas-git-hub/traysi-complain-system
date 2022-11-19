<?php
include_once("includes/auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

<style>
/* @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,300&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap'); */

body {
  font-family: 'Montserrat', sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #3198f5;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.span-title{
  font-weight: 900;
  margin-left: 5%;
  color: #f0ff00;
  font-size: 8pt;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 12pt;
  color: #f1f1f1;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f0ff00;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.nav-span-a-logout{
  margin-top: 105%;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 700px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 10pt;}

  .nav-span-a-logout{
    margin-top: 90%;
}
}
</style>
</head>

<body>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="nav-span-a mb-3">
      <span class="span-title">Home</span>
      <a href="index.php">Dashboard</a>
    </div>
    <div class="nav-span-a mb-3">
      <span class="span-title">Criteria</span>
      <a href="criteria.php">Criteria</a>
    </div>
    <div class="nav-span-a mb-3">
      <span class="span-title">Management</span>
      <a href="toda.php">Manage Toda</a>
      <a href="president.php">Manage President</a>
    </div>
    <div class="nav-span-a mb-3">
      <span class="span-title">Viewing</span>
      <a href="driver.php">View Drivers</a>
      <a href="inbox-complain.php">View Complains</a>
    </div>
    <div class="nav-span-a nav-span-a-logout mx-5 mb-3">
      <a href="?logout=true"><i name="logout" class="bi bi-box-arrow-right">&nbsp;</i>Logout</a>
    </div>
  </div>

  <div id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()"><i class="bi bi-list"></i></span>
  </div>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html> 
