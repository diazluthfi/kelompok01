@extends('dashboard.layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Destination Lists</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Destination List</h3>

            <a href="{{route('dashboard.destinasi.create')}}" class="float-right btn btn-sm btn-primary">New Destination</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10px">No</th>
                  <th scope="col">Nama</th>
              <th scope="col">Address</th>
              <th scope="col">Wilayah</th>
               <th scope="col">Nama pembuat</th>
              <th scope="col">Dibuat</th>
              <th scope="col">Gambar</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($destinations as $row)
            <tr>
              <th scope="row">{{$row->id}}</th>
              <td>{{$row->name}}</td>
              <td>{{$row->address}}</td>

              <td>{{$row->area->name}}</td>
              <td>{{$row->user->name}}</td>
              <td>{{$row->created_at->diffForHumans()}}</td>
              <td>
                <a href="{{route('dashboard.destinasi.images.index', ['id' => $row->id])}}" class="btn btn-secondary">
                  <i class="fa fa-image"></i>
                </a>
               </td>
               <td><a href="{{ route ('dashboard.destinasi.edit', $row->id)}}" type="button" class="btn btn-success">Update</a>
                
                
                @if (Auth::user()->role=='admin')
                <button type="button" class="btn btn-danger" onclick="document.getElementById('form-{{$row->id}}').submit()">Hapus</button> 
                <form id="form-{{$row->id}}" action="{{ route('dashboard.destinasi.delete', $row->id) }}" method="POST">
                  @csrf
                  @method('delete')
                </form>
                @endif
                
             
               </td>
               
            
            </tr>
            @endforeach
            
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
              <li class="page-item"><a class="page-link" href="#">«</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
          </div>
        </div>
    </section>
    <!-- /.content -->
@endsection