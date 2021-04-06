@extends('backend.home')
@section('sub-judul', 'Jurusan')
@section('content')
@if(count($errors) > 0)
   @foreach($errors->all() as $error)
   <div class="alert alert-danger">
      {{ $error }}
   </div>
   @endforeach
@endif
@if(Session::has('success'))
   <div class="alert alert-success">
      {{ Session('success') }}
   </div>
@endif

<form action="{{ route('category.store') }}" method="post">
   @csrf
   <div class="form-group">
      <label>Jurusan</label>
      <input type="text" class='form-control' name='jurusan'>
   </div>
   <div class="form-group">
      <button class='btn btn-primary btn-block'>Simpan Jurusan</button>
   </div>
</form>
@endsection