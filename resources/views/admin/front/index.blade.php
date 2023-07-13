@extends('admin.layout.landingPage.appadmin')
@section('content')

<!-- #header -->


<!-- start banner Area -->


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
			@foreach ($produk as $pr)
			<div class="col-lg-3 col-md-6" >
				<div class="single-unique-product">
					<img style="width: 8rem; height: 14rem;" class="img-fluid" src="{{$pr->image}}" alt="">

					<!-- <div class="container-fluid h-custom" style="width: 200px; height: 200px;">
						<div class="row d-flex justify-content-center align-items-center h-100">
							<div class="col-md-9 col-lg-6 col-xl-5">
								<img class="img-fluid" src="{{$pr->image}}" alt="">
							</div>
						</div>
					</div> -->

					<div class="desc">

						<h4  style="height: 3rem;">
							{{$pr->nama}}
						</h4>
						<h5>Deskripsi</h5>
						<p class="px-4"  style="height: 9rem;">
							{{$pr->deskripsi}}
						</p>

						<h6>Rp. {{$pr->harga_beli}}</h6>

						<a class="text-uppercase primary-btn" href="{{url('/jamku/pesanan')}}">Pesan</a>
					</div>
				</div>
			</div>
			@endforeach
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