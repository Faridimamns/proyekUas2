@extends('admin.layout.adminPage.appadmin')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">PESANAN</h1>
    <p class="mb-4"><a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <a href="" class="btn btn-sm btn-primary">TAMBAH</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pesanan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Tanggal</th>
                            <th>nama</th>
                            <th>alamat</th>
                            <th>hp</th>
                            <th>e mail</th>
                            <th>jumlah</th>
                            <th>deskripsi</th>
                            <th>produk</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>Tanggal</th>
                            <th>nama</th>
                            <th>alamat</th>
                            <th>hp</th>
                            <th>e mail</th>
                            <th>jumlah</th>
                            <th>deskripsi</th>
                            <th>produk</th>
                            <th>action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td>s</td>
                            <td>as</td>
                            <td>sd</td>
                            <td>
                                <a href="" class="btn btn-sm btn-outline-primary">Edit</a>

                                <a href="" class="btn btn-sm btn-outline-danger">Hapus</a>

                            </td>
                        </tr>
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