<!doctype html>
<html class="no-js" lang="en">
<?php
require '../../connected.php';
?>


<?php

$id = $_GET['id'];


if ($id) {
	$_data = $db->getDataWithCondition('hang_hoa', 'ma_loai', $id);
	$db->num_rows();
	if ($db->num_rows()) {
		$count_items = $db->num_rows();
	}
} else {
	echo "<script>window.location.href = './index.php' </script>";
}

?>

<!-- Mirrored from live.hasthemes.com/html/13/zyra-preview/zyra/product-simple-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Oct 2020 03:58:40 GMT -->

<head>
	<meta charset="utf-8">

	<!--====== Title ======-->
	<title>Zyra – Clean, Minimal HTML Template</title>

	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--====== Favicon Icon ======-->
	<link rel="shortcut icon" href="<?= $ROOT_URL ?>/assets/images/favicon.png" type="image/png">


	<link rel="stylesheet" href="<?= $ROOT_URL ?>/assets/css/vendor/plugins.min.css">
	<link rel="stylesheet" href="<?= $ROOT_URL ?>/assets/css/style.min.css">

</head>

<body>


	<!--====== preloader Start ======-->

	<div class="preloader">
		<div class="spinner">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>

	<!--====== preloader Ends ======-->

	<!--====== Header Start ======-->

	<header class="header-area">

		<div class="header-navbar">
			<div class="container-fluid custom-container">
				<div class="header-wrapper d-flex justify-content-between align-items-center">

					<div class="header-logo">
						<a href="index.html">
							<img src="<?= $ROOT_URL ?>/assets/images/logo-black.png" alt="Logo">
						</a>
					</div>

					<div class="header-menu site-nav d-none d-lg-block">
						<ul class="main-menu">
							<li class="static active">
								<a href="#">Demo</a>
								<ul class="sub-menu sub-mega-menu flex-wrap">
									<li>
										<a class="menu-title" href="#">Column #1</a>
										<ul class="sub-mega-item">
											<li><a href="index.html">Home 01</a></li>
											<li><a href="index-2.html">Home 02</a></li>
											<li><a href="index-3.html">Home 03</a></li>
											<li><a href="index-4.html">Home 04</a></li>
										</ul>
									</li>
									<li>
										<a class="menu-title" href="#">Column #2</a>
										<ul class="sub-mega-item">
											<li><a href="index-5.html">Home 05</a></li>
											<li><a href="index-6.html">Home 06</a></li>
											<li><a href="index-7.html">Home 07</a></li>
											<li><a href="index-8.html">Home 08</a></li>
										</ul>
									</li>
									<li>
										<a class="menu-title" href="#">Column #3</a>
										<ul class="sub-mega-item">
											<li><a href="index-9.html">Home 09</a></li>
											<li><a href="index-10.html">Home 10</a></li>
											<li><a href="index-11.html">Home 11</a></li>
											<li><a href="index-12.html">Home 12</a></li>
										</ul>
									</li>
									<li>
										<a class="menu-title" href="#">Column #4</a>
										<ul class="sub-mega-item">
											<li><a href="index-13.html">Home 13</a></li>
											<li><a href="index-14.html">Home 14</a></li>
											<li><a href="index-15.html">Home 15</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="static">
								<a href="#">Shop</a>
								<ul class="sub-menu sub-mega-menu flex-wrap">
									<li>
										<a class="menu-title" href="#">Shop Page</a>
										<ul class="sub-mega-item">
											<li><a href="shop-sidebar.html">Shop Sidebar</a></li>
											<li><a href="shop-metro.html">Shop Metro</a></li>
											<li><a href="shop-masonry.html">Shop Masonry</a></li>
											<li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
											<li><a href="lookbook.html">Look Book</a></li>
											<li><a href="collections.html">Collections</a></li>
										</ul>
									</li>
									<li>
										<a class="menu-title" href="#">Product Page</a>
										<ul class="sub-mega-item">
											<li><a href="product-simple-01.html">Product Simple 01</a></li>
											<li><a href="product-simple-02.html">Product Simple 02</a></li>
											<li><a href="product-simple-03.html">Product Simple 03</a></li>
											<li><a href="product-simple-04.html">Product Simple 04</a></li>
											<li><a href="product-grouped.html">Product Grouped</a></li>
											<li><a href="product-affiliate.html">Product Affiliate</a></li>
										</ul>
									</li>
									<li>
										<a class="menu-title" href="#">Other Page</a>
										<ul class="sub-mega-item">
											<li><a href="my-account.html">My Account</a></li>
											<li><a href="checkout.html">Checkout</a></li>
											<li><a href="cart.html">Shopping Cart</a></li>
											<li><a href="order-tracking.html">Order Tracking</a></li>
										</ul>
									</li>
									<li>
										<a class="menu-image" href="shop-sidebar.html">
											<img src="<?= $ROOT_URL ?>/assets/images/menu.jpg" alt="Menu">
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">Page</a>
								<ul class="sub-menu">
									<li>
										<a href="#">About Us <i class="fal fa-chevron-right"></i></a>
										<ul class="sub-menu">
											<li><a href="about-01.html">About US 01</a></li>
											<li><a href="about-02.html">About US 02</a></li>
										</ul>
									</li>
									<li><a href="our-services.html">Our Service</a></li>
									<li><a href="contact.html">Contact Us</a></li>
									<li><a href="faq.html">FAQs</a></li>
									<li><a href="login.html">Login</a></li>
									<li><a href="register.html">Register</a></li>
									<li><a href="coming-soon.html">Coming Soon</a></li>
								</ul>
							</li>
							<li><a href="lookbook.html">Look Book</a> <span>Hot</span></li>
							<li>
								<a href="#">Blog</a>
								<ul class="sub-menu">
									<li>
										<a href="#">Blog Layout <i class="fal fa-chevron-right"></i></a>
										<ul class="sub-menu">
											<li><a href="blog.html">Blog</a></li>
											<li><a href="blog-list.html">Blog List</a></li>
											<li><a href="blog-sidebar.html">Blog Sidebar</a></li>
											<li><a href="blog-grid-01.html">Blog Grid 01</a></li>
											<li><a href="blog-grid-02.html">Blog Grid 02</a></li>
											<li><a href="blog-masonry.html">Blog Masonry</a></li>
										</ul>
									</li>
									<li><a href="blog-details.html">Blog Details</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>

					<div class="header-meta">
						<ul class="meta">
							<li><a class="cart-toggle" href="javascript:void(0)"><i class="far fa-Shopping-cart"></i><span>3</span></a></li>
							<li><a class="search-toggle" href="javascript:void(0)"><i class="far fa-search"></i></a></li>
							<li><a class="sidebar-toggle" href="javascript:void(0)"><i class="fal fa-bars"></i></a></li>
						</ul>
					</div>

				</div>
			</div>

			<div id="dl-menu" class="dl-menuwrapper d-lg-none">
				<button class="dl-trigger"></button>

				<ul class="dl-menu">
					<li>
						<a href="#">Demo</a>
						<ul class="dl-submenu">
							<li>
								<a href="#">Column #1</a>
								<ul class="dl-submenu">
									<li><a href="index.html">Home 01</a></li>
									<li><a href="index-2.html">Home 02</a></li>
									<li><a href="index-3.html">Home 03</a></li>
									<li><a href="index-4.html">Home 04</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Column #2</a>
								<ul class="dl-submenu">
									<li><a href="index-5.html">Home 05</a></li>
									<li><a href="index-6.html">Home 06</a></li>
									<li><a href="index-7.html">Home 07</a></li>
									<li><a href="index-8.html">Home 08</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Column #3</a>
								<ul class="dl-submenu">
									<li><a href="index-9.html">Home 09</a></li>
									<li><a href="index-10.html">Home 10</a></li>
									<li><a href="index-11.html">Home 11</a></li>
									<li><a href="index-12.html">Home 12</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Column #4</a>
								<ul class="dl-submenu">
									<li><a href="index-13.html">Home 13</a></li>
									<li><a href="index-14.html">Home 14</a></li>
									<li><a href="index-15.html">Home 15</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Shop</a>
						<ul class="dl-submenu">
							<li>
								<a href="#">Shop Pages</a>
								<ul class="dl-submenu">
									<li><a href="shop-sidebar.html">Shop Sidebar</a></li>
									<li><a href="shop-metro.html">Shop Metro</a></li>
									<li><a href="shop-masonry.html">Shop Masonry</a></li>
									<li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
									<li><a href="lookbook.html">Look Book</a></li>
									<li><a href="collections.html">Collections</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Product Pages</a>
								<ul class="dl-submenu">
									<li><a href="product-simple-01.html">Product Simple 01</a></li>
									<li><a href="product-simple-02.html">Product Simple 02</a></li>
									<li><a href="product-simple-03.html">Product Simple 03</a></li>
									<li><a href="product-simple-04.html">Product Simple 04</a></li>
									<li><a href="product-grouped.html">Product Grouped</a></li>
									<li><a href="product-affiliate.html">Product Affiliate</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Other Pages</a>
								<ul class="dl-submenu">
									<li><a href="my-account.html">My Account</a></li>
									<li><a href="checkout.html">Checkout</a></li>
									<li><a href="cart.html">Shopping Cart</a></li>
									<li><a href="order-tracking.html">Order Tracking</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Page</a>
						<ul class="dl-submenu">
							<li>
								<a href="#">About Us</a>
								<ul class="dl-submenu">
									<li><a href="about-01.html">About US 01</a></li>
									<li><a href="about-02.html">About US 02</a></li>
								</ul>
							</li>
							<li><a href="our-services.html">Our Service</a></li>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="faq.html">FAQs</a></li>
							<li><a href="login.html">Login</a></li>
							<li><a href="register.html">Register</a></li>
							<li><a href="coming-soon.html">Coming Soon</a></li>
						</ul>
					</li>
					<li><a href="lookbook.html">Look Book</a></li>
					<li>
						<a href="#">Blog</a>
						<ul class="dl-submenu">
							<li>
								<a href="#">Blog Layout</a>
								<ul class="dl-submenu">
									<li><a href="blog.html">Blog</a></li>
									<li><a href="blog-list.html">Blog List</a></li>
									<li><a href="blog-sidebar.html">Blog Sidebar</a></li>
									<li><a href="blog-grid-01.html">Blog Grid 01</a></li>
									<li><a href="blog-grid-02.html">Blog Grid 02</a></li>
									<li><a href="blog-masonry.html">Blog Masonry</a></li>
								</ul>
							</li>
							<li><a href="blog-details.html">Blog Details</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
		</div>

	</header>

	<!--====== Header Ends ======-->

	<!--====== Search Start ======-->

	<div class="search-wrapper">
		<div class="search-box">
			<a href="javascript:void(0)" class="search-close"><i class="fal fa-times"></i></a>
			<div class="search-form">
				<label>Start typing and press Enter to search</label>
				<div class="search-input">
					<form action="#">
						<input type="text" placeholder="Search entire store…">
						<button><i class="far fa-search"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!--====== Search Ends ======-->

	<!--====== Off Canvas Cart Start ======-->

	<div class="off-canvas-cart-wrapper">
		<div class="off-canvas-cart-box">
			<a href="javascript:void(0)" class="cart-close"><i class="fal fa-times"></i></a>
			<div class="off-canvas-cart-content">
				<div class="cart-title">
					<h5 class="title">Shopping Cart</h5>
				</div>
				<div class="cart-product-widget">
					<ul>
						<li>
							<div class="cart-product d-flex">
								<div class="cart-product-image">
									<a href="product-simple-01.html"><img src="assets/images/cart/product-1.jpg" alt="product"></a>
								</div>
								<div class="cart-product-content media-body">
									<h6 class="title"><a href="product-simple-01.html">Biker Jacket</a></h6>
									<span class="price">1x <span>£150.00</span></span>
								</div>
								<a href="#" class="product-cancel"><i class="fal fa-times"></i></a>
							</div>
						</li>
						<li>
							<div class="cart-product d-flex">
								<div class="cart-product-image">
									<a href="product-simple-01.html"><img src="<?= $ROOT_URL ?>/assets/images/cart/product-2.jpg" alt="product"></a>
								</div>
								<div class="cart-product-content media-body">
									<h6 class="title"><a href="product-simple-01.html">Biker Jacket</a></h6>
									<span class="price">1x <span>£150.00</span></span>
								</div>
								<a href="#" class="product-cancel"><i class="fal fa-times"></i></a>
							</div>
						</li>
						<li>
							<div class="cart-product d-flex">
								<div class="cart-product-image">
									<a href="product-simple-01.html"><img src="<?= $ROOT_URL ?>/assets/images/cart/product-3.jpg" alt="product"></a>
								</div>
								<div class="cart-product-content media-body">
									<h6 class="title"><a href="product-simple-01.html">Biker Jacket</a></h6>
									<span class="price">1x <span>£150.00</span></span>
								</div>
								<a href="#" class="product-cancel"><i class="fal fa-times"></i></a>
							</div>
						</li>
					</ul>
					<div class="cart-product-total">
						<p class="value">Subtotal</p>
						<p class="price">£600.00</p>
					</div>
					<div class="cart-product-btn">
						<a href="#" class="main-btn btn-block">View cart</a>
						<a href="#" class="main-btn btn-block">Checkout</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--====== Off Canvas Cart Ends ======-->

	<!--====== Off Canvas Sidebar Start ======-->

	<div class="off-canvas-sidebar">
		<div class="off-canvas-sidebar-wrapper">
			<a class="sidebar-close" href="javascript:void(0)"><i class="fal fa-times"></i></a>
			<div class="off-canvas-sidebar-box">
				<a class="logo" href="index.html">
					<img src="<?= $ROOT_URL ?>/assets/images/logo-black.png" alt="Logo">
				</a>
				<p class="text">Curabitur placerat urna augue, id luctus sem imperdiet id. Nunc congue ac libero ut lacinia. In ultrices elementum ipsum, in tempus enim accumsan..</p>
				<ul class="sidebar-social">
					<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#"><i class="fab fa-instagram"></i></a></li>
					<li><a href="#"><i class="fab fa-youtube"></i></a></li>
				</ul>
				<div class="sidebar-image">
					<img src="<?= $ROOT_URL ?>/assets/images/aside-image.jpg" alt="">
				</div>
				<ul class="sidebar-info">
					<li>
						<div class="single-info">
							<div class="info-icon">
								<i class="fas fa-phone"></i>
							</div>
							<div class="info-content">
								<p><a href="tel:61292515600">+612 9251 5600</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="single-info">
							<div class="info-icon">
								<i class="fas fa-envelope"></i>
							</div>
							<div class="info-content">
								<p><a href="mailto://info@hasthemes.com">info@hasthemes.com</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="single-info">
							<div class="info-icon">
								<i class="fas fa-map-marker-alt"></i>
							</div>
							<div class="info-content">
								<p>PO Box 16122 Collins Street West Victoria 8007 Australia</p>
							</div>
						</div>
					</li>
				</ul>
				<p class="copyright">&copy; Copyright 2020 Created <a href="https://hasthemes.com/">HasThemes</a></p>
			</div>
		</div>
	</div>

	<!--====== Off Canvas Sidebar Ends ======-->

	<!--====== Page Banner Start ======-->

	<section class="page-banner bg_cover" style="background-image: url(assets/images/page-banner.jpg);">
		<div class="container">
			<div class="page-banner-content text-center">
				<h2 class="title">Product simple</h2>
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					<li class="breadcrumb-item"><a href="shop-sidebar.html">Shop</a></li>
					<li class="breadcrumb-item active">Oversized Check Dress</li>
				</ol>
			</div>
		</div>
	</section>

	<!--====== Page Banner Ends ======-->

	<!--====== Product Simple Start ======-->

	<section class="product-simple-area pt-20">
		<div class="container">
			<div class="row">

				<?php
				foreach ($_data as $value) {
				?>

					<div class="col-lg-6">
						<div class="product-simple-image flex-wrap mt-50">
							<button class="product-gallery-popup" data-hint="Click to enlarge" data-images='[
                            {"src": "assets/images/product/product-37.jpg", "w": 600, "h": 743},
                            {"src": "assets/images/product/product-38.jpg", "w": 600, "h": 743},
                            {"src": "assets/images/product/product-25.jpg", "w": 600, "h": 743},
                            {"src": "assets/images/product/product-26.jpg", "w": 600, "h": 743}
                        ]'><i class="far fa-search-plus"></i></button>

							<div class="product-simple-preview-image">
								<img class="product-zoom" src="<?= $ROOT_URL ?>/assets/images/product/<?php echo $value['hinh'] ?>" alt="">
							</div>
							<div id="gallery_01" class="product-simple-thumb-image">
								<div class="single-product-thumb">
									<a class="active" href="#" data-image="assets/images/product/product-37.jpg">
										<img src="<?= $ROOT_URL ?>/assets/images/product/product-37.jpg" alt="">
									</a>
								</div>
								<div class="single-product-thumb">
									<a href="#" data-image="assets/images/product/product-38.jpg">
										<img src="<?= $ROOT_URL ?>/assets/images/product/product-38.jpg" alt="">
									</a>
								</div>
								<div class="single-product-thumb">
									<a href="#" data-image="assets/images/product/product-25.jpg">
										<img src="<?= $ROOT_URL ?>/assets/images/product/product-25.jpg" alt="">
									</a>
								</div>
								<div class="single-product-thumb">
									<a href="#" data-image="assets/images/product/product-26.jpg">
										<img src="<?= $ROOT_URL ?>/assets/images/product/product-26.jpg" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="product-simple-details mt-50">
							<h4 class="title"><?php echo $value['ten_hh'] ?></h4>
							<p class="sku-id">

								<?php
								$status = $value['tinh_trang'];
								switch ($status) {
									case 2:
										echo "Còn hàng!";
										break;
									case 1:
										echo "Hết hàng!";
										break;
									default:
										break;
								}

								?>

								</span></p>

							<p class="review">
								<i class="fas fa-star review-on"></i>
								<i class="fas fa-star review-on"></i>
								<i class="fas fa-star review-on"></i>
								<i class="fas fa-star review-on"></i>
								<i class="fas fa-star review-on"></i>
								<a href="#">(3 customer reviews)</a>
							</p>

							<div class="product-price">
								<span class="price">

									<?php
									echo $value['don_gia'] . '$';
									?>
								</span>
							</div>
							<div class="product-quantity-cart-wishlist-compare flex-wrap">
								<form action="#">
									<div class="product-quantity d-flex">
										<button type="button" class="sub"><i class="fal fa-minus"></i></button>
										<input type="text" value="1" />
										<button type="button" class="add"><i class="fal fa-plus"></i></button>
									</div>
									<div class="product-cart">
										<button class="main-btn">Add to Cart</button>
									</div>
								</form>
								<a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" class="product-wishlist"><i class="far fa-heart"></i></a>
								<a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Compare" class="product-compare"><i class="far fa-repeat-alt"></i></a>
							</div>

							<div class="product-description">
								<p>
									<?php
									echo $value['mo_ta'];

									?>

								</p>

								<ul class="description-list">
									<li>Cotton-blend fabric</li>
									<li>Check-pattern</li>
									<li>Removable belt at the waist</li>
									<li>High waist</li>
								</ul>
							</div>

							<div class="product-meta">
								<p>Categories: <a href="#">Metro,</a> <a href="#">Women</a></p>
								<p>Tags: <a href="#">Dress,</a> <a href="#">Fashion</a> <a href="#">Furniture,</a> <a href="#">Lookbook</a></p>
							</div>

							<div class="product-share">
								<ul class="social">
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
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

	<!--====== Product Simple Ends ======-->

	<!--====== Product Description & Review Start ======-->

	<section class="product-description-review pt-150">
		<div class="container">
			<div class="product-simple-tab-menu">
				<ul class="nav justify-content-center">
					<li><a class="active" data-toggle="tab" href="#description">Description</a></li>
					<li><a data-toggle="tab" href="#review">Review (3)</a></li>
				</ul>
			</div>
			<div class="tab-content pt-30">
				<div class="tab-pane fade show active" id="description">
					<div class="product-description">
						<div class="row">
							<div class="col-md-6">
								<div class="description">
									<p>Donec laoreet bibendum rutrum. Nulla facilisi. Proin in lacinia dolor. Cras arcu lacus, pulvinar at molestie luctus, blandit at libero. Vivamus semper congue mauris, et lobortis mauris ultrices nec. Nulla et sodales leo. Praesent facilisis elit nec ornare feugiat <br> <br> Donec eu neque blandit, vestibulum felis accumsan, ullamcorper ipsum. Nunc rhoncus, augue interdum sagittis dignissim, nibh tortor sodales ex, pretium maximus libero turpis varius purus. Pellentesque condimentum, lacus vel accumsan consequat, velit augue</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="image text-md-right">
									<img src="<?= $ROOT_URL ?>/assets/images/pd-1.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="product-description">
						<div class="row flex-md-row-reverse">
							<div class="col-md-6">
								<div class="description">
									<p>Donec laoreet bibendum rutrum. Nulla facilisi. Proin in lacinia dolor. Cras arcu lacus, pulvinar at molestie luctus, blandit at libero. Vivamus semper congue mauris, et lobortis mauris ultrices nec. Nulla et sodales leo. Praesent facilisis elit nec ornare feugiat <br> <br> Donec eu neque blandit, vestibulum felis accumsan, ullamcorper ipsum. Nunc rhoncus, augue interdum sagittis dignissim, nibh tortor sodales ex, pretium maximus libero turpis varius purus. Pellentesque condimentum, lacus vel accumsan consequat, velit augue</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="image text-md-left">
									<img src="<?= $ROOT_URL ?>/assets/images/pd-2.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="review">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="product-review pt-20">
								<div class="review-comment">
									<ul class="comment">
										<li>
											<div class="single-review-comment">
												<div class="review-author">
													<img src="<?= $ROOT_URL ?>/assets/images/auhtor-1.jpg" alt="">
												</div>
												<div class="review-content">
													<p>“Proin bibendum dolor vitae neque ornare, vel mollis est venenatis. Orci varius natoque penatibus et magnis dis parturient montes, nascet”</p>
													<div class="review-name-rating">
														<h6 class="review-name">Rosie Silva</h6>
														<ul class="review-rating">
															<li class="rating-on"><i class="fas fa-star"></i></li>
															<li class="rating-on"><i class="fas fa-star"></i></li>
															<li class="rating-on"><i class="fas fa-star"></i></li>
															<li class="rating-on"><i class="fas fa-star"></i></li>
															<li class="rating-on"><i class="fas fa-star"></i></li>
														</ul>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="single-review-comment">
												<div class="review-author">
													<img src="<?= $ROOT_URL ?>/assets/images/auhtor-2.png" alt="">
												</div>
												<div class="review-content">
													<p>“Proin bibendum dolor vitae neque ornare, vel mollis est venenatis. Orci varius natoque penatibus et magnis dis parturient montes, nascet”</p>
													<div class="review-name-rating">
														<h6 class="review-name">Rosie Silva</h6>
														<ul class="review-rating">
															<li class="rating-on"><i class="fas fa-star"></i></li>
															<li class="rating-on"><i class="fas fa-star"></i></li>
															<li class="rating-on"><i class="fas fa-star"></i></li>
															<li class="rating-on"><i class="fas fa-star"></i></li>
															<li class="rating-on"><i class="fas fa-star"></i></li>
														</ul>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="single-review-comment">
												<div class="review-author">
													<img src="assets/images/auhtor-3.png" alt="">
												</div>
												<div class="review-content">
													<p>“Proin bibendum dolor vitae neque ornare, vel mollis est venenatis. Orci varius natoque penatibus et magnis dis parturient montes, nascet”</p>
													<div class="review-name-rating">
														<h6 class="review-name">Rosie Silva</h6>
														<ul class="review-rating">
															<li class="rating-on"><i class="fas fa-star"></i></li>
															<li class="rating-on"><i class="fas fa-star"></i></li>
															<li class="rating-on"><i class="fas fa-star"></i></li>
															<li class="rating-on"><i class="fas fa-star"></i></li>
															<li class="rating-on"><i class="fas fa-star"></i></li>
														</ul>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="review-form mt-45">
									<h2 class="form-title">Add a review </h2>

									<form action="#">
										<div class="rating-star">
											<a href="javascript:void(0)" class="star-1"></a>
											<a href="javascript:void(0)" class="star-2"></a>
											<a href="javascript:void(0)" class="star-3"></a>
											<a href="javascript:void(0)" class="star-4"></a>
											<a href="javascript:void(0)" class="star-5"></a>
										</div>
										<div class="review-textarea">
											<label>Your Review *</label>
											<textarea></textarea>
										</div>
										<div class="review-btn">
											<a href="#" class="main-btn">Submit</a>
										</div>
										<div class="review-checkbok">
											<input type="checkbox" id="checkbox">
											<label for="checkbox"><span></span> NOTIFY ME OF NEW POSTS BY EMAIL.</label>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--====== Product Description & Review Ends ======-->

	<!--====== Related Products Start ======-->

	<section class="product-area pt-160 pb-145">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="section-title text-center">
						<h2 class="title">Related Products</h2>
					</div>
				</div>
			</div>
			<div class="row product-active">
				<div class="col-md-3">
					<div class="single-product mt-50">
						<div class="product-image">
							<div class="image">
								<img class="product-1" src="assets/images/product/product-7.jpg" alt="product">
								<img class="product-2" src="assets/images/product/product-8.jpg" alt="product">
								<a class="link" href="product-simple-01.html"></a>
							</div>
							<ul class="product-meta text-center">
								<li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
								<li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
								<li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
								<li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
							</ul>
							<span class="discount">40%</span>
						</div>
						<div class="product-content d-flex justify-content-between">
							<div class="product-title">
								<h4 class="title"><a href="product-simple-01.html">Basic Contrasting T-Shirt</a></h4>
							</div>
							<div class="product-price">
								<span class="regular-price">£250.00</span>
								<span class="sale-price">£200.00</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-product mt-50">
						<div class="product-image">
							<div class="image">
								<img class="product-1" src="assets/images/product/product-9.jpg" alt="product">
								<img class="product-2" src="assets/images/product/product-10.jpg" alt="product">
								<a class="link" href="product-simple-01.html"></a>
							</div>
							<ul class="product-meta text-center">
								<li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
								<li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
								<li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
								<li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
							</ul>
						</div>
						<div class="product-content d-flex justify-content-between">
							<div class="product-title">
								<h4 class="title"><a href="product-simple-01.html">Biker Jacket</a></h4>
							</div>
							<div class="product-price">
								<span class="price">£250.00</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-product mt-50">
						<div class="product-image">
							<div class="image">
								<img class="product-1" src="assets/images/product/product-21.jpg" alt="product">
								<img class="product-2" src="assets/images/product/product-22.jpg" alt="product">
								<a class="link" href="product-simple-01.html"></a>
							</div>
							<ul class="product-meta text-center">
								<li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
								<li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
								<li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
								<li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
							</ul>
						</div>
						<div class="product-content d-flex justify-content-between">
							<div class="product-title">
								<h4 class="title"><a href="product-simple-01.html">Oversized Check Dress</a></h4>
							</div>
							<div class="product-price">
								<span class="price">£150.00</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-product mt-50">
						<div class="product-image">
							<div class="image">
								<img class="product-1" src="assets/images/product/product-23.jpg" alt="product">
								<img class="product-2" src="assets/images/product/product-24.jpg" alt="product">
								<a class="link" href="product-simple-01.html"></a>
							</div>
							<ul class="product-meta text-center">
								<li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
								<li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
								<li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
								<li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
							</ul>
						</div>
						<div class="product-content d-flex justify-content-between">
							<div class="product-title">
								<h4 class="title"><a href="product-simple-01.html">Polyamide Dress With Long Sleeves</a></h4>
							</div>
							<div class="product-price">
								<span class="price">£150.00</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--====== Related Products Ends ======-->

	<!--====== Footer Start ======-->

	<footer class="footer-area pt-50 pb-55">
		<div class="footer-widget">
			<div class="container footer-container">
				<div class="row">
					<div class="col-lg-3">
						<div class="footer-logo-copyright mt-30">
							<a href="index.html">
								<img src="assets/images/logo-white.png" alt="Logo">
							</a>
							<p>&copy; Copyright 2020 <a href="https://hasthemes.com/">HasThemes</a></p>
						</div>
						<div class="footer-social mt-30">
							<ul class="social">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="footer-link-wrapper flex-wrap">
							<div class="footer-link mt-30">
								<h5 class="footer-title">Useful Link</h5>
								<ul class="link">
									<li><a href="#">Help & Contact</a></li>
									<li><a href="#">Returns & Refunds</a></li>
									<li><a href="#">Online Stores</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
							<div class="footer-link mt-30">
								<h5 class="footer-title">Company</h5>
								<ul class="link">
									<li><a href="about-01.html">About Us</a></li>
									<li><a href="our-services.html">Our Service</a></li>
									<li><a href="#">Portfolio</a></li>
								</ul>
							</div>
							<div class="footer-link mt-30">
								<h5 class="footer-title">Profile</h5>
								<ul class="link">
									<li><a href="my-account.html">My Account</a></li>
									<li><a href="checkout.html">Checkout</a></li>
									<li><a href="order-tracking.html">order Tracking</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="footer-map mt-30">
							<div id="contact-map"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!--====== Footer Ends ======-->

	<!--====== BACK TOP TOP PART START ======-->

	<a href="#" class="back-to-top"><i class="fal fa-chevron-up"></i></a>

	<!--====== BACK TOP TOP PART ENDS ======-->

	<!--====== Product Quick View Start ======-->

	<div class="modal fade" id="productQuick">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fal fa-times"></i></button>
				</div>

				<div class="product-quick-view">
					<div class="row">
						<div class="col-md-6">
							<div class="quick-view-image">
								<div class="quick-view-thumb">
									<div class="quick-thumb-active">
										<div class="single-quick-thumb">
											<img src="assets/images/product/product-37.jpg" alt="">
										</div>
										<div class="single-quick-thumb">
											<img src="assets/images/product/product-38.jpg" alt="">
										</div>
										<div class="single-quick-thumb">
											<img src="assets/images/product/product-27.jpg" alt="">
										</div>
										<div class="single-quick-thumb">
											<img src="assets/images/product/product-28.jpg" alt="">
										</div>
									</div>
								</div>
								<div class="quick-view-preview">
									<div class="quick-preview-active">
										<div class="single-quick-preview">
											<img src="assets/images/product/product-37.jpg" alt="">
										</div>
										<div class="single-quick-preview">
											<img src="assets/images/product/product-38.jpg" alt="">
										</div>
										<div class="single-quick-preview">
											<img src="assets/images/product/product-27.jpg" alt="">
										</div>
										<div class="single-quick-preview">
											<img src="assets/images/product/product-28.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="quick-view-content">
								<h4 class="title">Oversized Check Dress</h4>
								<span class="sku-id">REF. 1104693 - TOMY</span>

								<div class="quick-price">
									<span class="regular-price">£250.00</span>
									<span class="sale-price">£200.00</span>
								</div>
								<div class="quick-quantity-cart-wishlist-compare flex-wrap">
									<form action="#">
										<div class="quick-quantity d-flex">
											<button type="button" class="sub"><i class="fal fa-minus"></i></button>
											<input type="text" value="1" />
											<button type="button" class="add"><i class="fal fa-plus"></i></button>
										</div>
										<div class="quick-cart">
											<button class="main-btn">Add to Cart</button>
										</div>
									</form>
									<a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" class="quick-wishlist"><i class="fal fa-heart"></i></a>
									<a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Compare" class="quick-compare"><i class="fal fa-repeat-alt"></i></a>
								</div>
								<div class="quick-description">
									<p>Sed vitae eros a quam malesuada porttitor nec nec orci. Ut lacus augue, bibendum at tristique at, ornare eget quam. Donec volutpat ut nibh id sagittis. Morbi fringilla ac libero in consequat.</p>
								</div>
								<div class="quick-share">
									<ul class="social">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--====== Product Quick View Ends ======-->

	<!--====== Photo Swipe Start ======-->

	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="pswp__bg"></div>

		<div class="pswp__scroll-wrap">

			<div class="pswp__container">
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
			</div>

			<div class="pswp__ui pswp__ui--hidden">

				<div class="pswp__top-bar">

					<div class="pswp__counter"></div>

					<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

					<button class="pswp__button pswp__button--share" title="Share"></button>

					<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

					<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

					<div class="pswp__preloader">
						<div class="pswp__preloader__icn">
							<div class="pswp__preloader__cut">
								<div class="pswp__preloader__donut"></div>
							</div>
						</div>
					</div>
				</div>

				<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
					<div class="pswp__share-tooltip"></div>
				</div>

				<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
				</button>

				<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
				</button>

				<div class="pswp__caption">
					<div class="pswp__caption__center"></div>
				</div>

			</div>
		</div>
	</div>

	<!--====== Photo Swipe Ends ======-->

	<!--====== Overlay Start ======-->

	<div class="overlay"></div>

	<!--====== Overlay Ends ======-->




	<!--====== Jquery js ======-->
	<script src="<?= $ROOT_URL ?>/assets/js/vendor/jquery-3.5.1.min.js"></script>
	<script src="<?= $ROOT_URL ?>/assets/js/vendor/modernizr-3.7.1.min.js"></script>

	<!--====== Jquery js ======-->
	<script src="<?= $ROOT_URL ?>/assets/js/vendor/jquery-3.5.1.min.js"></script>
	<script src="<?= $ROOT_URL ?>/assets/js/vendor/modernizr-3.7.1.min.js"></script>

	<!--====== All Plugins js ======-->

	<script src="<?= $ROOT_URL ?>/assets/js/plugins/parallax.min.js"></script>


	<script src="<?= $ROOT_URL ?>/assets/js/plugins.min.js"></script>


	<!--====== Main Activation  js ======-->
	<script src="<?= $ROOT_URL ?>/assets/js/main.js"></script>

</body>

</html>