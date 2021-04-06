@extends('backend.home')
@section('sub-judul', 'Ubah Jurusan')
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

<form action="{{ route('category.update', $categories->id) }}" method='POST'>
   @csrf
   @method('patch')
   <div class="form-group">
      <label>Jurusan</label>
      <input type="text" class='form-control' name='jurusan' value='{{ $categories->jurusan }}'>
   </div>
   <div class="form-group">
      <button class="btn btn-primary btn-block">Ubah Jurusan</button>
   </div>
</form>
@endsection