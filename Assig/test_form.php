

<!-- validation -->
<?php
		$EmailErr = $PasswordErr ="";
	$Email = $Password="";
	echo".";

	if(isset($_POST['Submit'])){
		echo "<br>";
		if(empty($_POST['Email'])){
			$EmailErr = "*Sorry Email Required";
		}
		else{
			echo $Email=InputMethod($_POST['Email']);
		}	

		if (empty($_POST['Password'])) {
			$PasswordErr = "*Sorry Password Required";
		}
		else{
			echo $Password = InputMethod($_POST['Password']);
		}
	}


	function InputMethod($value)
	{
		$value = trim($value);
		$value = stripcslashes($value);
		$value = htmlspecialchars($value);
		return $value;
	}

?>
<!-- end validation -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="sidebar-mini sidebar-collapse">
	<div class="container">
        <div class="row">
          <!-- left column -->
          <div class="col-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">form with validation</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" autocomplete="off">
                <div class="card-body">
                  <div class="form-group">
                  	<span style="color: red;"><?php echo $EmailErr; ?></span><br>
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="Email">
                  </div>
                  <div class="form-group">
                  	<span style="color: red;"><?php echo $PasswordErr; ?></span><br>
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="Password">
                  </div>                  
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- general form elements -->
            

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          
        </div>
        <!-- /.row -->
      </div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>

<!-- Array Test -->
<?php
	
	$FullName = array("Mohamed","Abdiaziz","Hassan");
	echo "The First Name is <b>{$FullName[0]}</b> <br>";
	echo "The Second Name is <b>{$FullName[1]}</b> <br>";
	echo "The Last Name is <b>{$FullName[2]}</b> <br>";
?>
<!-- End Array test -->




<!-- Loops -->
<?php
	echo "1.While Loop: ";
	$num1= 10;
	while ($num1 >=0) {
		echo "<b>{$num1}</b>,";
		$num1--;
	}
	echo "<br>2.For-each Loop: ";
	foreach ($FullName as $Vr) {
		echo "<b>{$Vr} </b>";
	}
	echo "<br>3.For Loop: ";
	for ($i=0; $i < 10; $i++) { 
		echo "<b>{$i}</b>,";
	}

?>
<!-- end Loops -->