<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kuliner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
   
    <h1 class="text-center mt-2 mb-5">Data Kuliner</h1>
    
    <div class="container">
      <a href="{{route('kuliner.tambah')}}" type="button" class="btn btn-primary">Tambah Kuliner</a>

      <a href="{{route('destinasi.show')}}" type="button" class="btn btn-primary">Destinasi</a>

      <a href="{{ route ('logout')}}" type="button" class="btn btn-primary">Logout</a>
      <div class="row">

        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Address</th>
              <th scope="col">Addres Url</th>
              <th scope="col">Description</th>
              <th scope="col">Area Id</th>
              <th scope="col">User Id</th>
              <th scope="col">Dibuat</th>
              <th scope="col">Gambar</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($kuliners as $row)
            <tr>
              <th scope="row">{{$row->id}}</th>
              <td>{{$row->name}}</td>
              <td>{{$row->address}}</td>
              <td>{{$row->address_url}}</td>
              <td>{{$row->description}}</td>
              <td>{{$row->area_id}}</td>
              <td>{{$row->user->name}}</td>
              <td>{{$row->created_at->diffForHumans()}}</td>
              <td>
                {{-- <a href="{{route('images.index', ['id' => $row->id])}}" class="btn btn-primary">
                  <i class="fa fa-image"></i>
                </a> --}}
               </td>
               <td><a href="{{ route ('destinasi.edit', $row->id)}}" type="button" class="btn btn-success">Update</a>
                <button type="button" class="btn btn-danger" onclick="document.getElementById('form-{{$row->id}}').submit()">Hapus</button> 
                <form id="form-{{$row->id}}" action="{{ route('destinasi.delete', $row->id) }}" method="POST">
                  @csrf
                  @method('delete')
                </form>
             
               </td>
               
            
            </tr>
            @endforeach
            
           
          </tbody>
        </table>
      </div>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>