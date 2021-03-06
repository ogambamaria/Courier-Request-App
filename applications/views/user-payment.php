<!DOCTYPE HTML>
<head>
  <title>
    Tumia | Payment
  </title>
  <link rel="icon" href="<?php echo base_url()?>../assets/images/tumia-logo-2.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <style>
    .credit-card-box .panel-title {
      display: inline;
      font-weight: bold;
    }
    .credit-card-box .form-control.error {
      border-color: red;
      outline: 0;
      box-shadow: inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(255,0,0,0.6);
    }
    .credit-card-box label.error {
    font-weight: bold;
    color: red;
    padding: 2px 8px;
    margin-top: 2px;
    }
    .credit-card-box .payment-errors {
    font-weight: bold;
    color: red;
    padding: 2px 8px;
    margin-top: 2px;
    }
    .credit-card-box label {
      display: block;
    }
    /* The old "center div vertically" hack */
    .credit-card-box .display-table {
      display: table;
    }
    .credit-card-box .display-tr {
      display: table-row;
    }
    .credit-card-box .display-td {
      display: table-cell;
      vertical-align: middle;
      width: 50%;
    }
    /* Just looks nicer */
    .credit-card-box .panel-heading img {
      min-width: 180px;
    }
  </style>

</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="<?php echo base_url()?>../assets/images/tumia-logo.png" alt="Tumia"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url()?>request">Home</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url()?>payment">Payment<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url()?>history">Order History</a>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url()?>profile">User Profile</a>
    </li>
  </ul>
  </div>
  </nav>

  <div class="container" style="margin-top:40px">
  <div class="row">
  <div class="col-xs-12 col-md-4">
  <div class="panel panel-default credit-card-box">
  <div class="panel-heading display-table" >
  <div class="row display-tr" >
  <h3 class="panel-title display-td" >Payment Details</h3>
  <div class="display-td" >
  <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
  </div>
  </div>
  </div>
  <div class="panel-body">
  <form role="form" id="payment-form">
  <div class="row">
  <div class="col-xs-12">
  <div class="form-group">
  <label for="cardNumber">Card Number</label>
  <div class="input-group">
  <input
  type="tel"
  class="form-control"
  name="cardNumber"
  placeholder="Valid Card Number"
  autocomplete="cc-number"
  required autofocus
  />
  <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
  </div>
  </div>
  </div>
  </div>
  <div class="row">
  <div class="col-xs-7 col-md-7">
  <div class="form-group">
  <label for="cardExpiry"><span class="hidden-xs">Expiration</span><span class="visible-xs-inline">EXP</span> Date</label>
  <input
  type="tel"
  class="form-control"
  name="cardExpiry"
  placeholder="MM / YY"
  autocomplete="cc-exp"
  required
  />
  </div>
  </div>
  <div class="col-xs-5 col-md-5 pull-right">
  <div class="form-group">
  <label for="cardCVC">CV Code</label>
  <input
  type="tel"
  class="form-control"
  name="cardCVC"
  placeholder="CVC"
  autocomplete="cc-csc"
  required
  />
  </div>
  </div>
  </div>

  <div class="row">
  <div class="col-xs-12">
  <button class="btn btn-success btn-lg btn-block" type="submit">Process Payment</button>
  </div>
  </div>
            <div id="paypal-button"></div>

  <script src="https://www.paypalobjects.com/api/checkout.js"></script>
  <script>
  // Render the PayPal button
  paypal.Button.render({
  env: 'sandbox', // Optional: specify 'sandbox' environment
  client: {
    sandbox:    'AVBkvUw88CCp2-yuFp4sLp6k48xagf5LczBaV6E8C5UXEpnnCxeVrZTQjDSQZ7mSg7VM7k21L_WNW6t9',
    production: 'xxxxxxxxx'
  },
  commit: true, // Optional: show a 'Pay Now' button in the checkout flow
  payment: function (data, actions) {
    return actions.payment.create({
      payment: {
        transactions: [
          {
            amount: {
              total: '300.00',
              currency: 'USD'
            }
          }
        ]
      }
    });
  },
  onAuthorize: function (data, actions) {
    // Get the payment details
    return actions.payment.get()
      .then(function (paymentDetails) {
        // Show a confirmation using the details from paymentDetails
        document.querySelector('#confirm-button')
          .addEventListener('click', function () {
            // Execute the payment
            return actions.payment.execute()
              .then(function () {
                // Show a success page to the buyer
              });
          });
      });
  }
}, '#paypal-button');
  </script>
  <div class="row" style="display:none;">
  <div class="col-xs-12">
  <p class="payment-errors"></p>
  </div>
  </div>
  </form>
  </div>
  </div>
  </div>



  </div>
  </div>

  	<!-- If you're using Stripe for payments -->
  <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

</body>
