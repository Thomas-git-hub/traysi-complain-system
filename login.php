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
<?php include_once("includes/navbar.php") ?>

<div class="container con-login">
<div class="card" style="width: 35rem;">
  <div class="card-body">
    <form id="theform" action="" method="POST" >
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
      <div class="form-group mt-3">
        <input type="text" class="form-control" id="adminFullname" aria-describedby="" placeholder="Admin Full Name">
      </div>
      <div class="form-group mt-3">
        <input type="text" class="form-control" id="adminCode" name="phone" placeholder="Code">
      </div>
      <!-- end admin form -->

      <!-- president form -->
      <div class="form-group mt-3">
        <input type="text" class="form-control" id="presidentFullname" aria-describedby="" placeholder="President Full Name">
      </div>
      <div class="form-group mt-3">
        <input type="text" class="form-control" id="presidentCode" name="phone" placeholder="Code">
      </div>
      <!-- end president form -->

      <!-- user form -->
      <div class="form-group mt-3">
        <input type="text" class="form-control" id="userFullname" aria-describedby="" placeholder="User Full Name">
      </div>
      <div class="form-group mt-3">
        <input type="text" class="form-control" id="userContactfield" name="phone" placeholder="Contact (09)" onkeyup=" return validatephone(this.value); ">
      </div>
      <!-- end user form -->

      <!-- driver form -->
      <div class="form-group mt-3">
        <input type="text" class="form-control" id="driverFullname" aria-describedby="" placeholder="Driver Full Name">
      </div>
      <div class="form-group mt-3">
        <input type="text" class="form-control" id="driverContactfield" name="phone" placeholder="Contact (09)" onkeyup=" return validatephone(this.value); ">
      </div>
      <!-- end driver form -->

      <h1 class="h1-register-link">Don't have an account? <a href="register.php">Regsiter Here!</a></h1>
      <button type="submit" id="btn" class="btn mt-3">Login</button>
    </form>
  </div>
</div>
</div>

<script>
  $(document).ready(function(){
    $('#adminFullname, #adminCode, #presidentFullname, #presidentCode, #userFullname, #userContactfield, #driverFullname, #driverContactfield').hide();
     
      $ ('#selectUser').change(function(){
          var a = $(this).val();

          if (a == "1"){
            $('#adminFullname, #adminCode').show();
            $('#presidentFullname, #presidentCode, #userFullname, #userContactfield, #driverFullname, #driverContactfield').hide();
          }else if (a == "2"){
            $('#adminFullname, #adminCode').hide();
            $('#presidentFullname, #presidentCode').show();
          }else if (a == "3"){
            $('#adminFullname, #adminCode, #presidentFullname, #presidentCode, #driverFullname, #driverContactfield').hide();
            $('#userFullname, #userContactfield').show();
          }else if (a == "4"){
            $('#adminFullname, #adminCode, #presidentFullname, #presidentCode, #userFullname, #userContactfield').hide();
            $('#driverFullname, #driverContactfield').show();
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