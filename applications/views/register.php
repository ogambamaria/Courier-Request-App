<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>../assets/css/bootstrap.min.css">

    <title>Sample Sign Up page</title>
  </head>
  <body>
    <center>
    <div class="col-lg-5 col-lg-offset-2">
      <h1>Sign Up!</h1>
      <p>Sign up to continue</p>
      <?php if(isset($_SESSION['success'])){?>
        <div class="alert alert-success"><?php echo $_SESSION['success'];?></div><?php
      } ?>
      <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
    <form method="post" action="">
      <div class="form-group">
        <label for="username">Username:</label>
        <input class="form-control" name="username" id="username" type="text">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input class="form-control" name="email" id="email" type="text">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input class="form-control" name="password" id="password" type="password">
      </div>
      <div class="form-group">
        <label for="password2">Confirm Password:</label>
        <input class="form-control" name="password2" id="password2" type="password">
      </div>
      <div class="form-group">
        <label for="gender">Gender:</label>
        <select class="form-control" id="gender" name="gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
      <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input class="form-control" name="phone" id="phone" type="text">
      </div>
      <div class="text-center">
        <button class="btn btn-primary" name="register">Sign Up for Service</button>
      </div>
    </form>
    </div>
  </center>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
