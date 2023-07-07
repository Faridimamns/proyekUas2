@extends('admin.layout.adminPage.appadmin')
@section('content')
<h1>Ini adalah Produk</h1>
<div class="container-fluid px-4">
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Tables</li>
        </lo>
        <div class="card mb-4">
            <div class="card-body">
                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                .
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <a href="{{url('/kategori/create')}}" class="btn btn-sm btn-primary">Tambah</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
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
                        @php $no = 1 ; @endphp
                        @foreach($kategori_produk as $kp)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$kp->nama}}</td>
                            <td>
                                <a href="{{ url('kategori_produk/edit/'.$kp->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{ url('kategori_produk/delete/'.$kp->id) }}" class="btn btn-sm btn-danger" onclick="if(!confirm('Apakah Anda yakin ingin menghapus data pesanan?')) {return false}">Hapus</a>
                            </td>
                        </tr>
                        @php $no++; @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</div>

@endsection