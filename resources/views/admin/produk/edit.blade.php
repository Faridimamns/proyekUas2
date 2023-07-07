@extends('admin.layout.adminPage.appadmin')
@section('content')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <h1>Edit Data Produk</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
        </div>
        <div class="card-body">
            <form action="{{ url('produk/update') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                @foreach ($produk as $pr)
                    <input type="hidden" name="id" value="{{ $pr->id }}">

                    <div class="form-group row">
                        <label for="text" class="col-4 col-form-label">Kode</label>
                        <div class="col-8">
                            <input id="text" name="kode" type="text" class="form-control"
                                value="{{ $pr->kode }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text1" class="col-4 col-form-label" value="{{ $pr->nama }}">Nama</label>
                        <div class="col-8">
                            <input id="text1" name="nama" type="text" class="form-control"
                                value="{{ $pr->nama }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text2" class="col-4 col-form-label" value="{{ $pr->harga_jual }}">Harga
                            Jual</label>
                        <div class="col-8">
                            <input id="text2" name="harga_jual" type="text" class="form-control"
                                value="{{ $pr->harga_jual }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text3" class="col-4 col-form-label" value="{{ $pr->harga_beli }}">Harga_beli</label>
                        <div class="col-8">
                            <input id="text3" name="harga_beli" type="text" class="form-control"
                                value="{{ $pr->harga_beli }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text4" class="col-4 col-form-label" value="{{ $pr->stok }}">Stok</label>
                        <div class="col-8">
                            <input id="text4" name="stok" type="text" class="form-control"
                                value="{{ $pr->stok }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text5" class="col-4 col-form-label" value="{{ $pr->min_stok }}">Minimal
                            Stok</label>
                        <div class="col-8">
                            <input id="text5" name="min_stok" type="text" class="form-control"
                                value="{{ $pr->min_stok }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="textarea" class="col-4 col-form-label" value="{{ $pr->deskripsi }}">Deskripsi</label>
                        <div class="col-8">
                            <textarea id="textarea" name="deskripsi" cols="40" rows="5" class="form-control">{{ $pr->deskripsi }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="select" class="col-4 col-form-label">Kategori Produk</label>
                        <div class="col-8">
                            <select id="select" name="kategori_produk_id" class="custom-select">
                                @foreach ($kategori_produk as $kp)
                                    @php $sl =($kp->id == $pr->kategori_produk_id) ? 'selected' : ''; @endphp
                                    <option value="{{ $kp->id }}" {{ $sl }}>{{ $kp->nama }}
                                    </option>
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
        </div>
    </div>
    @endforeach
@endsection
