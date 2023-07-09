@extends('admin.layout.adminPage.appadmin')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">KATEGORI PRODUK</h1>
    <p class="mb-4"><a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <div class="card-header"><a href="{{url('kategori_produk/create')}}" class="btn btn-sm btn-primary">TAMBAH</a></div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Kategori Produk</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($kategori_produk as $kp)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$kp->nama}}</td>
                            <td>
                                <a href="{{ url('kategori_produk/edit/'.$kp->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{ url('kategori_produk/delete/'.$kp->id) }}" class="btn btn-sm btn-danger" onclick="if(!confirm('Apakah Anda yakin ingin menghapus data kategori?')) {return false}">Hapus</a>
                            </td>
                        </tr>
                        @php $no++; @endphp
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