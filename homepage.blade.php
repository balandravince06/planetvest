<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<body>
    <title>Homepage</title>
</head>
<body>
<h1 style="text-align:left">Planetvest Logo</h1>
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">WHO WE ARE</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">WHAT WE BELIEVE</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">WHAT WE DO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">HOW WE DO IT</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">CONTACT US</a>
  </li>
  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Language
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Action</button>
    <button class="dropdown-item" type="button">Another action</button>
    <button class="dropdown-item" type="button">Something else here</button>
  </div>
</div>
  <form class="d-flex" role="search">
      <input class="form-control-me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-light" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
    </form>
    <form method="get" action="{{ route('auth.login') }}">
    @csrf
    <div class="d-grid">
    <button type="submit" class="btn btn-outline-dark btn-sm">Log In</button>
</div>
</form>
<form method="get"  action="{{ route('auth.register') }}">
  @csrf
<div class="d-grid2">
<button type="submit" class="btn btn-outline-success btn-sm">Sign-Up</button>
</div>
</form>
</ul>
    <style>
        .carousel-item{
            height: 32rem;
            background: #777;
            color: white;
            position: relative;
        }
        .d-flex{
            position: absolute;
            top: 60px;
            right: 250px;
        }
        .form-control-me-2{
           padding: 5px 5px;
           box-sizing: border-box;
           border-radius: 15px;
        }
         .d-grid{
            position: absolute;
            top: 60px;
            right: 150px;
        }
        .d-grid2{
            position: absolute;
            top: 60px;
            right: 50px;
        }
        .container{
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding-bottom: 50px;
        }
        .nav-item{
            padding-bottom: 15px;
            font-family: "Times New Roman", Times, serif;
        }
        .nav-link{
          color: black;
        }
    </style>

    <div id="myCarousel" class="carousel slide" 
    data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel"
      data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel"
      data-slide-to="1" class="active"></li>
    </ol>
    <div class="carousel-inner"></div>
<div class="carousel-item active">
    <div class="container">
        <h1>Example</h1>
        <p>Hi!!!</p>
        <a href="{{ route('auth.login') }}" class="btn btn-lg btn-primary">
        Explore Now
        </a>
</div>
</div>
</div>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>

</html>