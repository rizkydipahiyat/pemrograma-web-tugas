@extends('backend.home')
@section('content')
@section('sub-judul', 'Dashboard')
<div class="row">
   <div class="col-xl-6 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
         <div class="card-body">
         <div class="row no-gutters align-items-center">
            <div class="col mr-2">
               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">TOTAL JURUSAN</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $categories->count() }}</div>
            </div>
            <div class="col-auto">
               <i class="fas fa-graduation-cap fa-2x text-gray-300"></i>
            </div>
         </div>
         </div>
      </div>
   </div>
   <div class="col-xl-6 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
         <div class="card-body">
         <div class="row no-gutters align-items-center">
            <div class="col mr-2">
               <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">TOTAL LULUSAN</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $student->count() }}</div>
            </div>
            <div class="col-auto">
               <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
         </div>
         </div>
      </div>
   </div>
   <div class="col-xl-6 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
         <div class="card-body">
         <div class="row no-gutters align-items-center">
            <div class="col mr-2">
               <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">TOTAL STAFF</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user->count() }}</div>
            </div>
            <div class="col-auto">
               <i class="fas fa-user fa-2x text-gray-300"></i>
            </div>
         </div>
         </div>
      </div>
   </div>
</div>

@endsection