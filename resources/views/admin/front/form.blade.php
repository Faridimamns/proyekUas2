@extends('admin.layout.landingPage.appadmin')
@section('content')

<section class="unique-feature-area section-gap" id="unique">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="container card">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-60 col-lg-8">
                            <div class="title text-center">
                                <h1 class="pb-4">Pesan</h1>
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
                                            <input id="alamat_pemesan" name="alamat_pemesan" type="text" class="form-control" placeholder="Jl.XXX, No.XXX, No Rumah.XXX">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="no_hp" class="col-4 col-form-label">No. HP</label>
                                        <div class="col-8">
                                            <input id="no_hp" name="no_hp" type="tel" class="form-control" placeholder="0800 0000 0000">
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
                                            <input id="jumlah_pesanan" name="jumlah_pesanan" type="number" class="form-control" value="1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="deskripsi" class="col-4 col-form-label">Catatan</label>
                                        <div class="col-8">
                                            <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control" placeholder="Packing Kayu"></textarea>
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
                                        <div class="col-12 mt-5">
                                            <button name="submit" type="submit" class="btn btn-primary">Pesan Sekarang</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>





@endsection