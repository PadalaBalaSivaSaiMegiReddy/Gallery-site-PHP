<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <!-- // Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="CSS/style.css" rel="stylesheet">
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
          <a class="dropdown-item" href="#nature">Nature</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#architecture">Architecture</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#travel">Travel</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
</ul>

  </div>
</nav>



<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li> <!-- added third slide indicator -->
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block w-100" src="Images\nature_4.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h3>Nature</h3>

        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="Images\architecture_4.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h3>Architecture</h3>
        </div>
      </div>
      <div class="carousel-item"> <!-- added third slide -->
        <img class="d-block w-100" src="Images\travel_4.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h3>Travel</h3>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<a  id="nature">
<section class="my4">
  <div class="py-4">
    <h2 class="text-center">Nature</h2>
    <div class="container-fluid">
      <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
       <img src="Images\nature_1.jpg" class="img-fluid pb-3">
</div>
<div class="col-lg-4 col-md-4 col-12">
       <img src="Images\nature_2.jpg" class="img-fluid pb-3">
</div>
<div class="col-lg-4 col-md-4 col-12">
       <img src="Images\nature_3.jpg" class="img-fluid pb-3">
</div>

  </div></div></div>
    
</section></a>

<a  id="architecture">
<section class="my4">
  <div class="py-4">
    <h2 class="text-center">Architecture</h2>
    <div class="container-fluid">
      <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
       <img src="Images\architecture_1.jpg" class="img-fluid pb-3">
</div>
<div class="col-lg-4 col-md-4 col-12">
       <img src="Images\architecture_2.jpg" class="img-fluid pb-3">
</div>
<div class="col-lg-4 col-md-4 col-12">
       <img src="Images\architecture_3.jpg" class="img-fluid pb-3">
</div>

  </div></div></div>
    
</section></a>

<a  id="travel">

<section class="my4">
  <div class="py-4">
    <h2 class="text-center">Travel</h2>
    <div class="container-fluid">
      <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
       <img src="Images\travel_1.jpg" class="img-fluid pb-3">
</div>
<div class="col-lg-4 col-md-4 col-12">
       <img src="Images\travel_2.jpg" class="img-fluid pb-3">
</div>
<div class="col-lg-4 col-md-4 col-12">
       <img src="Images\travel_3.jpg" class="img-fluid pb-3">
</div>

  </div></div></div>
    
</section></a>

<a  id="contact">

<section class="my4">
  <div class="py-4">
    <h2 class="text-center">Contact Us</h2>
    <div class="w-50 m-auto">
      <form action="about.php" method="post">
        <div class="form-group">
          <label>Name:</label>
          <input type="text" name="name" autocomplete="on" class="form-control">
        </div>
        <div class="form-group">
          <label>Email:</label>
          <input type="email" name="email" autocomplete="on" class="form-control">
        </div>
        <div class="form-group">
          <label>Number:</label>
          <input type="text" name="number" autocomplete="on" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
</section>

</a>

<!-- <section class="my4">
  <div class="py-4">
    <h2 class="text-center">About Us</h2>
    <div class="container-fluid">
      <h3 class="text-center">Megi</h3><br>
      <p class="text-center"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod, nisl eget ultricies aliquam, nunc nisl aliquet nunc, quis a<b></p>


</div>
</section> -->

<a  id="about">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">About Us</h2><br>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <h3 class="text-center mb-4">Meet the Team</h3>
          <div class="card mb-3">
            <div class="row no-gutters align-items-center">
              <div class="col-md-4">
                <img src="Images/megi.JPG" alt="Megi" class="card-img">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Megi</h5>
                  <p class="card-text">I am a motivated software developer studying Bachelor of Science in Computer Science. Proficient in programming languages such as JavaScript, Python, C++ and PHP.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</a>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>