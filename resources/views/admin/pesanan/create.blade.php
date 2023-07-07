@extends('admin.layout.adminPage.appadmin')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1 class="pb-4">Tambah Data Pesanan</h1>
<form action="{{url('pesanan/store')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
  <!-- <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
        <input id="tanggal" name="tanggal" type="text" class="form-control" >
    </div>
  </div> -->
  <div class="form-group row">
    <label for="nama_pemesan" class="col-4 col-form-label">Nama Pemesan</label> 
    <div class="col-8">
      <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control">
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
      <input id="email" name="email" type="text" class="form-control">
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