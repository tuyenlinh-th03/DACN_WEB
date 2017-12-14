<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
    session_start();
    ob_start();
 ?>
<!DOCTYPE HTML>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sửa nhân viên</title>
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style_back.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/lines.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="js/d3.v3.js"></script>
<script src="js/rickshaw.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Smart Store</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
	        		<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge">4</span></a>
	        		<ul class="dropdown-menu">

						<li class="avatar">
							<a href="#">
								<img src="images/1.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/2.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/5.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/pic1.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="dropdown-menu-footer text-center">
							<a href="#">View all messages</a>
						</li>	
	        		</ul>
	      		</li>
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><span>Xin chào, <?php 
                                                                                                        
                                                                                                        echo $_SESSION["loginback"]["0"]["UserName"]; ?> 
                                                                                                </span><i class="fa fa-user"></i></a>
	        		<ul class="dropdown-menu">
						
						<li class="dropdown-menu-header text-center">
							<strong>Cài đặt</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-user"></i> Thông tin tài khoản</a></li>
						<li class="m_2"><a href="#"><i class="fa  fa-cog"></i> Đổi mật khẩu</a></li>
						<li class="m_2"><a href="login.php"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>
			<form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index_backend.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="timdongdt.php"><i class="fa fa-archive nav_icon"></i>Quản lý dòng sản phẩm <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="themdongdt.php">Thêm dòng sản phẩm</a>
                                </li>
                                <li>
                                    <a href="timdongdt.php">Danh sách dòng sản phẩm</a>
                                </li>
                                <li>
                                    <a href="timdt.php"><i class="fa fa-archive nav_icon"></i>Sản phẩm <span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="themdt.php">Thêm sản phẩm</a>
                                        </li>
                                        <li>
                                            <a href="timdt.php">Danh sách sản phẩm</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="timloai.php"><i class="fa fa-archive nav_icon"></i>Quản lý loại sản phẩm <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="themloaidt.php">Thêm loại sản phẩm</a>
                                    </li>
                                    <li>
                                        <a href="timloai.php">Danh sách loại sản phẩm</a>
                                    </li>
                            </ul>
                                    <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="timdh.php"><i class="fa fa-archive nav_icon"></i>Quản lý đơn hàng <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="themdh.php">Thêm đơn hàng</a>
                                </li>
                                <li>
                                    <a href="timdh.php">Danh sách đơn hàng</a>
                                </li>
                                <li>
                                    <a href="timctdh.php"><i class="fa fa-archive nav_icon"></i>Quản lý chi tiết đơn hàng <span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="themctdh.php">Thêm chi tiết đơn hàng</a>
                                        </li>
                                        <li>
                                            <a href="timctdh.php">Danh sách chi tiết đơn hàng</a>
                                        </li>
                                    </ul>
                                            <!-- /.nav-second-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="timkh.php"><i class="fa fa-archive nav_icon"></i>Quản lý khách hàng <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="themkh.php">Thêm khách hàng</a>
                                </li>
                                <li>
                                    <a href="timkh.php">Danh sách khách hàng</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="timnv.php"><i class="fa fa-archive nav_icon"></i>Quản lý nhân viên <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="themnv.php">Thêm nhân viên</a>
                                </li>
                                <li>
                                    <a href="timnv.php">Danh sách nhân viên</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
     	<div class="col_3">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-archive icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>$450</strong></h5>
                      <span>Sản phẩm còn hàng</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-calendar user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>$450</strong></h5>                 
                      <span>Đơn hàng hôm nay</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-user user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>$450</strong></h5>
                      <span>Khách tương tác</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-dollar dollar1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>$450</strong></h5>
                      <span>Doanh số hôm nay</span>
                    </div>
                </div>
        	 </div>
        	<div class="clearfix"> </div>
      </div>
	  <div class="span_11">
		<div class="col-md-6 col_4">
		  <!----Calender -------->
			<link rel="stylesheet" href="css/clndr.css" type="text/css" />
			<script src="js/underscore-min.js" type="text/javascript"></script>
			<script src= "js/moment-2.2.1.js" type="text/javascript"></script>
			<script src="js/clndr.js" type="text/javascript"></script>
			<script src="js/site.js" type="text/javascript"></script>
			<!----End Calender -------->
		</div>
		<div class="col-md-6 col_5">

	       <div id="slider"></div>

</div>
<!-- //map -->
       </div>
       <div class="clearfix"> </div>
    </div>
    <div class="content_bottom">
        <?php
        include "config.php";
        include "autoload.php";
        $ob = new Nhanvien();
        $obj = new Nhanvien();
        $ma = $_GET["ma"];
        if(isset($_POST['sm']))
        {
            $ten = $_POST["ten"];
            $us = $_POST["us"];
            $mk = md5($_POST["mk"]);
            $ns = $_POST["ns"];
            $gt = $_POST["gt"];
            $qtc = $_POST["qtc"];
            $dc = $_POST["dc"];
            $sdt = $_POST["sdt"];
            $data = $ob->update($ma, $ten ,$us, $mk, $ns, $gt, $qtc, $dc, $sdt);
            header("location:timnv.php");
            ob_end_flush();
        }
        $o2 = $obj->getOne($ma);
        ?>
        <fieldset class="fs">
        <legend class="lg">Nhập thông tin nhân viên cần sửa</legend>
        <form method="post" action="">
        <table  align="center">

            <?php
            foreach ($o2 as $v) {
                ?>
         <tr><td>Mã nhân viên : </td><td><input type="text" disabled name="ma" 
                value="<?php echo $v["MaNV"];?>" />
                </td></tr>
          <tr><td>Tên nhân viên : </td><td><input type="text" name="ten" maxlength="50" required value="<?php echo $v["TenNV"];?>" /></td></tr>
          <tr><td>User Name : </td><td><input type="text" name="us" maxlength="50" required value="<?php echo $v["UserName"];?>" /></td></tr>
          <tr><td>Mật khẩu : </td><td><input type="password" name="mk" maxlength="32" required value="<?php echo $v["MatKhau"];?>" /></td></tr>
          <tr><td>Ngày sinh : </td><td><input type="date" name="ns" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" value="<?php echo $v["NgaySinh"];?>" /></td></tr>
          <tr><td>Giới tính :</td><td><input type="radio" name="gt" value="1" <?php 
                                    if($v["GioiTinh"]=="1")
                                        echo 'checked="checked"';
                                    ?>>Nam
                                        <input type="radio" name="gt" value="0" <?php 
                                    if($v["GioiTinh"]=="0")
                                        echo 'checked="checked"';
                                    ?>>Nữ</td></tr>
          <tr><td>Quyền truy cập : </td><td><input type="text" name="qtc" maxlength="30" required value="<?php echo $v["QuyenTruyCap"];?>" /></td></tr>
          <tr><td>Địa chỉ : </td><td><input type="text" name="dc" maxlength="70" required value="<?php echo $v["DiaChi"];?>" /></td></tr>
          <tr><td>SĐT : </td><td><input type="number" name="sdt" required value="<?php echo $v["SDT"];?>" /></td></tr>
         <?php
        } ?>
         <tr><td colspan="2" align="center"><input type="submit" name="sm" value="Sửa" /></td></tr>
         </table>
        </form>
        </fieldset>
    </div>
      <!-- /#page-wrapper -->
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
