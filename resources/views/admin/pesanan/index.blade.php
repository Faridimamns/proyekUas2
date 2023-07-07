@extends('admin.layout.adminPage.appadmin')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">PESANAN</h1>
    <p class="mb-4"><a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <a href="{{url('/pesanan/create')}}" class="btn btn-sm btn-primary">TAMBAH</a>

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
                    @php $no = 1 ; @endphp
                                    @foreach($pesanan as $p)
                                        <tr>
                                            <td>{{$no}}</td>
                                            <td>{{$p->tanggal}}</td>
                                            <td>{{$p->nama_pemesan}}</td>
                                            <td>{{$p->alamat_pemesan}}</td>
                                            <td>{{$p->no_hp}}</td>
                                            <td>{{$p->email}}</td>
                                            <td>{{$p->jumlah_pesanan}}</td>
                                            <td>{{$p->deskripsi}}</td>
                                            <td>{{$p->nama_produk}}</td>
                                            <td>
                                                <a href="{{ url('pesanan/edit/'.$p->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                                <a href="{{ url('pesanan/delete/'.$p->id) }}" class="btn btn-sm btn-danger" 
                                                onclick="if(!confirm('Apakah Anda yakin ingin menghapus data pesanan?')) {return false}">Hapus</a>
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