<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Upload Image</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('dashboard.destinasi.images.index', ['id' => $id]) }}" class="float-right btn btn-sm btn-danger">Cancel</a>
                </div>
    
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
    
                    <form action="{{ route('dashboard.destinasi.images.store', ['id' => $id]) }}" method="POST" class="form" enctype="multipart/form-data">
                        @csrf
    
                        <div class="form-group">
                            <label for="">File</label>
                            <input type="file" name="berkas" class="form-control" value="{{ old('berkas') }}">
                        </div>
    
                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
    
                <div class="card-footer clearfix">
                </div>
            </div>
        </section>
    </h1>
</body>
</html>