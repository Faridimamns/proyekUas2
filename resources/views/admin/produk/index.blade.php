@extends('admin.layout.adminPage.appadmin')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">PRODUK</h1>
    <p class="mb-4"><a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <div class="card-header"><a href="{{url('produk/create')}}" class="btn btn-sm btn-primary">TAMBAH</a></div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>image</th>
                            <th>Harga Jual</th>
                            <th>Harga Beli</th>
                            <th>Stok</th>
                            <th>Minimal Stok</th>
                            <th>deskripsi</th>
                            <th>Kategori Produk</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>image</th>
                            <th>Harga Jual</th>
                            <th>Harga Beli</th>
                            <th>Stok</th>
                            <th>Minimal Stok</th>
                            <th>deskripsi</th>
                            <th>Kategori Produk</th>
                            <th>action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php $no = 1 ; @endphp
                        @foreach ($produk as $pr)


                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$pr->kode}}</td>
                            <td>{{$pr->nama}}</td>
                            <td>{{$pr->image}}</td>
                            <td>{{$pr->harga_jual}}</td>
                            <td>{{$pr->harga_beli}}</td>
                            <td>{{$pr->stok}}</td>
                            <td>{{$pr->min_stok}}</td>
                            <td>{{$pr->deskripsi}}</td>
                            <td>{{$pr->nama_kategori}}</td>
                            <td>
                                <a href="{{url('produk/edit/'.$pr->id)}}" class="btn btn-sm btn-outline-primary">Edit</a>

                                <a href="{{url('produk/delete/'.$pr->id)}}" class="btn btn-sm btn-outline-danger"
                                onclick="if(!confirm('Apakah Anda yakin ingin menghapus data produk?')) {return false}">Hapus</a>

                            </td>
                        </tr>
                        @php $no++ ; @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Content Row -->


</div>
<!-- /.container-fluid -->

</div>

<!-- End of Main Content -->

<!-- Footer -->

<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>

@endsection