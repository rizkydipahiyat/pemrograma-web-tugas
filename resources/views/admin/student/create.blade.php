@extends('backend.home')
@section('sub-judul', 'Tambah Alumni')
@section('content')

@if(count($errors) > 0)
   @foreach($errors->all() as $error)
      <div class="alert alert-danger">
         {{ $error }}
      </div>
   @endforeach
@endif

@if(Session::has('success'))
   <div class="alert alert-success" role="alert">
   {{ Session('success') }}
   </div>
@endif

<form action="{{ route('student.store') }}" method='POST' enctype='multipart/form-data'>
   @csrf
   <div class="form-group">
      <label>NIS</label>
      <input type="text" class='form-control' name='nis'>
   </div>
   <div class="form-group">
      <label>Nama</label>
      <input type="text" class='form-control' name='nama'>
   </div>
   <div class="form-group">
      <label>Jurusan</label>
      <select class='form-control' name='categories_id'>
         <option value="" holder>Pilih Kategori</option>
         @foreach($categories as $data)
         <option value='{{ $data->id }}'>{{ $data->jurusan }}</option>
         @endforeach
      </select>
   </div>
   <div class="form-group">
      <label>Angkatan</label>
      <input type="text" class='form-control' name='angkatan'>
   </div>
   <div class="form-group">
      <label>No Telp</label>
      <input type="text" class='form-control' name='notelp'>
   </div>
   <div class="form-group">
      <label>Tanggal Lahir</label>
      <input type="date" class='form-control' name='tanggal_lahir'>
   </div>
   <div class="form-group">
      <label>Email</label>
      <input type="email" class='form-control' name='email'>
   </div>
   <div class="form-group">
      <label>Alamat</label>
      <textarea name="alamat" class='form-control'></textarea>
   </div>
   <div class="form-group">
      <button class="btn btn-primary btn-block">Tambah Alumni</button>
   </div>
</form>
@endsection