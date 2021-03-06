<!DOCTYPE html>
<html lang="en">
<head>
  <title>
    Tumia | Admin
  </title>
    <link rel="icon" href="<?php echo base_url();?>../assets/images/tumia-logo-2.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="<?php echo base_url();?>../assets/images/tumia-logo.png" alt="Tumia"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<!---navbar--->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()?>Admin">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>Admin/couriers">Couriers<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>Admin/users">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>Admin/reports">Order History</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>Admin/profile">User Profile</a>
      </li>
    </ul>
  </div>
</nav>
<!---navbar end--->

<div class="col-md-12">
<div class="card mx-auto">
<h4 class="card-title"><strong>List of Couriers</strong></h4>
<div class="table" id="courier-list">
  <!---Sample table, use php to fetch from database--->
  <table class="table" style="width: 100%;">
    <th>ID</th>
    <th>Courier Name</th>
    <th>Orders Completed</th>
    <th>Last Modified</th>
    <tr>
      <td>201</td>
      <td>John Doe</td>
      <td>100</td>
      <td>19.04.2017</td>
    </tr>
    <tr>
      <td>202</td>
      <td>John Doe</td>
      <td>100</td>
      <td>29.04.2017</td>
    </tr>
    <tr>
      <td>203</td>
      <td>John Doe</td>
      <td>100</td>
      <td>19.07.2017</td>
    </tr>
  </table>
</div>
</div>
</div>


</body>
</html>
