<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Destinasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mt-2 mb-5">Tambah Data Destinasi</h1>
    
    <div class="container">
      
      <div class="row justify-content-center" >
        <div class="col-8">
          <div class="card">
            <div class="card-body">
            <form action="{{ route('kuliner.tambah') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" aria-describedby="nama">
                  </div>
                <div>
               <div class="mb-3">
                    <label for="nama" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" aria-describedby="nama">
                   </div>
               <div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Address Url</label>
                    <input type="text" name="address_url" class="form-control" aria-describedby="nama">
                   </div>
               <div>
                <div class="mb-3">
                <label for="nama" class="form-label">Area</label>
                <select name="area_id" class="form-select" aria-label="Default select example">
                    @foreach ($areas as $area)
                    <option  value="{{$area->id}}">{{$area->name}}</option>
                    @endforeach
                </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> 
                   </div>
    
            {{-- <div>
                <label for="Name">Gambar</label>
                <input type="file" name="description">
            </div> --}}
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>
</div>
</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>