@extends('admin.layout.landingPage.appadmin')
@section('content')

<section class="unique-feature-area section-gap" id="unique">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-5">
                <div class="title text-center">
                    <h1 class="mb-10 text-white">Pesanan
                    </h1>
                    <!-- </div>
            </div>
        </div> -->
                    <!-- <div class="col-lg-8 col-md-8"> -->
                    <!-- <h3 class="mb-30">Form Element</h3> -->
                    <form action="#" class="mt-10 mb-50">
                        <div class="mt-10">
                            <input type="text" name="first_name" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                            <input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                            <div class="form-select" id="default-select">
								<select>
								<option value=" 1">City</option>
                                <option value="1">Dhaka</option>
                                <option value="1">Dilli</option>
                                <option value="1">Newyork</option>
                                <option value="1">Islamabad</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                            <div class="form-select" id="default-select">
								<select>
								<option value=" 1">Country</option>
                                <option value="1">Bangladesh</option>
                                <option value="1">India</option>
                                <option value="1">England</option>
                                <option value="1">Srilanka</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-10">
                            <textarea class="single-textarea" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required></textarea>
                        </div>
                        <!-- For Gradient Border Use -->
                        <!-- <div class="mt-10">
										<div class="primary-input">
											<input id="primary-input" type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'">
											<label for="primary-input"></label>
										</div>
									</div> -->
                        <div class="mt-10">
                            <input type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'" required class="single-input-primary">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="first_name" placeholder="Accent color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Accent color'" required class="single-input-accent">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="first_name" placeholder="Secondary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Secondary color'" required class="single-input-secondary">
                        </div>
                    </form>
                </div>
                <!-- <h2 class="text-white">The Elements Page</h2>
                    <p class="text-white">It won’t be a bigger problem to find one video game lover in your <br> neighbor. Since the introduction of Virtual Game.</p> -->
            </div>
        </div>
    </div>
</section>


<h1 class="pb-4">Tambah Data Pesanan</h1>
<form action="{{url('jamku/store')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group row">
        <label for="nama_pemesan" class="col-4 col-form-label">Nama Pemesan</label>
        <div class="col-8">
            <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control" value=" {{ Auth::user()->name }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="alamat_pemesan" class="col-4 col-form-label">Alamat Pemesan</label>
        <div class="col-8">
            <input id="alamat_pemesan" name="alamat_pemesan" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="no_hp" class="col-4 col-form-label">No. HP</label>
        <div class="col-8">
            <input id="no_hp" name="no_hp" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-4 col-form-label">Email</label>
        <div class="col-8">
            <input id="email" name="email" type="text" class="form-control" value=" {{ Auth::user()->email }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label>
        <div class="col-8">
            <input id="jumlah_pesanan" name="jumlah_pesanan" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
        <div class="col-8">
            <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="produk_id" class="col-4 col-form-label">Nama Produk</label>
        <div class="col-8">
            <select id="produk_id" name="produk_id" class="custom-select">
                @foreach($produk as $d)
                <option value="{{$d->id}}">{{$d->nama}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>


@endsection