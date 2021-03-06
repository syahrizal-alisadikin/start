@extends('layouts.admin')
@section('title', 'Dashboard ADMIN')

@section('content')
<div class="row py-3">
  <div class="container">
    <h3>Dashboard Rekanan</h3>
  </div>
</div>

<div class="row">
  <div class="card">
    <div class="card-body">
      <a href="{{ route('users.create') }}" class="btn btn-primary"><i class="fa fa-plus me-2"></i>Rekanan</a>
      <div class="table-responsive p-0">
        <table class="table align-items-center mb-0" id="users"  style="width:100%; !important">
          <thead>
            <tr>
              <th class=" text-uppercase text-secondary opacity-7">No</th>
              <th class="text-center text-uppercase text-secondary  opacity-7">Name</th>
              <th class="text-center text-uppercase text-secondary  opacity-7">Email</th>
              <th class="text-center text-uppercase text-secondary  opacity-7">Phone Number</th>
              <th class="text-center text-uppercase text-secondary opacity-7">Alamat</th>
              <th class="text-center text-uppercase text-secondary opacity-7">Aksi</th>
            </tr>
          </thead>
          
        </table>
      </div>
    </div>
  </div>
</div>




@endsection
@push('addon-script')
<script>
    var orders = $('#users').DataTable({
       processing: true,
  
        serverSide:true,
        ordering:true,
        ajax:{
          url: '{!! url()->current() !!}',
        },
        columns:[
          { data: 'DT_RowIndex', name:'DT_RowIndex'},
          
          { data: 'name', name:'name'},
          { data: 'email', name:'email'},
          { data: 'phone', name:'phone'},
          { data: 'alamat', name:'alamat'},
          { data: 'aksi', name:'aksi'},

          
        ],
        columnDefs: [
              {
                  "targets": 0, // your case first column
                  "className": "text-center",
              }, 
               {
                  "targets": 1, // your case first column
                  "className": "text-center",
              }, 
              {
                  "targets": 2, // your case first column
                  "className": "text-center",
              }, 
              {
                  "targets": 3, // your case first column
                  "className": "text-center",
              },
              {
                  "targets": 4, // your case first column
                  "className": "text-center",
              },   
             
          ]
    })
   
  </script>
 
@endpush