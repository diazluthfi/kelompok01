<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section class="conten">
        <div class="card">
            <div>
                <h3>Image List</h3>
                <a href="{{route('images.create', ['id' => $id])}}">tambah image</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Image</th>
                      <th>action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($images as $key => $image)
                      <tr>
                        <td> {{ $key + 1 }} </td>
                        <td>
                          <img src="{{ asset('storage/tourismimages/' . $image->path) }}" alt="">
                        </td>
                        <td>
                          <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
        </div>

    </section>
</body>
</html>