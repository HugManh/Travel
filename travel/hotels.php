<?php
	include ("backend/database.php");
	$db = new Database();
?>

<!DOCTYPE html>
<html lang="vi" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Travelista</title>

	<!-- CSS  ----------------------------------------------------------------------------------------------->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/jquery-ui.css">				
	<link rel="stylesheet" href="css/nice-select.css">							
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">				
	<link rel="stylesheet" href="css/main.css">
	<!-- CSS  ----------------------------------------------------------------------------------------------->
</head>


<body>	
	<!-- header -->
	<header id="header">
		<!-- liên hệ - facebook -->
		<div class="header-top">
			<div class="container">
	  			<div class="row align-items-center">
	  				<div class="col-lg-6 col-sm-6 col-6 header-top-left">
	  					<ul>
	  						<li><a href="#lienhe">Liên hệ</a></li>
	  						<li><a href="#">Đặt vé</a></li>
	  					</ul>			
	  				</div>

		  			<div class="col-lg-6 col-sm-6 col-6 header-top-right">
						<div class="header-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
						</div>
		  			</div>
	  			</div>			  					
			</div>
		</div>
		
		<!-- logo - menu -->
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
		    	<div id="logo">
		        	<a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
		      	</div>

		      	<nav id="nav-menu-container">
			        <ul class="nav-menu">
			        	<li><a href="index.php">Trang chủ</a></li>
			        	<li><a href="index.php#cost">Giá</a></li>
			        	<li><a href="packages.php">Gói du lịch</a></li>
			        	<li><a href="hotels.php">Khách sạn</a></li>
			        	<li><a href="insurance.php">Bảo hiểm</a></li>
			        	<li><a href="about.php">Về chúng tôi</a></li>
			        </ul>
		      	</nav><!-- #thanh menu -->					      		  
			</div>
		</div>
	</header><!-- #header -->

			  
	<!-- start banner -->
	<section class="about-banner relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Khách Sạn				
					</h1>	
					<p class="text-white link-nav"><a href="index.php">Trang Chủ </a>  <span class="lnr lnr-arrow-right"></span>  <a href="hotels.php"> Khách Sạn</a></p>
				</div>	
			</div>
		</div>
	</section>
	<!-- End banner -->	

	<!-- Start khách sạn nổi tiếng -->
	<section class="destinations-area section-gap">
		<div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-40 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Một số khách sạn nổi tiếng</h1>
                        <p>Những nơi nghỉ dưỡng chất lượng luôn mang đến những trải nghiệm tuyệt vời cho bạn.</p>
                    </div>
                </div>
            </div>

			<div class="row">
			<?php
				$result_ht = $db->get_info_hotel();
				while ($row_ht = $result_ht->fetch_assoc()) {
				?>
					<div class="col-lg-4">
						<div class="single-destinations">
							<div class="thumb">
								<img src="img/hotels/<?php echo $row_ht['img']; ?>" alt="">
							</div>
							<div class="details">
								<h4 class="d-flex justify-content-between">
									<span><?php echo $row_ht['title']; ?></span>                              	
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>				
									</div>	
								</h4>

								<p>
									<a href="">Xem trên bản đồ</a> | <?php echo $row_ht['assess']; ?> Đánh giá
								</p>
								<ul class="package-list">
									<li class="d-flex justify-content-between align-items-center">
										<span>Trụ sở</span>
										<span><?php echo $row_ht['place']; ?></span>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Phòng tập thể dục</span>
										<span>Có</span>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Wifi</span>
										<span>Có</span>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Bể bơi</span>
										<span>Có</span>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Điều hòa không khí</span>
										<span>Có</span>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Nhà hàng</span>
										<span>Có</span>
									</li>												
									<li class="d-flex justify-content-between align-items-center">
										<span>Giá phòng 1 ngày đêm</span>
										<a href="#" class="price-btn"><?php echo $row_ht['cost']; ?>đ</a>
									</li>													
								</ul>
							</div>
						</div>
					</div>
				<?php
				}
			?>																												
			</div>
		</div>	
	</section>
	<!-- End khách sạn nổi tiếng -->
			
	<!-- Start tìm kiếm -->
	<section class="home-about-area">
		<div class="container-fluid">
			<div class="row align-items-center justify-content-end">
				<div class="col-lg-6 col-md-12 home-about-left">
					<h1>
						Không tìm thấy khách sạn phù hợp?<br>
						Chúng tôi sẽ giúp bạn.
					</h1>
					<p>
						Chúng tôi sẽ tìm kiếm thông tin khách sạn phù hợp nhất đối với yêu cầu của bạn. Hãy cho chúng tôi biết nó nhé! Sẽ thật tuyệt vời đó!
					</p>

					<a href="#" class="primary-btn text-uppercase">Yêu Cầu Thông Tin Tùy Chỉnh</a>
				</div>
				<div class="col-lg-6 col-md-12 home-about-right no-padding">
					<img class="img-fluid" src="img/hotels/about-img.jpg" alt="">
				</div>
			</div>
		</div>	
	</section>
	<!-- End tìm kiếm -->

	<!-- start footer -->		
	<footer class="footer-area section-gap">
		<div class="container">

			<!-- Thông tin -->
			<div class="row">
				<!-- bản quyền -->
				<div id="lienhe" class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Travelista</h6>
						<p>
							Địa chỉ: Cầu Giấy - Hà Nội <br>
							SĐT: 01234566 <br>
							Email: suport_travelista@gmail.com 
						</p>
					</div>
				</div>

				<!-- điều hướng -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Điều hướng</h6>
						<div class="row">
							<div class="col">
								<ul>
									<li><a href="index.html">Trang chủ</a></li>
									<li><a href="#">Dịch vụ</a></li>
									<li><a href="insurance.html">Bảo hiểm</a></li>
									<li><a href="hotels.html">Khách sạn</a></li>
								</ul>
							</div>

							<div class="col">
								<ul>
									<li><a href="#">Tư vấn</a></li>
									<li><a href="index.html#cost">Giá</a></li>
									<li><a href="#">Đặt lịch</a></li>
									<li><a href="https://uet.vnu.edu.vn/">Liên hệ</a></li>
								</ul>
							</div>										
						</div>							
					</div>
				</div>

				<!-- đăng ký email -->
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Thông tin</h6>
						<p>
							Đăng ký thư điện tử để nhận thông tin mới nhất từ chúng tôi.									
						</p>								
						<div id="mc_embed_signup">
							<form target="_blank" action="" method="get" class="subscription relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Email " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email '" required="" type="email">
									<button class="btn bb-btn"><span class="lnr lnr-location"></span></button>		
								</div>									
								<div class="mt-10 info"></div>
							</form>
						</div>
					</div>
				</div>

				<!-- khám phá -->
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Khám phá</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="img/i1.jpg" alt=""></li>
							<li><img src="img/i2.jpg" alt=""></li>
							<li><img src="img/i3.jpg" alt=""></li>
							<li><img src="img/i4.jpg" alt=""></li>
							<li><img src="img/i5.jpg" alt=""></li>
							<li><img src="img/i6.jpg" alt=""></li>
							<li><img src="img/i7.jpg" alt=""></li>
							<li><img src="img/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>						
			</div>

			<!-- liên kết -->
			<div class="row footer-bottom d-flex justify-content-between align-items-center">
				<p class="col-lg-8 col-sm-12 footer-text m-0">Copyright &copy; <script>document.write(new Date().getFullYear());</script> | Design by <a href="#" target="_blank">UETer Team</a></p>

				<!-- facebook - twitter -->
				<div class="col-lg-4 col-sm-12 footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer -->	


	<!-- JavaScript ------------------------------------------------------------------------------------------->
	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>				
	<script src="js/jquery-ui.js"></script>					
	<script src="js/easing.min.js"></script>			
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>	
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>						
	<script src="js/jquery.nice-select.min.js"></script>					
	<script src="js/owl.carousel.min.js"></script>							
	<script src="js/mail-script.js"></script>	
	<script src="js/main.js"></script>
	<!-- JavaScript ------------------------------------------------------------------------------------------->
</body>
</html>