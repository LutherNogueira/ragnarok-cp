<!DOCTYPE html>
<html>

<head>
  <?php include 'base.php';?>
 
</head>

<header>
  <?php include 'header.php';?>
</header>
<?php include 'scripts/connect.php';?>
<body>
  <div class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-lg-6 col-10">
          <h1>New Account</h1>
          <form class="text-left" action="scripts/insert.php" method="post">
            <div class="form-group"> <label for="userId">Your Login</label> <input type="text" class="form-control" id="userId" name="userid" placeholder="user"> </div>
            <div class="form-group"> <label for="userEmail">Your email</label> <input type="email" class="form-control" id="userEmail" name="email" placeholder="e-mail"> </div>
            <div class="form-row">
              <div class="form-group col-md-6"> <label for="userPass">Password</label> <input type="password" class="form-control" id="userPass" name="user_pass" placeholder="pass"> </div>
              <div class="form-group col-md-6"> <label for="userPasswordC">Confirm Password</label> <input type="password" class="form-control" id="userPasswordC" placeholder="pass"> </div>
            </div>
            <div class="form-group">
            </div> <button type="submit" class="btn btn-primary">Create Account</button>
          </form>
        </div>
      </div>
    </div>
  </div>
 
</body>

<footer>
  <?php include 'footer.php';?>
</footer>

</html>