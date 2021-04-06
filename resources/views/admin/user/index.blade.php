@extends('backend.home')
@section('sub-judul', 'Data Staff')
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
   <table class='table table-sm table-striped table-hover table-bordered' id='example'>
      <thead>
         <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Type</th>
         </tr>
      </thead>
      <tbody>
      @foreach($user as $data => $hasil)
         <tr>
            <td>{{ $data + $user->firstitem() }}</td>
            <td>{{ $hasil->name }}</td>
            <td>{{ $hasil->email }}</td>
            <td>
               @if($hasil->type === 1)
                  <span class="badge badge-pill badge-warning">Super Admin</span>
               @else
                  <span class="badge badge-pill badge-danger">Admin</span>
               @endif
            </td>
         </tr>
      @endforeach
      </tbody>
   </table>
   {{$user->links() }}
@endsection