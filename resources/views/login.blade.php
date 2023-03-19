<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <!-- navbar -->
    <header class="header">

        <nav class="navbar">
    
        <a href="#" class="logo">
            <img src="assets/images/logo/img-logo-sparkling.png" alt="">
        </a>
    
        <div class="links">
          <a href="{{route('home')}}">Beranda</a>
          <a href="{{route('pagedestinasi')}}">Destinasi</a>
          <a href="kuliner.html">Kuliner</a>
          <a href="{{route('login')}}">Login</a>
          <a href="{{route('register')}}">Sign Up</a>
            
        </div>
    
        <div id="menu-btn" class="fa fa-bars"></div>
    
        </nav>
    
    </header>


    <!--  start -->
    <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-6">
        <img class="img-fluid object-fit-cover rounded-4 shadow" src="{{asset('images/rasyid-maulana-yVwiHXoTrnU-unsplash.jpg')}}" alt="">

      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="{{ route('login') }}" method="POST">
          @csrf
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form1Example13" placeholder="Input Your Email..." class="form-control form-control-lg" name="email" />
            <label class="form-label" for="form1Example13">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" placeholder="Input Your Password..." class="form-control form-control-lg" name="password" />
            <label class="form-label" for="form1Example23">Password</label>
          </div>


          <!-- Submit button -->
          <button class="btn btn-brand " style="color: #fff;">Login</button>


          

          

        </form>
      </div>
    </div>
  </div>
</section>

    <!-- end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>