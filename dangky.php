<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style_login.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body id="login">
  <div class="login-logo">
    <a href="index.php"><img src="images/logo.png" alt=""/></a>
  </div>
  <h2 class="form-heading">Đăng ký thành viên</h2>
  <form class="form-signin app-cam" action="index.html">
      <input type="text" class="form-control1" placeholder="Họ tên" autofocus>
      <input type="text" class="form-control1" placeholder="Địa chỉ" autofocus>
      <input type="text" class="form-control1" placeholder="Email" autofocus>
      <input type="text" class="form-control1" placeholder="Tỉnh/ Thành" autofocus>
      <div class="radios">
        <label for="radio-01" class="label_radio">
            <input type="radio" checked=""> Nam
        </label>
        <label for="radio-02" class="label_radio">
            <input type="radio"> Nữ
        </label>
	  </div>
      <input type="text" class="form-control1" placeholder="User Name" autofocus>
      <input type="password" class="form-control1" placeholder="Password">
      <input type="password" class="form-control1" placeholder="Nhập lại Password">
      <label class="checkbox-custom check-success">
          <input type="checkbox" value="agree this condition" id="checkbox1"> I agree to the Terms of Service and Privacy Policy
      </label>
      <button class="btn btn-lg btn-success1 btn-block" type="submit">Submit</button>
      <div class="registration">
          Already Registered.
          <a class="" href="login.php">
              Login
          </a>
      </div>
  </form>

</body>
</html>
