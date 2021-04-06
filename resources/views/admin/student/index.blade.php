@extends('backend.home')
@section('sub-judul', 'Data Alumni')
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
   <div class='mb-3'>
      <a href="{{ route('student.create') }}" class='btn btn-primary'>Tambah Alumni</a>
   </div>
   <table class='table table-sm table-striped table-hover table-bordered' id='example'>
      <thead>
         <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Angkatan</th>
            <th>Created By</th>
            <th>Action</th>
         </tr>
      </thead>
      <tbody>
      @foreach($student as $data => $hasil)
         <tr>
            <td>{{ $data + $student->firstitem() }}</td>
            <td>{{ $hasil->nis }}</td>
            <td>{{ $hasil->nama }}</td>
            <td>{{ $hasil->categories->jurusan }}</td>
            <td>{{ $hasil->angkatan }}</td>
            <td>{{ $hasil->users->name }}</td>
            <td> 
               <form action="{{ route('student.destroy', $hasil->id) }}" method='POST'>
                  @csrf
                  @method('delete')
                  <a href="{{ route('student.edit', $hasil->id) }}" class='btn btn-primary btn-sm'>Edit</a>
                  <button type='submit' class='btn btn-danger btn-sm'>Delete</button> 
               </form>
            </td>
         </tr>
      @endforeach
      </tbody>
   </table>
   {{$student->links() }}
@endsection