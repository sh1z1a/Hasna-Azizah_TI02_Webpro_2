@extends('admin.layout.appadmin')
@section('content')

<?php 
use App\Http\Controllers\KategoriProdukController;
?>

<div class="container-fluid px-4">
  <h1 class="mt-4">Tables</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
      <li class="breadcrumb-item active">Tables</li>
  </ol>
  <div class="card mb-4">
      <div class="card-body">
          DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
          <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
          .
      </div>
  </div>
  <div class="card mb-4">
    <div class="card-header">
      <a href="{{ url('/kategori/create') }}" 
        class="btn btn-sm btn-primary">Tambah</a>
    </div>
      <div class="card-header">
          <i class="fas fa-table me-1"></i>
          DataTable Example
      </div>
      <div class="card-body">
          <table id="datatablesSimple">
              <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                  </tr>
              </tfoot>
              <tbody>
                @php $no = 1; @endphp
                @foreach($kategori_produk as $k)   
                  <tr>
                      <td>{{$no}}</td>
                      <td>{{$k->nama}}</td>
                      <td>
                        <a href="{{ url('kategori/edit/'.$k->id) }}" class="btn btn-warning mb-1">Edit</a>
                        <a href="{{ url('kategori/delete/'.$k->id) }}" class="btn btn-danger" onclick="if(!confirm('apakah anda yakin hapus data produk?')) {return false}">Delete</a>
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
