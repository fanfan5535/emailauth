<?php
include("dbconnect.php");
session_start();
extract($_POST);
if(isset($_POST['btn']))
{
$df=mysql_query("select * from register where email='$email'");
$n=mysql_num_rows($df);
if($n>=1)
{
?>
<script language="javascript">
	alert("Email Id Alreaty  Given..");
	</script>
	<?php
}
else
{
$max_qry = mysql_query("select max(id) from register");
	$max_row = mysql_fetch_array($max_qry); 
	$id=$max_row['max(id)']+1;
$qry=mysql_query("insert into register values('$id','$name','$email','$password','$repassword','$pnumber','$location','$space','','$email1','')");
if($qry)
{
$qr=mysql_query("insert into login(id,uname,name,date,time,pnumber)values('$id','$email','$name','','','$pnumber')");
$qr;
echo "<script>alert('Register Successfully..');</script>";
header("location:register1.php?id=$id");
	
}
else
{
echo "<script>alert('Register Unsuccessfully..');</script>";
}
}
}
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Mail Server</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href=""><b>Register</b></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new Account</p>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Full name" name="name" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
	  <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Alternate Email" name="email1" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
	   <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype password" name="repassword" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
	   <div class="form-group has-feedback">
        <input type="phonenumber" class="form-control" placeholder="PhoneNumber" name="pnumber" maxlength="10" maxlength="10" required>
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
	   <div class="form-group has-feedback">
        <input type="location" class="form-control" placeholder="Location" name="location" required>
        <span class="glyphicon glyphicon-globe form-control-feedback"></span>
      </div>
	  <div class="form-group has-feedback">
        <input type="diskspace" class="form-control" placeholder="Disk Space" name="space" required>
        <span class="glyphicon glyphicon-hdd form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label></label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="btn">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="login.php" class="text-center">I already have a membership</a> </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
