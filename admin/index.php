<?php
$host = 'localhost:8000';
$dbname = 'uas'; 
$username = 'root';
$password = 'root'; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    var_dump($pdo);
die();

} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - AdminLTE 3</title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">
          Logout
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <li class="nav-item">
            <a href="/admin" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/category.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Categories</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/travel.html" class="nav-link">
              <i class="nav-icon fas fa-plane"></i>
              <p>Travel</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/discounts.html" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>Discounts</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>
                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>
                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Recent Activities</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="activityTable" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Action</th>
                      <th>User</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>2024-07-01</td>
                      <td>Added new category</td>
                      <td>Alexander Pierce</td>
                      <td>
                        <button class="btn btn-warning btn-sm edit-btn">Edit</button>
                        <button class="btn btn-danger btn-sm delete-btn">Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>2024-06-30</td>
                      <td>Updated travel information</td>
                      <td>John Doe</td>
                      <td>
                        <button class="btn btn-warning btn-sm edit-btn">Edit</button>
                        <button class="btn btn-danger btn-sm delete-btn">Delete</button>
                      </td>
                    </tr>
                    <!-- Add more rows as needed -->
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Footer &copy; 2024</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>

<script>
  $(document).ready(function() {
    // Edit button click handler
    $('#activityTable').on('click', '.edit-btn', function() {
      // Handle edit action here
      alert('Edit action triggered.');
    });

    // Delete button click handler
    $('#activityTable').on('click', '.delete-btn', function() {
      // Handle delete action here
      $(this).closest('tr').remove();
      alert('Delete action triggered.');
    });
  });
</script>
</body>
</html>
