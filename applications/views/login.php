<?php 
error_reporting(0); 
ini_set('display_errors', 0);?>

<!DOCTYPE HTML>
<html>
<head>
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

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
						<strong style="font-size: 20px">Login</strong>
					</div>
					<div class="panel-body">
						<form role="form" method="post" action="<?php echo base_url()?>login">
						<fieldset>
						<div class="row">
						<div class="center-block">
						<img class="profile-img" src="<?php echo base_url()?>../assets/images/tumia-logo-2.png" alt="">
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
						<br>
						</div>
						<div class="form-group">
						<div class="input-group">
						<span class="input-group-addon">
						<i class="glyphicon glyphicon-lock"></i>
						</span>
						<input class="form-control" placeholder="Password" name="password" type="password" value="">
            </div>
						</div>
						<br>
						<div class="form-group">
						<input type="submit" class="btn btn-lg btn-primary btn-block" value="Login" name="log" style="background-color: #ffa64d; color: #000000; border: none;">
						</div>
						</div>
						</div>
						</fieldset>
						</form>
					</div>
					<div class="panel-footer ">	Don't have an account? <a href="<?php echo base_url()?>register"> Sign Up Here </a>
					</div>
					</div>
				</div>
			</div>
		</div>
		<?php if(isset($_SESSION['error'])){?>
			<div class="alert alert-danger"><?php echo $_SESSION['error'];?></div><?php
		} ?>
		<?php echo validation_errors('<div class="alert alert-danger">','</div>');?>

		<footer class="page-footer font-small pt-4">
		    <div class="footer-copyright text-center py-3">© 2018 Copyright:
		      <a href="#">Tumia - Courier Request Application</a>
		    </div>
		  </footer>
</body>
</html>
