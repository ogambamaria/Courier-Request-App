<!DOCTYPE HTML>
<html>
<head>
  <title>
    Tumia | Payment
  </title>
  <link rel="icon" href="images/tumia-logo-2.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

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

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#"><img src="images/tumia-logo.png" alt="Tumia"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="user-home.php">Home<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="user-payment.php">Payment</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="order-history.php">Order History</a>
    <li class="nav-item">
      <a class="nav-link" href="user-profile.php">User Profile</a>
    </li>
  </ul>
</div>
</nav>

		<div class="container" style="margin-top:40px">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-md-offset-4">
					<div class="panel panel-default">
					<div class="panel-heading" style="text-align: center">
						<strong style="font-size: 20px">Payment</strong>
					</div>
					<div class="panel-body">
						<form role="form" method="post" action="">
						<fieldset>
						<div class="row">
						<div class="center-block">
						<img class="profile-img"
						src="images/tumia-logo-2.png" alt="">
						</div>
						<br>
						</div>
						<div class="row">
						<div class="col-sm-12 col-md-10  col-md-offset-1 ">
						<br>
            <div class="form-group">
              <label for="payment">Choose payment method:</label>
              <select class="form-control" id="payment" name="payment">
                <option value="Male">Pay by cash</option>
                <option value="Female">Pay by M-Pesa</option>
              </select>
            </div>
						<br>
            <button type="submit" class="btn btn-primary" name="request">Pay</button>
						</div>
						</div>
						</fieldset>
						</form>
					</div>
					</div>
				</div>
			</div>
		</div>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="assets/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
