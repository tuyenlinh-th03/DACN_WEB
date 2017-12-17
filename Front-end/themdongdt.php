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
<title>Thêm dòng điện thoại</title>
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
                                                                                                        session_start();
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
            $obj = new Dongdt();
            $o2 = new Dongdt();
            $o1 = new Loaidt();
            $o3 = new Hangsx();
            $o4 = new Nhacc();
            $o5 = new Dongdt();
            if (isset($_POST['Submit']))
            {
                $md= $_POST['madong'];
                $ml= $_POST['maloai'];
                $mh= $_POST['mahang'];
                $mcc= $_POST['mancc'];
                $ten= $_POST['tendong'];
                $dg= $_POST['dongia'];
                $km= $_POST['giakm'];
                $err = "";
                $name = $_FILES["hinh"]["name"];
                if(strlen($name)>0)
                {
                    $errFile = $_FILES["hinh"]["error"];
                    if ($errFile>0)
                        $err .="Lỗi file hình <br>";
                    else
                    {
                        $type = $_FILES["hinh"]["type"];
                        $arrImg = array("images/png", "images/jpg", "images/bmp");
                        if (!in_array($type, $arrImg))
                            $err .="Không phải file hình <br>";
                        else
                        {   $temp = $_FILES["hinh"]["tmp_name"];
                            if (!move_uploaded_file($temp, "images/".$name))
                                $err .="Không thể lưu file<br>";
                            
                        }
                    }
                }

                $q = $o5->getAll();
                foreach($q as $v)
                {
                    if($v['MaDongDT']==$md)
                    {
                        echo "<p style='color:red;'>Mã dòng điện thoại bị trùng! Vui lòng nhập mã dòng điện thoại khác!</p>";
                        
                    }
                }
                if ($dg<=$km) {
                   echo "<p style='color:red;'>Giá khuyến mãi không thể lớn hơn giá gốc! Vui lòng  kiểm tra lại!</p>";     
                }
                elseif($dg<0 || $km<0)
                {
                    echo "<p style='color:red;'>Giá không thể là số âm! Vui lòng  kiểm tra lại!</p>"; 
                }
                else
                {
                    $data = $obj->insert($md, $ml, $mh, $mcc, $ten, $name, $dg, $km);
                    echo "<p style='color:green;'>Thêm dòng điện thoại thành công!</p>";
                }
            }
            $a= $o1->getAll();
            $b= $o3->getAll();
            $c= $o4->getAll();
            $data = $o2->getAll();
            ?>



            <fieldset class="fs">
            <legend class="lg" style="width: 370px;">Nhập thông tin dòng điện thoại cần thêm</legend>
            <form action="themdongdt.php" method="post" enctype="multipart/form-data">
            <table  align="center">
                <tr><td>Mã dòng điện thoại:</td><td><input type="text" name="madong" maxlength="10" required></td></tr>
                <tr><td>Mã loại:</td><td><select name="maloai" >
                                        <?php
                                            foreach($a as $v)
                                            { ?>
                                                <option value="<?php echo $v["MaLoai"]; ?>"><?php echo $v["MaLoai"]; ?></option>
                                                <?php
                                            } ?>
                                            </select>
                </td></tr>
                <tr><td>Mã hãng sản xuất:</td><td><select name="mahang">
                                        <?php
                                            foreach($b as $v)
                                            { ?>
                                                <option value="<?php echo $v["MaHangSX"]; ?>"><?php echo $v["MaHangSX"]; ?></option>
                                                <?php
                                            } ?>
                                            </select>
                </td></tr>
                <tr><td>Mã nhà cung cấp:</td><td><select name="mancc">
                                        <?php
                                            foreach($c as $v)
                                            { ?>
                                                <option value="<?php echo $v["MaNCC"]; ?>"><?php echo $v["MaNCC"]; ?></option>
                                                <?php
                                            } ?>
                                            </select>
                </td></tr>
                <tr><td>Tên dòng điện thoại:</td><td><input type="text" name="tendong" maxlength="50" required></td></tr>
                <tr><td>Hình ảnh :</td><td><input type="file" name="hinh" id="hinh"></td></tr>
                <tr><td>Đơn giá:</td><td><input type="number" name="dongia" step="0.001" required></td></tr>
                <tr><td>Giá khuyến mãi:</td><td><input type="number" step="0.001" name="giakm"></td></tr>
                <tr><td colspan="2" align="center"><input type="submit" value="Thêm" name="Submit"></td></tr>
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
