<!DOCTYPE html>
<html lang="en">
<?php include("Library/Head.php");?>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <?php include("Library/Navbar.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard v2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-2"></div>
          <div class="col-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add User Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputFullName1">Full Name</label>
                    <input type="text" class="form-control" name="FullName" id="exampleInputFullName1" placeholder="Enter FullName">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUserName1">UserName</label>
                    <input type="text" class="form-control" name="UserName" id="exampleInputUserName1" placeholder="Enter UserName">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="Password" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDate1">Register Date</label>
                    <input type="Date" class="form-control" name="RegisterDate" id="exampleInputDate1" placeholder="Enter Date">
                  </div>
                  
                  
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label"  for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="btnRegister" class="btn btn-primary">Register</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <div class="col-2"></div>
        </div>
      </div>
    </section>

  </div>

  

  <?php include("Library/Footer.php");?>
</div>
<?php include("Library/Script.php");?>
</body>
</html>