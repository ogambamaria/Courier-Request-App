<!DOCTYPE HTML>
<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
	.panel-heading {
		padding: 5px 15px;
	}

	.panel-footer {
	padding: 1px 15px;
	color: #A0A0A0;
	}

	.profile-img {
	margin: 0 auto 10px;
	display: block;
	-moz-border-radius: 50%;
	-webkit-border-radius: 50%;
	border-radius: 50%;
	}
</style>

</head>
<body>
		<div class="container" style="margin-top:40px">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-md-offset-4">
					<div class="panel panel-default">
					<div class="panel-heading" style="text-align: center">
						<strong style="font-size: 20px">Tumia Sign Up</strong>
					</div>
					<div class="panel-body">
						<form role="form" method="post" action="<?php echo base_url()?>register">
						<fieldset>
						<div class="row">
						<div class="center-block">
						<img class="profile-img"
						src="images/tumia-logo-2.png" alt="">
						</div>
						<br><br>
						</div>
						<div class="row">
						<div class="col-sm-12 col-md-10  col-md-offset-1 ">
						<div class="form-group">
						<div class="input-group">
						<span class="input-group-addon">
						<i class="glyphicon glyphicon-user"></i>
						</span>
						<input class="form-control" placeholder="Username" name="username" type="text" autofocus>
						</div>
						</div>
            <div class="form-group">
						<div class="input-group">
						<span class="input-group-addon">
						<i class="glyphicon glyphicon-paperclip"></i>
						</span>
						<input class="form-control" placeholder="Email address" name="email" type="text" autofocus>
						</div>
						<br>
						<div class="form-group">
						<div class="input-group">
						<span class="input-group-addon">
						<i class="glyphicon glyphicon-lock"></i>
						</span>
						<input class="form-control" placeholder="Password" name="password" type="password" value="">
						</div>
						</div>
            <div class="form-group">
            <div class="input-group">
            <span class="input-group-addon">
            <i class="glyphicon glyphicon-lock"></i>
            </span>
            <input class="form-control" placeholder="Confirm Password" name="password2" type="password" value="">
            </div>
            </div>
            <div class="form-group">
              <label for="gender">Gender:</label>
              <select class="form-control" id="gender" name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            <div class="form-group">
						<div class="input-group">
						<span class="input-group-addon">
						<i class="glyphicon glyphicon-phone"></i>
						</span>
						<input class="form-control" placeholder="Phone Number" name="phone" type="text" value="">
						</div>
						</div>
						<br>
						<div class="form-group">
						<input type="submit" class="btn btn-lg btn-primary btn-block" value="Login" name="register" style="background-color: #ffa64d; color: #000000; border: none;">
						</div>
						</div>
						</div>
						</fieldset>
						</form>
					</div>
					<div class="panel-footer "> Have an account? <a href="<?php echo base_url()?>login"> Login Here </a>
					</div>
					</div>
				</div>
			</div>
		</div>

		<footer class="page-footer font-small pt-4">
		    <div class="footer-copyright text-center py-3">© 2018 Copyright:
		      <a href="#">Tumia - Courier Request Application</a>
		    </div>
		  </footer>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="assets/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
