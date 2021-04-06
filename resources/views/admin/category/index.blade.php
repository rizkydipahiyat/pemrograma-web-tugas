@extends('backend.home')
@section('sub-judul', 'Jurusan')
@section('content')

@if(Session::has('success'))
   <div class="alert alert-success" role="alert">
   {{ Session('success') }}
   </div>
@endif
@if(Session::has('danger'))
   <div class="alert alert-danger" role="alert">
   {{ Session('danger') }}
   </div>
@endif

<div class="mb-3">
   <a href="{{ route('category.create') }}" class='btn btn-primary'>Tambah Jurusan</a>
</div>
<table class='table table-sm table-striped table-hover table-bordered' id='example'>
      <thead>
         <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Action</th>
         </tr>
      </thead>
      <tbody>
      @foreach($categories as $category => $hasil)
         <tr>
            <td>{{ $category + $categories->firstitem() }}</td>
            <td>{{ $hasil->jurusan }}</td>
            <td>
               <form action="{{ route('category.destroy', $hasil->id) }}" method='POST'>
                  @csrf
                  @method('delete')
                  <a href="{{ route('category.edit', $hasil->id) }}" class='btn btn-primary btn-sm'>Edit</a>
                  <button type='submit' class='btn btn-danger btn-sm'>Delete</button> 
               </form>
            </td>
         </tr>
      @endforeach
      </tbody>
   </table>
@endsection