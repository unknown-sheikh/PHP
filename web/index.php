<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Photo Gallery</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Photo Gallery</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>

      

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#Nature">Nature</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#Architecture">Architecture</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#Travel">Travel</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#Contact-Us">Contact</a>
      </li>  

      <li class="nav-item">
        <a class="nav-link" href="#About">About</a>
      </li>
      
    </ul>
      
  </div>
</nav>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/1.jpg" alt="First slide">

      <div class="carousel-caption d-none d-md-block">
      <h5>Nature</h5>
      </div>

    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
      <h5>Architecture</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
      <h5>Travel</h5>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<a id="Nature">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Nature</h2>
  </div>

  <div class="container-fluid">
  <div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/4.jpg" class="img-fluid pb-3">
  </div>

  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/5.jpg" class="img-fluid pb-3">
  </div>

  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/6.jpg" class="img-fluid pb-3">
  </div>
  </div>
  </div>
</section>
</a>

<a id="Architecture">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Architecture</h2>
  </div>

  <div class="container-fluid">
  <div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/7.jpg" class="img-fluid pb-3">
  </div>

  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/8.jpg" class="img-fluid pb-3">
  </div>

  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/9.jpg" class="img-fluid pb-3">
  </div>
  </div>
  </div>
</section>
</a>

<a id="Travel">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Travel</h2>
  </div>

  <div class="container-fluid">
  <div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/10.jpg" class="img-fluid pb-3">
  </div>

  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/11.jpg" class="img-fluid pb-3">
  </div>

  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/12.jpg" class="img-fluid pb-3">
  </div>
  </div>
  </div>
</section>
</a>

<a id="Contact-Us">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Contact-Us</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="about.php" method="post">
      <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name" class="form-control">
      </div>

      <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email" class="form-control">
      </div>

      <div class="form-group">
        <label>Number:</label>
        <input type="text" name="number" class="form-control">
      </div>

      <button type="submit" class="btn btn-success">Submit</button>
</form>
  </div>
  </section>
  </a>

<a id="About">
  <section class="my-4">
  <div class="py-4">
    <h2 class="text-center">About</h2>
  </div>

  <div class="container-fluid">
    <h3 class="text-center">Mac</h3><br>
    <p class="text-center"><b>I am a passionate photographer interested in working in Architecture, Nature and Travel photography.
       I am a full time freelancer with an experience of 5 years
    </b></p>
  </div>

  </section>
  </a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>

</body>
</html>