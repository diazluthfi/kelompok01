<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Destinasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mt-2 mb-5">Update Data Destinasi</h1>
    
    <div class="container">
      
      <div class="row justify-content-center" >
        <div class="col-8">
          <div class="card">
            <div class="card-body">

    <form action="{{ route('dashboard.destinasi.update', $destinations->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" aria-describedby="nama" value="{{$destinations->name}}" >
          </div>
        <div>
       <div class="mb-3">
            <label for="nama" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" aria-describedby="nama" value="{{$destinations->address}}">
           </div>
       <div>
        <div class="mb-3">
            <label for="nama" class="form-label">Address Url</label>
            <input type="text" name="address_url" class="form-control" aria-describedby="nama"  value="{{$destinations->address_url}}">
           </div>
       <div>
        <div class="mb-3">
            <label for="">Description</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{$destinations->description}}</textarea> 
           </div>

   
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