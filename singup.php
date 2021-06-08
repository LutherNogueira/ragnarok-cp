<!--registration page-->
<!DOCTYPE html>
<html>

<head>
  <?php include 'base.php';?> <!-- importa arquivo base -->
 
</head>

<header>
  <?php include 'header.php';?> <!-- importa navibar-->
</header>
<?php include 'scripts/connect.php';?>
<body>
  <div class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-lg-6 col-10">
          <h1>New Account</h1>
          <!-- inicio form -->
          <form class="text-left" action="scripts/insert.php" method="post"> <!-- chamada do metodo post e arquivo insert.php -->
            <div class="form-group"> <label for="userId">Your Login</label> <input type="text" class="form-control" id="userId" name="userid" placeholder="user" required> </div>
            <div class="form-group"> <label for="userEmail">Your email</label> <input type="email" class="form-control" id="userEmail" name="email" placeholder="e-mail" required> </div>
            <div class="form-row">
              <!-- comparação de senhas -->
              <div class="form-group col-md-6"> <label for="userPass">Password</label> <input type="password" class="form-control" id="userPass" name="user_pass" placeholder="pass" pattern="^\S{4,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 4 characters' : ''); if(this.checkValidity()) form.userPasswordC.pattern = this.value;" required> </div>
              <div class="form-group col-md-6"> <label for="userPasswordC">Confirm Password</label><input type="password" class="form-control" id="userPasswordC" placeholder="pass" pattern="^\S{4,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password' : '');" required> </div>
            </div>
            <div class="form-group">
            </div> <button type="submit" class="btn btn-primary">Create Account</button> <!-- submit nos dados do formulario -->
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