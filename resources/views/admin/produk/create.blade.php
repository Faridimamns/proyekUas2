@extends ('admin.layout.adminPage.appadmin')
@section ('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1>Tambah data produk</h1>

<form action="{{url('produk/store')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Kode</label>
        <div class="col-8">
            <input id="text" name="kode" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
            <input id="text1" name="nama" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Harga Jual</label>
        <div class="col-8">
            <input id="text2" name="harga_jual" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">Harga Beli</label>
        <div class="col-8">
            <input id="text3" name="harga_beli" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text4" class="col-4 col-form-label">Stok</label>
        <div class="col-8">
            <input id="text4" name="stok" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text5" class="col-4 col-form-label">Minimal Stok</label>
        <div class="col-8">
            <input id="text5" name="min_stok" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="textarea" class="col-4 col-form-label">Deskripsi</label>
        <div class="col-8">
            <textarea id="textarea" name="deskripsi" cols="40" rows="5" class="form-control"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="select" class="col-4 col-form-label">Kategori Produk</label>
        <div class="col-8">
            <select id="select" name="kategori_produk_id" class="custom-select">
                @foreach($kategori_produk as $kp)
                <option value="{{$kp->id}}">{{$kp->nama}}</option>
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
