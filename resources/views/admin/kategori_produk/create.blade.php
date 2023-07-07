@extends ('admin.layout.adminPage.appadmin')
@section('content')

<h1>Tambah data kategori produk</h1>


<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Kategori Produk</h6>
  </div>
  <div class="card-body">
    <form action="{{ url('kategori_produk/store') }}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
          <input id="text1" name="nama" type="text" class="form-control">
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

@endsection