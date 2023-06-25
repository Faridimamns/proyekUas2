@extends('admin.layout.landingPage.appadmin')
@section('content')

<!-- #header -->


	<!-- start banner Area -->
    
	<section class="banner-area"  id="home">
        
		<div class="container"> 
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-10">
					<h5 class="text-white text-uppercase">Rasakan Perubahan Pada Dirimu MUlai Dari Waktumu</h5>
					<h1>
						INGAT WAKTU INGAT TUHAN
					</h1>

					<a href="form_pesanan.php" class="primary-btn text-uppercase">Pesan Sekarang</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<section class="unique-feature-area section-gap" id="unique">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10 text-white">Fitur dan Kenyamanan di utamakan</h1>
						<p>Memenuhi kebutuhan waktumu setiap saat dengan segala kondisi.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="single-unique-product">
						<img class="img-fluid" src="img/u1.jpg" alt="">
						<div class="desc">
							<h4>
								Apple Watch White
							</h4>
							<h6>Rp. 1.000.000,-</h6>
							<a class="text-uppercase primary-btn" href="form_pesanan.php">Pesan</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-unique-product">
						<img width="165 rem" class="img-fluid" src="img/j2.jpg" alt="">
						<div class="desc">
							<h4>
								Gshock Dark Blue
							</h4>
							<h6>Rp. 125.000,-</h6>
							<a class="text-uppercase primary-btn" href="form_pesanan.php">Pesan</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-unique-product">
						<img class="img-fluid" src="img/u3.jpg" alt="">
						<div class="desc">
							<h4>
								Apple Watch Brown
							</h4>
							<h6>Rp. 1.200.000,-</h6>
							<a class="text-uppercase primary-btn" href="form_pesanan.php">Pesan</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-unique-product">
						<img width="165 rem" class="img-fluid" src="img/j4.jpg" alt="">
						<div class="desc">
							<h4>
								Q&Q Watch Black
							</h4>
							<h6>Rp. 200.000,-</h6>
							<a class="text-uppercase primary-btn" href="form_pesanan.php">Pesan</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- Start service Area -->
	<section class="service-area section-gap" id="service">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-md-8 pb-40 header-text">
					<h1>Kelebihan Dan Keunikan Produk</h1>
					<p>
						Toko terbaik dengan barang terbaik
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-service">
						<h4><span class="lnr lnr-user"></span>Bahan Baku Terbaik</h4>
						<p>
							Menggunakan Bahan dan Cara pembuatan yang di teliti ketat secara berkala. 
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-service">
						<h4><span class="lnr lnr-license"></span>Servis Professional</h4>
						<p>
							Garansi dan Servis oleh ahli Jam terkemuka di indonesia dan bisa di pertanggung jawabkan.
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-service">
						<h4><span class="lnr lnr-diamond"></span>Rekomendasi Berkelas</h4>
						<p>
							Sangat Rekomendasi bagi semua kalangan baik muda maupun dewasa untuk menggunakanya.
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End service Area -->


	<!-- End faq Area -->


@endsection