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
        <a class="nav-link" href="<?php echo base_url()?>Admin">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>Admin/couriers">Couriers</a>
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
<h4 class="card-title"><strong>List of Users</strong></h4>
<div class="table">
  <table class="table">
    <th>Username</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Phone</th>
    <th>Address</th>
    <?php foreach ($h->result() as $row){ ?>
    <tr>
      <td><?php echo $row->username;?></td>
      <td><?php echo $row->email;?></td>
      <td><?php echo $row->gender;?></td>
      <td><?php echo $row->phone;?></td>
      <td><?php echo $row->address;?></td>
    </tr>
    <?php } ?>
   </table>

</div>
</div>
</div>


</body>
</html>
