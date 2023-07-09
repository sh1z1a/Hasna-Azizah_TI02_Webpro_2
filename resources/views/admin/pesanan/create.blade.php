@extends ('admin.layout.appadmin')
@section ('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1>Tambah Data Pesanan</h1>
<form action="{{ url('pesanan/store') }}" method="POST" enctype="multipart/form-data">
  {{-- Menangkap dan Memfill data --}}
  {{ csrf_field() }}
  <div class="form-group row">
    <input type="hidden" name="id" >
    <label for="tanggal" class="col-4 col-form-label">Tgl</label> 
    <div class="col-6">
      <input id="tanggal" name="tanggal" type="date" class="form-control" >
    </div>
  </div>
  <div class="form-group row">
    <label for="nama_pemesan" class="col-4 col-form-label">Nama Produk</label> 
    <div class="col-6">
      <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control" >
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat_pemesan" class="col-4 col-form-label">Alamat</label> 
    <div class="col-6">
      <input id="alamat_pemesan" name="alamat_pemesan" type="text" class="form-control" >
    </div>
  </div>
  <div class="form-group row">
    <label for="no_hp" class="col-4 col-form-label">No HP</label> 
    <div class="col-6">
      <input id="no_hp" name="no_hp" type="number" class="form-control" >
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label> 
    <div class="col-6">
      <input id="jumlah_pesanan" name="jumlah_pesanan" type="text" class="form-control" >
    </div>
  </div>
  <div class="form-group row">
    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-6">
      <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Select</label> 
    <div class="col-6">
      <select id="select" name="produk_id" class="custom-select">
        @foreach($pesanan as $d)
        <option value="{{ $d->id }}">{{ $d->produk_id }}</option>
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