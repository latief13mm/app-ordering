<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Salt Resosto F&B</title>
    <link href="/BahanStudy/css/bootstrap.min.css" rel="stylesheet">
    <link href="/BahanStudy/css/font-awesome.min.css" rel="stylesheet">
    <link href="/BahanStudy/css/prettyPhoto.css" rel="stylesheet">
    <link href="/BahanStudy/css/price-range.css" rel="stylesheet">
    <link href="/BahanStudy/css/animate.css" rel="stylesheet">
	<link href="/BahanStudy/css/main.css" rel="stylesheet">
	<link href="/BahanStudy/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="/BahanStudy/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/BahanStudy/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/BahanStudy/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/BahanStudy/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/BahanStudy/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<?php
		$id = Session::get('id_customer');
		?>
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="/"><img src="/BahanStudy/images/home/saltLogo.png" alt="" /></a>
						</div>
						
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href="/login"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Salt</span>-Resto F&B</h1>
									<h2>Ayam Bakar</h2>
									<p>Asyik lagi diskon nih, bisa hemat dompet buat anak kos-kosan </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="/BahanStudy/images/home/ayambakar.jpg" class="girl img-responsive" alt="" />
									<img src="/BahanStudy/images/home/Promo.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Salt</span>-Resto F&B</h1>
									<h2>Es Jeruk</h2>
									<p>Dahaga membara es jeruk pereda nya </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="/BahanStudy/images/home/esjeruk.jpg" class="girl img-responsive" alt="" />
									<img src="/BahanStudy/images/home/Promo.png"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Salt</span>-Resto F&B</h1>
									<h2>Ikan Lele</h2>
									<p>Makan ikan lele sore-sore, enaaak...!  </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="/BahanStudy/images/home/lele.jpg" class="girl img-responsive" alt="" />
									<img src="/BahanStudy/images/home/Promo.png" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				{{-- <div class="col-sm-3">
					<div class="left-sidebar">
						<div class="shipping text-center"><!--shipping-->
							<img src="/BahanStudy/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div> --}}
				
				<div class="col-sm-12 padding-centre">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Menu Salt Resto F&B</h2>
						@foreach($databarang as $brg)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="/data_file/{{  $brg->gambar }}" alt="" />
											<h2> Rp. {{ $brg->harga }} </h2>
											<p> {{ $brg->nama_produk }} </p>
											<?php if($id != null) { ?>
											<button data-toggle="modal" data-target="#myModal"  data-id="{{ $brg->id }}" class="btn btn-default add-to-cart jumlah"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											<?php }else{} ?>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2> Rp. {{ $brg->harga }} </h2>
												<p> {{ $brg->nama_produk }} </p>
												<?php if($id != null) { ?>
													<button data-toggle="modal" data-target="#myModal"  data-id="{{ $brg->id }}" class="btn btn-default add-to-cart jumlah"><i class="fa fa-shopping-cart"></i>Add to cart</button>
													<?php }else{} ?>
											</div>
										</div>
								</div>
								<div class="choose">
								</div>
							</div>
						</div>	
						@endforeach					
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	
	
	<footer id="footer"><!--Footer-->
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © Anak BackEnd Adrian&Latief Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	
	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
		<form action="/AddCart" method="post">
		{{ csrf_field() }}	
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Masukan Jumlah</h4>
			</div>
			<div class="modal-body">
			<input type="hidden" id="id_barang" class="id_barang" name="id_barang" value="3487">
			<div class="form-group">
				<label for="exampleInputEmail1">Jumlah Beli</label>
				<input type="text" class="form-control " id="jumlah" name="jumlah" placeholder="Jumlah Beli">
			</div>
			</div>
			<div class="modal-footer">
			<button type="submit" class="btn btn-default">Beli</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
		</form>
		</div>
	</div>

	</div>
  
    <script src="/BahanStudy/js/jquery.js"></script>
	<script src="/BahanStudy/js/bootstrap.min.js"></script>
	<script src="/BahanStudy/js/jquery.scrollUp.min.js"></script>
	<script src="/BahanStudy/js/price-range.js"></script>
    <script src="/BahanStudy/js/jquery.prettyPhoto.js"></script>
    <script src="/BahanStudy/js/main.js"></script> 
	<script type="text/javascript">
		$(".jumlah").click(function() {
		$(".id_barang").val($(this).attr('data-id'));
		});
	
		</script>

</body>
</html>