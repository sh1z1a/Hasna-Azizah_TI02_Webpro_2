@extends('admin.layout.appadmin')
@section('content')

<?php 
use App\Http\Controllers\PesananController;
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
        <a href="{{ url('/pesanan/create') }}" 
          class="btn btn-sm btn-primary">Tambah</a>
      </div>
      <div class="card-body">
          <table id="datatablesSimple">
              <thead>
                  <tr>
                    <th>No</th>
                    <th>Tgl</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Jumlah Pesanan</th>
                    <th>Deskripsi</th>
                    <th>Nama Produk</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Tgl</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Jumlah Pesanan</th>
                    <th>Deskripsi</th>
                    <th>Nama Produk</th>
                  </tr>
              </tfoot>
              <tbody>
                @php $no = 1; @endphp
                @foreach($pesanan as $pe)   
                  <tr>
                      <td>{{$no}}</td>
                      <td>{{$pe->tanggal}}</td>
                      <td>{{ $pe->nama_pemesan }}</td>
                      <td>{{ $pe->alamat_pemesan }}</td>
                      <td>{{ $pe->no_hp }}</td>
                      <td>{{ $pe->email }}</td>
                      <td>{{ $pe->jumlah_pesanan }}</td>
                      <td>{{ $pe->deskripsi }}</td>
                      <td>{{ $pe->nama_produk }}</td>
                      <td>
                        <a href="{{ url('pesanan/edit/'.$pe->id) }}" class="btn btn-warning mb-1">Edit</a>
                        <a href="{{ url('pesanan/delete/'.$pe->id) }}" class="btn btn-danger" onclick="if(!confirm('apakah anda yakin hapus data pesanan?')) {return false}">Delete</a>
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
