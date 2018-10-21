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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>

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
        <a class="nav-link" href="<?php echo base_url()?>request">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin-couriers.php">Couriers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin-users.php">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin-reports.php">Order History and Progress Reports<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user-profile.php">User Profile</a>
      </li>
    </ul>
  </div>
</nav>
<!---navbar end--->

<div class="container">
<div class="col-md-12">
<div class="card mx-auto">
<h4 class="card-title">Report of the past week's orders</h4>&nbsp;
<canvas id="myChart" style="max-width: 700px;"></canvas>&nbsp;
</div>
</div>
&nbsp;
<div class="col-md-12">
<div class="card mx-auto">
<div class="table" id="order-table">
  <!---Sample table, use php to get from database--->
  <table class="table" style="width: 100%;">
    <th>Order #</th>
    <th>Courier</th>
    <th>Time Stamp</th>
    <tr>
      <td>101</td>
      <td>John Doe</td>
      <td>19.02.2018</td>
    </tr>
    <tr>
      <td>102</td>
      <td>John Doe</td>
      <td>19.02.2018</td>
    </tr>
  </table>
</div>
</div>
</div>
</div>


</body>
</html>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Mon", "Tue", "Wed", "Thur", "Fri", "Sat", "Sun"],
        datasets: [{
            label: '# of Orders',
            //Please edit with php :)
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
