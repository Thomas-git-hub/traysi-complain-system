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
        <select class="form-control" id="exampleFormControlSelect1">
          <option selected="true" disabled="disabled">Select User</option>
          <option value="Admin">Admin</option>
          <option value="President">President</option>
          <option value="User">User</option>
          <option value="Driver">Driver</option>
        </select>
      </div>
      <div class="form-group mt-3">
        <input type="text" class="form-control" id="fullName" aria-describedby="" placeholder="Full Name">
      </div>
      <div class="form-group mt-3">
        <input type="text" class="form-control" id="contactField" name="phone" placeholder="Contact (09)" onkeyup=" return validatephone(this.value); ">
      </div>
      <h1 class="h1-register-link">Don't have an account? <a href="register.php">Regsiter Here!</a></h1>
      <button type="submit" id="btn" class="btn mt-3">Login</button>
    </form>
  </div>
</div>
</div>

<script>
  $(document).ready(function(){
    alert($);
  });
</script>


<script>
    function validatephone(phone)
  	{
  		phone = phone.replace(/[^0-9]/g,'');
  		$("#contactField").val(phone);
  		if( phone == '' || !phone.match(/^0[0-9]{10}$/) )
  			{
  				$("#contactField").css({'background':'#FFEDEF' , 'border':'solid 1px red'});
  				
  				return false;
  			}
  		else
  			{
  				$("#contactField").css({'background':'#99FF99' , 'border':'solid 1px #99FF99'});
  			return true;	
  			}
      }
  </script>

</body>
</html>