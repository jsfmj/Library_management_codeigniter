<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Cart</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/all.min.css');?>">
	<!-- bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
	<!-- owl carousel -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css');?>">
	<!-- magnific popup -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css');?>">
	<!-- animate css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css');?>">
	<!-- mean menu css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/meanmenu.min.css');?>">
	<!-- main style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">
	<!-- responsive -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css');?>">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="#">Home</a>
								</li>
								<li><a href="<?php echo base_url('index.php/welcome/notification');?>">Notifications</a></li>
								<li><a href="<?php echo base_url('index.php/welcome/shop')?>">Shop</a>
								<li><a href="<?php echo base_url('index.php/welcome/logout')?>">Logout</a></li>
								</li>
								<li>
									<div class="header-icons">
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<h1>Cart</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Author name</th>
									<th class="product-quantity">Quantity</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($cartItems as $cart) : ?>
								<tr class="table-body-row">
								<td class="product-remove"><a href="#" class="remove-product" data-book-id="<?= $cart['book_id']; ?>" data-book-name="<?= $cart['book_name']; ?>"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img style="width:50%; height:50%;" src="<?= $cart['book_image']; ?>" alt=""></td>
									<td class="product-name"><?= $cart['book_name']; ?></td>
									<td class="product-price"><?= $cart['book_author']; ?></td>
									<td class="product-total"><?= $cart['quantity']; ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
						<div class="col-lg-4">
					<div class="total-section">
						<div class="cart-buttons">
							<a data-book-id="<?= $cart['book_id']; ?>" data-book-name="<?= $cart['book_name']; ?>" href="#" id="req" class="boxed-btn black">Request</a>
						</div>
					</div>
				</div>
					</div>
				</div>

				
			</div>
		</div>
	</div>
	
          
	<!-- end cart -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>34/8, East Hukupara, Gifirtok, Sadan.</li>
							<li>support@fruitkha.com</li>
							<li>+00 111 222 3333</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="services.html">Shop</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.<br>
						Distributed By - <a href="https://themewagon.com/">Themewagon</a>
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	
 <!-- jquery -->
 <script src="<?php echo base_url('assets/js/jquery-1.11.3.min.js');?>"></script>
	<!-- bootstrap -->
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
	<!-- count down -->
	
	<script src="<?php echo base_url('assets/js/jquery.countdown.js');?>"></script>
	<!-- isotope -->
	
	<script src="<?php echo base_url('assets/js/jquery.isotope-3.0.6.min.js');?>"></script>
	<!-- waypoints -->
	
	<script src="<?php echo base_url('assets/js/waypoints.js');?>"></script>
	<!-- owl carousel -->
	
	<script src="<?php echo base_url('assets/js/owl.carousel.min.js');?>"></script>
	<!-- magnific popup -->
	<script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js');?>"></script>
	<!-- mean menu -->
	<script src="<?php echo base_url('assets/js/jquery.meanmenu.min.js');?>"></script>
	<!-- sticker js -->
	<script src="<?php echo base_url('assets/js/sticker.js');?>"></script>
	<!-- main js -->
	<script src="<?php echo base_url('assets/js/main.js');?>"></script>
	<script>
    $(document).ready(function () {
        $(".remove-product").on("click", function (e) {
            e.preventDefault();

            var bookId = $(this).data("book-id");
						var bookname = $(this).data("book-name");
						
					

            $.ajax({
                type: "POST",
                url: "<?= base_url() ?>index.php/Welcome/removeProduct",
                data: { bookId: bookId,
								bookname: bookname },
                dataType: 'json',
                success: function (response) {
                    if (response.status === 'success') {
                        $(e.target).closest("tr").remove();
                    } else {
                        alert('Error removing product: ' + response.message);
                    }
                },
                error: function (error) {
                    console.error("Error:", error);
                }
            });
        });
				$("#req").on("click", function (e) {
    e.preventDefault();

    var bookId = $(this).data("book-id");
    var bookname = $(this).data("book-name");
                
            

    $.ajax({
        type: "POST",
        url: "<?= base_url() ?>index.php/Welcome/sendRequest",
        data: { bookId: bookId,
               bookname: bookname},
        dataType: 'json',
        success: function (response) {
            if (response.status === 'success') {
            alert('request send!');
            } else {
                alert('Error removing product: ' + response.message);
            }
        },
        error: function (error) {
            console.error("Error:", error);
        }
    });
});
});
			
</script>

</body>
</html>