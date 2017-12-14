<?php
session_start();
include "config.php";

include ROOT."/include/function.php";

include "autoload.php";
$db= new Db();
$cart = new Cart();
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title> Smart Store </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="themes/default/default.css" rel="stylesheet" type="text/css">
<link href="css/nivo-slider_style.css" rel="stylesheet" type="text/css">
<!--<link href="css/style_nivo.css" rel="stylesheet" type="text/css">-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/menu_1.css" rel="stylesheet" type="text/css" />

<link href="css/style_index.css" rel="stylesheet" type="text/css" />

<script src="js/owl.carousel.js" type="text/javascript"></script> 
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
<link href="css/style_slidersp.css" rel="stylesheet" type="text/css" />


<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/menu_1.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.css" rel="stylesheet"> 

<link href="css/style_login_second.css" rel='stylesheet' type='text/css' />


<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>-->
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 

<!--<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>-->
</head>
<body>
 <div class="container">
  <div class="wrap">
	<div class="header">
		<div class="header_top">
		
			<div class="logo">
				<a href="index.php"><img src="images/logo.png"  /></a>
			</div>
			  <div class="header_top_right">
			    <div class="search_box">
				    <form>
				    	<input type="text" value="Search for Products" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for Products';}"><input type="submit" value="SEARCH">
				    </form>
			    </div>
			    <div class="shopping_cart">
					<div class="cart">
						<a href="giohang.php" title="View my shopping cart" rel="nofollow">
							<strong class="opencart"> </strong>
								<span class="cart_title">Giỏ hàng(<span id="cart_sumary"><?php echo  $cart->getNumItem();
								?></span>)</span>
							</a>
						</div>
			    </div>
			
<?php
					if (!isset($_SESSION["loginfront"]))
					{
				?>
			   <div class="login">
				   <span><a href="login.php"><img src="images/login.png" alt="" title="login"/></a></span>
			   </div>
			  <a href="dangky.php"><button class="btn btn-default"><span class="glyphicon glyphicon-off"></span> Đăng ký</button></a><?php } 
			  else
			  {
			  ?>
			  <ul class="nav navbar-nav navbar-right">
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><span><?php  
                                                                                                    	if (isset($_SESSION["loginfront"])) {
                                                                                                    	$kitu = str_word_count($_SESSION["loginfront"]["0"]["TenKH"]);
                                                                                                    	$chuoi = explode(" ", $_SESSION["loginfront"]["0"]["TenKH"]);
                                                                                                    	/*print_r($chuoi);*/
                                                                                                    	$ten = $chuoi[$kitu-1];

                                                                                                        echo "Xin chào, ".$ten;
                                                                                                    }
                                                                                                        ?>
                                                                                                </span><i class="fa fa-user" style='font-size:15px;'></i></a>
	        		<ul class="dropdown-menu">
						
						<li class="dropdown-menu-header text-center">
							<strong>Cài đặt</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-user"></i> Thông tin tài khoản</a></li>
						<li class="m_2"><a href="#"><i class="fa  fa-cog"></i> Đổi mật khẩu</a></li>
						<li class="m_2"><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>
			<?php } ?>
	 		</div>
	 	</div>
	  </div>
  </div>
</div>
<div class="container">
	<ul class="ul_menu">
		<li><a href="dienthoai.php">ĐIỆN THOẠI</a>
			<ul class="menu">
				<li><a href="apple.php">Apple</a></li>
				<li><a href="samsung.php">Samsung</a></li>
				<li><a href="oppo.php">Oppo</a></li>
				<li><a href="#">Vivo</a></li>
				<li><a href="#">Nokia</a></li>
				<li><a href="#">Sony</a></li>
				<li><a href="#">Asus</a></li>
				<li><a href="#">Htc</a></li>
			</ul>
		</li>
  		<li><a href="#">PHỤ KIỆN</a>
        	<div class="phukien">
        		<div class="content_pk">
        			<h3>Các sản phẩm phụ kiện</h3>                 
                    <ul>  
                    	<li><a href="thenho.php">Thẻ nhớ</a></li>
                        <li><a href="#">Sạc cáp</a></li>
                        <li><a href="#">Phụ kiện Apple</a></li>  
                    	<li><a href="#">Bao da ốp lưng</a></li>        
                    </ul>
                </div>
                <div class="clear"></div>
                <div class="content_pk_2">
                    <ul>  
                    		<li><a href="#">Sạc dự phòng</a></li>                       	
                            <li><a href="#">Tai nghe</a></li>    
                            <li><a href="#">Miếng dán màn hình</a></li>
                            <li><a href="#">Phụ kiện khác</a></li>
                    </ul>
                </div>
                	<div class="content_pk_3">
        			<h3>BÁN CHẠY NHẤT</h3>                 
                    <ul class="menu_pk">  
                    	<li><a href="thenho.php">
                    		<div class="hinh">
							<img src="images/phukien_num.png">
							</div>
							<div class="nd_menu">
								<span>Loa bluetooth Rocky CR-X6</span>
								<p>599.000 ₫</p>
							</div>	
                       </a></li>
                       <li><a href="thenho.php">
                    		<div class="hinh_2">
							<img src="images/phukien_head.png">
							</div>
							<div class="nd_menu_2">
								<span>Mic Karaoke kèm loa Bluetooth và SDP </span>
								<p>750.000 ₫</p>
							</div>	
                       		</a> 
						</li>     
                    </ul>
            	</div>
            </div>
        	
        </li>
  		<li><a href="about.php">THẺ,SIM</a></li>
   		<li><a href="#">MÁY ĐỔI TRẢ</a></li>
   		<li><a href="#">HÀNG CŨ</a></li>
 		<li><a href="faq.php">KHUYẾN MÃI</a></li>
  		<li><a href="contact.php">TRẢ GÓP</a></li>
	</ul>
</div>
<div class="container">
	<div class="lst">
		<h1>ĐIỆN THOẠI</h1>
			<div class="icon">
			<a href="#"><img src="images/duoi1tr.jpg" class="cangiua"></a></br>
			<span>Dưới 1 triệu</span>
			</div>
			<div class="icon">
			<a href="#"><img src="images/1-3.jpg" class="cangiua"></a></br>
			<span>Từ 1 đến 3 triệu</span>
			</div>
			<div class="icon">
			<a href="#"><img src="images/3-6.jpg" class="cangiua"></a></br>
			<span>Từ 3 đến 6 triệu</span>
			</div>
			<div class="icon">
			<a href="#"><img src="images/6-10.jpg" class="cangiua"></a></br>
			<span>Từ 6 đến 10 triệu</span>
			</div>
			<div class="icon">
			<a href="#"><img src="images/10-15.jpg" class="cangiua"></a></br>
			<span>Từ 10 đến 15 triệu</span>
			</div>
			<div class="icon">
			<a href="#"><img src="images/tren15tr.jpg" class="cangiua"></a></br>
			<span>Trên 15 triệu</span>
			</div>
	</div>
</div>
<div style="clear: both"></div>
<div class="container">
<div class=" bg_icon" style="margin-top:50px;" >
	<div class="row">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner" >
			<div class="item active">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
					<img src="images/icon_apple.png" class="img-responsive icon_a">
				</div>
				<div class="col-xs-3">
					<img src="images/icon_samsung.png" class="img-responsive icon_s">
				</div>
				<div class="col-xs-3">
					<img src="images/icon_oppo.PNG" class="img-responsive icon_o">
				</div>
				<div class="col-xs-3">
					<img src="images/icon_sony.png" class="img-responsive icon_s">
				</div>
			</div>
			<div class="item">
				<div class="col-xs-3">
					<img src="images/icon_nokia.png" class="img-responsive icon_n">
				</div>
				<div class="col-xs-3">
					<img src="images/icon_vivo.png" class="img-responsive icon_v">
				</div>
				<div class="col-xs-3">
					<img src="images/icon_xiao.png" class="img-responsive icon_x">
				</div>
				<div class="col-xs-3">
					<img src="images/icon_asus.png" class="img-responsive icon_as">
				</div>
			</div>
		  </div>
	   </div>		
	</div>
	</div>
</div>
<div style="clear: both"></div>
<div class="container">
	<div class="slidersp">
		<h1>ĐIỆN THOẠI HOT NHẤT</h1>
		<div class="owl-carousel" id="slidersp1">
				<div class="itemsp">
					<a href="IP7_256.php">
					<img src="images/camera_iPhone 7 128GB.jpg" />
					</a>
					<h3 class="fs-icname">iPhone 7 256GB</h3>
	        		<p class="fs-icpri"><strong>19.999.000 ₫</strong>&nbsp;
	       			<del class="p-old-price">21.999.000 ₫</del>
	       			</p>
				</div>
				<div class="itemsp">
					<a href="IP6s_32.php">
					<img src="images/ip6s.png" />
					</a>
					<h3 class="fs-icname">iPhone 6s Plus 32GB</h3>
	        		<p class="fs-icpri"><strong>14.499.000 ₫</strong></p>	
				</div>
				<div class="itemsp">
					<a href="SS_A5.php">
					<img src="images/dt_1.png" />
					</a>
					<h3 class="fs-icname">Samsung Galaxy A5 2017</h3>
	        		<p class="fs-icpri"><strong>7.990.000 ₫</strong></p>
				</div>
				<div class="itemsp">
					<a href="#">
					<img src="images/oppof3.jpg" />
					</a>
					<h3 class="fs-icname">OPPO F3</h3>
	        		<p class="fs-icpri"><strong>6.990.000 ₫</strong></p>
				</div>
				<div class="itemsp">
					<a href="#">
					<img src="images/camera_1o.png" />
					</a>
					<h3 class="fs-icname">Samsung Galaxy C9 Pro</h3>
	        		<p class="fs-icpri"><strong>11.490.000 ₫</strong></p>
				</div>
				<div class="itemsp">
					<a href="#">
					<img src="images/Nokia 6.png"/>
					</a>
					<h3 class="fs-icname">Nokia 6</h3>
	        		<p class="fs-icpri"><strong>5.590.000 ₫</strong></p>
				</div>
				<div class="itemsp">
					<a href="#">
					<img src="images/ip8.png" />
					</a>
					<h3 class="fs-icname">iPhone 8 Plus 64GB</h3>
	        		<p class="fs-icpri"><strong>23.990.000 ₫</strong></p>
				</div>
				<div class="itemsp">
					<a href="#">
					<img src="images/iphpne-6.png"/>
					</a>
					<h3 class="fs-icname">iPhone 6 32GB (2017)</h3>
	        		<p class="fs-icpri"><strong>8.999.000đ</strong>&nbsp;
	       			<del class="p-old-price">9.999.000 ₫</del>
                    </p>
				</div>
				<div class="itemsp">
					<a href="#">
					<img src="images/Samsung-Galaxy-A7-(2017).png"/>
					</a>
					<h3 class="fs-icname">Samsung Galaxy A7 (2017)</h3>
	        		<p class="fs-icpri"><strong>9.990.000 ₫</strong></p>
				</div>
	            <div class="itemsp">
	            	<a href="#">
					<img src="images/game_S8-khoi.png"/>
					</a>
					<h3 class="fs-icname">Samsung Galaxy S8 Plus</h3>
	        		<p class="fs-icpri"><strong>20.490.000 ₫</strong></p>
				</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="slidersp">
		<h1>ĐIỆN THOẠI MỚI RA MẮT</h1>
		<div class="owl-carousel" id="slidersp2">
			<div class="itemsp">
				<a href="SS_J7Pro.php">
				<img src="images/j7pro.png" />
				</a>
				<h3 class="fs-icname">Samsung Galaxy J7 Pro</h3>
        		<p class="fs-icpri"><strong>6.990.000 ₫</strong></p>
			</div>
			<div class="itemsp">
				<a href="#">
				<img src="images/ip8.png" />
				</a>
				<h3 class="fs-icname">iPhone 8 Plus 64GB</h3>
        		<p class="fs-icpri"><strong>23.990.000 ₫</strong></p>
			</div>
			<div class="itemsp">
				<a href="#">
				<img src="images/ch_1.png" />
				</a>
				<h3 class="fs-icname">Samsung Galaxy Note 8</h3>
        		<p class="fs-icpri"><strong>22.490.000 ₫</strong></p>	
			</div>
			<div class="itemsp">
				<a href="#">
				<img src="images/vivov7+.png" />
				</a>
				<h3 class="fs-icname">Vivo V7 Plus</h3>
        		<p class="fs-icpri"><strong>7.990.000 ₫</strong></p>
			</div>
			<div class="itemsp">
				<a href="#">
				<img src="images/vivoy69.png" />
				</a>
				<h3 class="fs-icname">Vivo Y69</h3>
        		<p class="fs-icpri"><strong>5.990.000 ₫</strong></p>
			</div>
			<div class="itemsp">
				<a href="#">
				<img src="images/vivov5s.png" />
				</a>
				<h3 class="fs-icname">Vivo V5s</h3>
        		<p class="fs-icpri"><strong>6.690.000 ₫</strong></p>
			</div>
			<div class="itemsp">
				<a href="#">
				<img src="images/game_HTC U11 Red.jpg"/>
				</a>
				<h3 class="fs-icname">HTC U11 Red</h3>
        		<p class="fs-icpri"><strong>16.990.000 ₫</strong></p>
			</div>
			<div class="itemsp">
				<a href="#">
				<img src="images/Nokia 6.png"/>
				</a>
				<h3 class="fs-icname">Nokia 6</h3>
        		<p class="fs-icpri"><strong>5.590.000 ₫</strong></p>
			</div>
			<div class="itemsp">
				<a href="#">
				<img src="images/Samsung Galaxy J3 Pro.jpg"/>
				</a>
				<h3 class="fs-icname">Samsung Galaxy J3 Pro</h3>
        		<p class="fs-icpri"><strong>4.490.000 ₫</strong></p>
			</div>
            <div class="itemsp">
            	<a href="#">
				<img src="images/Nokia 8.png"/>
				</a>
				<h3 class="fs-icname">Nokia 8</h3>
        		<p class="fs-icpri"><strong>12.990.000 ₫</strong></p>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="slidersp">
		<h1>ĐIỆN THOẠI NHIẾP ẢNH</h1>
		<div class="owl-carousel" id="slidersp3">
        	<div class="itemsp">
				<a href="oppo_f3.php">
				<img src="images/camera_oppo.jpg" />
				</a>
				<h3 class="fs-icname">OPPO F3 Plus</h3>
        		<p class="fs-icpri"><strong>10.690.000 ₫</strong></p>
			</div>
			<div class="itemsp">
				<a href="#">
				<img src="images/camera_1o.png" />
				</a>
				<h3 class="fs-icname">Samsung Galaxy C9 Pro</h3>
        		<p class="fs-icpri"><strong>11.490.000 ₫</strong></p>
			</div>
			<div class="itemsp">
				<a href="#">
				<img src="images/camera_1oppo.jpg" />
				</a>
				<h3 class="fs-icname">OPPO F3</h3>
        		<p class="fs-icpri"><strong>6.990.000 ₫</strong></p>	
			</div>
			<div class="itemsp">
				<a href="#">
				<img src="images/camera_iPhone 7 128GB.jpg" />
				</a>
				<h3 class="fs-icname">iPhone 7 128GB</h3>
        		<p class="fs-icpri"><strong>18.999.000 ₫</strong>&nbsp;
       			<del class="p-old-price">19.999.000đ</del>
        		</p>
			</div>
			<div class="itemsp">
				<a href="#">
				<img src="images/camera_S8-Plus.png" />
				</a>
				<h3 class="fs-icname">Samsung Galaxy S8</h3>
        		<p class="fs-icpri"><strong>18.490.000 ₫</strong></p>
			</div>
			<div class="itemsp">
				<a href="#">
				<img src="images/camera_S8-S8-Plus.png"/>
				</a>
				<h3 class="fs-icname">Samsung Galaxy S8 Plus</h3>
        		<p class="fs-icpri"><strong>20.490.000 ₫</strong></p>
			</div>
			<div class="itemsp">
				<a href="#">
				<img src="images/camera_Sony Xperia XZ1.png" />
				</a>
				<h3 class="fs-icname">Sony Xperia XZ1</h3>
        		<p class="fs-icpri"><strong>15.990.000 ₫</strong></p>
			</div>
			<div class="itemsp">
				<a href="#">
				<img src="images/camera_Sony Xperia XZs.png"/>
				</a>
				<h3 class="fs-icname">Sony Xperia XZs</h3>
        		<p class="fs-icpri"><strong>12.990.000 ₫</strong></p>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="slidersp">
		<h1>ĐIỆN THOẠI CHƠI GAME</h1>
		<div class="owl-carousel" id="slidersp4">
			<div class="itemsp">
				<a href="htc_red.php">
				<img src="images/game_HTC U11 Red.jpg" />
				</a>
				<h3 class="fs-icname">HTC U11 Red</h3>
        		<p class="fs-icpri"><strong>16.990.000 ₫</strong></p>
			</div>
			<div class="itemsp">
				<a href="#">
				<img src="images/game_HTC U11.jpg" />
				</a>
				<h3 class="fs-icname">HTC U11</h3>
        		<p class="fs-icpri"><strong>16.990.000 ₫</strong></p>	
			</div>
			<div class="itemsp">
				<a href="#">
				<img src="images/game_iPhone 7 7 Plus 128GB.jpg" />
				</a>
				<h3 class="fs-icname">iPhone 7 Plus 256GB</h3>
        		<p class="fs-icpri"><strong>23.999.000 ₫</strong></p>
			</div>
			<div class="itemsp">
				<a href="#">
				<img src="images/game_iPhone 7 Plus 128GB.jpg" />
				</a>
				<h3 class="fs-icname">iPhone 7 Plus 128GB</h3>
        		<p class="fs-icpri"><strong>22.999.000 ₫</strong></p>
			</div>
			<div class="itemsp">
				<a href="#">
				<img src="images/game_oppo.jpg" />
				</a>
				<h3 class="fs-icname">OPPO F3 Plus</h3>
        		<p class="fs-icpri"><strong>10.690.000 ₫</strong></p>
			</div>
			<div class="itemsp">
				<a href="#">
				<img src="images/game_pro.png"/>
				</a>
				<h3 class="fs-icname">Samsung Galaxy C9 Pro</h3>
        		<p class="fs-icpri"><strong>11.490.000 ₫</strong></p>
			</div>
			<div class="itemsp">
				<a href="#">
				<img src="images/game_S8-khoi.png" />
				</a>
				<h3 class="fs-icname">Samsung Galaxy S8 Plus</br>
				</h3>
        		<p class="fs-icpri"><strong>20.490.000 ₫</strong></p>
			</div>
			<div class="itemsp">
				<a href="#">
				<img src="images/game_S8-Plus.png"/>
				</a>
				<h3 class="fs-icname">Samsung Galaxy S8 Plus</h3>
        		<p class="fs-icpri"><strong>20.490.000 ₫</strong></p>
			</div>
			<div class="itemsp">
				<a href="#">
				<img src="images/game_S8-S8-Plus.png"/>
				</a>
				<h3 class="fs-icname">Samsung Galaxy S8</h3>
        		<p class="fs-icpri"><strong>18.490.000 ₫</strong></p>
			</div>
            <div class="itemsp">
            	<a href="#">
				<img src="images/game_Sony Xperia XZ Premium.png"/>
				</a>
				<h3 class="fs-icname">Sony Xperia XZ Premium</h3>
        		<p class="fs-icpri"><strong>17.990.000 ₫</strong></p>
			</div>
		</div>
	</div>
</div>
  <div class="container">
   <div class="footer">
   	  <div class="wrapper">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>GIỚI THIỆU VỀ CÔNG TY</h4>
						<ul>
						<li><a href="#">Câu hỏi thường gặp mua hàng</a></li>
						<li><a href="#">Các chính sách FPT Shop</a></li>
						<li><a href="#">Hệ thống bảo hành</a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>TIN TUYỂN DỤNG</h4>
						<ul>
						<li><a href="about.php">Tin khuyến mãi</a></li>
						<li><a href="faq.php">Hướng dẫn mua online</a></li>
						<li><a href="#">Hướng dẫn mua trả góp</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>HỆ THỐNG CỬA HÀNG</h4>
						<ul>
							<li><a href="contact.php">Kiểm tra hàng Apple chính hãng</a></li>
							<li><a href="index.php">Giới thiệu máy đổi trả</a></li>
							<li><a href="#">Giới thiệu xả hàng</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4 support_tt">
					<h4>
						Hỗ trợ thanh toán
						<a href="#"><img src="images/icon_visa.png"></a>
						<a href="#"><img src="images/icon_atm.png"></a>
					</h4>
						<ul>
							<li class="footer_pay">Tư vẫn miễn phí (24/7) : <span style="color: #d02c2c;">1800 6601 </span> </li>
						</ul>
						<div class="social-icons">
							<h4>LIKE & SHARE</h4>
					   		  <ul>
							      <li class="facebook"><a href="#" target="_blank"> </a></li>
							      <li class="twitter"><a href="#" target="_blank"></a></li>
							      <li class="googleplus"><a href="#" target="_blank"> </a></li>
							      <li class="contact"><a href="#" target="_blank"> </a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>
			<div class="copy_right">
				<p> ©  2007 - 2016 Công Ty Cổ Phần Bán Lẻ Kỹ Thuật Số FPT / Địa chỉ: 261 Khánh Hội, P5, Q4, TP. Hồ Chí Minh / GPĐKKD số 0311609355 do Sở KHĐT TP.HCM cấp ngày 08/03/2012.</p>
		   </div>
     </div>
    </div>
	  </div>

    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
							  <script defer src="js/jquery.flexslider.js"></script>
							  <script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
<script type="text/javascript">
  $(document).ready(function($){
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });
</script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>

<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
</script> 

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script src="js/owl.carousel.js" type="text/javascript"></script> 
<script type="text/javascript">
    $(document).ready(function() {
              var owl = $('#slidersp1,#slidersp2,#slidersp3,#slidersp4');
              owl.owlCarousel({
                nav: true,
                navText:['<','>'],
                loop: true,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 3
                  },
                  1000: {
                    items: 5
                  }
                }
              })
            })
</script> 

</body>
</html>

