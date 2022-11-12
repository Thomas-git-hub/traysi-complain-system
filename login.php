<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="js/jquery.min.js">
  
   <!-- bootstrap icon -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <!-- css bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- css -->
  <link rel="stylesheet" href="css/style.css">

  <title>Document</title>
  
</head>
<body>
<?php 
include_once("includes/navbar.php");

include_once("president/includes/app.php");
include_once("president/includes/auth.php");

include_once("driver/includes/config/app.php");



$auth->isLoggedIn();


?>

<div class="container con-login">
<div class="card" style="width: 35rem;">
  <div class="card-body">

  <!------- Validation Design Here Please ---------->
  <?php include_once("president/includes/message.php") ?>
  <!--------------------------------------------------->

    
    <h5 class="card-title d-flex justify-content-center mt-2"><i class="bi bi-door-open-fill">&nbsp;</i>L O G I N</h5>
      <div class="form-group mt-3">
        <select class="form-control" id="selectUser">
          <option selected="true" disabled="disabled">Select User</option>
          <option value="1" id="selectAdmin">Admin</option>
          <option value="2" id="selectPresident">President</option>
          <option value="3" id="selectUser">User</option>
          <option value="4" id="selectDriver">Driver</option>
        </select>
      </div>
      <!-- admin form -->
      <div id="adminLogin">
      <form id="theform" action="" method="POST" >
      <div class="form-group mt-3">
        <input type="text" class="form-control" id="adminFullname" aria-describedby="" placeholder="Admin Full Name">
      </div>
      <div class="form-group mt-3">
        <input type="text" class="form-control" id="adminCode" name="phone" placeholder="Code">
      </div>
      <button type="submit" id="btn" name= "login" class="btn mt-3">Login</button>
      </form>
      </div>
      <!-- end admin form -->

      <!-- president form -->
      <div id="presidentLogin">
      <form id="theform" action="president/includes/auth.php" method="POST" >

        <div class="form-group mt-3">
          <input type="text" class="form-control"  id="presidentFullname" name="fullname" aria-describedby="" placeholder="President Full Name">
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" id="presidentCode" name="code" placeholder="Code">
        </div>
        <button type="submit" id="btn" name= "login" class="btn mt-3">Login</button>
      </form>
      </div>
      <!-- end president form -->

      <!-- user form -->
      <div id="userLogin">
      <form id="theform" action="" method="POST" >
      <div class="form-group mt-3">
        <input type="text" class="form-control" id="userFullname" aria-describedby="" placeholder="User Full Name">
      </div>
      <div class="form-group mt-3">
        <input type="text" class="form-control" id="userContactfield" name="phone" placeholder="Contact (09)" onkeyup=" return validatephone(this.value); ">
      </div>
      <button type="submit" id="btn" name= "login" class="btn mt-3">Login</button>
      </form>
      </div>
      <!-- end user form -->

      <!-- driver form -->
      <div id="driverLogin">
      <form id="theform" action="driver/includes/auth.php" method="POST" >
      <div class="form-group mt-3">
        <input type="text" class="form-control" id="driverFullname" name="fullname" aria-describedby="" placeholder="Driver Full Name">
      </div>
      <div class="form-group mt-3">
        <input type="text" class="form-control" id="driverContactfield" name="contact_no" placeholder="Contact (09)" onkeyup=" return validatephone(this.value); ">
      </div>
      <button type="submit" id="btn" name= "login" class="btn mt-3">Login</button>
      </form>
      </div>
      <!-- end driver form -->
      <h1 class="h1-register-link">Don't have an account? <a href="register.php">Regsiter Here!</a></h1>
  </div>
</div>
</div>

<script>
  $(document).ready(function(){
    $('#adminLogin, #presidentLogin, #userLogin, #driverLogin').hide();
     
      $ ('#selectUser').change(function(){
          var a = $(this).val();

          if (a == "1"){
            $('#adminLogin').show();
            $('#presidentLogin, #userLogin, #driverLogin').hide();
          }else if (a == "2"){
            $('#adminLogin, #userLogin, #driverLogin').hide();;
            $('#presidentLogin').show();
          }else if (a == "3"){
            $('#adminLogin, #presidentLogin, #driverLogin').hide();
            $('#userLogin').show();
          }else if (a == "4"){
            $('#adminLogin, #presidentLogin, #userLogin').hide();
            $('#driverLogin').show();
          }
    });
  });
</script>


<script>
    function validatephone(phone)
  	{
  		phone = phone.replace(/[^0-9]/g,'');
  		$("#userContactfield, #driverContactfield").val(phone);
  		if( phone == '' || !phone.match(/^0[0-9]{10}$/) )
  			{
  				$("#userContactfield, #driverContactfield").css({'background':'#FFEDEF' , 'border':'solid 1px red'});
  				
  				return false;
  			}
  		else
  			{
  				$("#userContactfield, #driverContactfield").css({'background':'#99FF99' , 'border':'solid 1px #99FF99'});
  			return true;	
  			}
      }
  </script>

</body>
</html>