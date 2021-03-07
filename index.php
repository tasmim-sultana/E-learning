<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- file of bootstrap-->
  <link rel="stylesheet" href="css\bootstrap.min.css">
  <!--file of fontawesom-->
  <link rel="stylesheet" src="css\all.min.css">
  <!-- Google fONT-->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
  <!-- Link of css file -->
  <link rel="stylesheet" href="css\style.css" type="text/css">
  <title>QuickLearning</title>
</head>

<body>

  <!-- strat navigation-->

  <nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top">

    <a class="navbar-brand display-3" href="index.php">AmateurLearning</a>
    <span class="navbar-text"> Learn and Implement</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav custom-nav pl-5">
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="index.php">Home </a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#">Cources</a>
        </li>
        <li class="nav-item custom-nav-item ">
          <a class="nav-link" href="#">Payment Status</a>
        </li>
        <li class="nav-item custom-nav-item ">
          <a class="nav-link" href="#">My profile</a>
        </li>
        <li class="nav-item custom-nav-item ">
          <a class="nav-link" href="#">Logout</a>
        </li>
        <li class="nav-item  custom-nav-item ">
          <a class="nav-link" data-toggle="modal" data-target="#stuLoginModalCenter" href="#">Log in</a>
        </li>
        <li class="nav-item  custom-nav-item ">
          <a class="nav-link" data-toggle="modal" data-target="#stuRegModalCenter
      " href="#">Sign Up</a>
        </li>
        <li class="nav-item  custom-nav-item  ">
          <a class="nav-link" href="#">Feedback</a>
        </li>
        <li class="nav-item  custom-nav-item  ">
          <a class="nav-link" href="#">Contact</a>
        </li>

      </ul>
    </div>
  </nav>

  <!-- End navigation-->
  <!-- Start vedio background-->
  <div class="container-fluid remove-vid-marg">
    <div class="div-parent">
      <video autoplay muted loop>
        <source src="vedios\Pexels Videos 2575219 (1).mp4" style="height:100%; width: 50%" type="video/mp4">
      </video>
      <div class="overlay"></div>
    </div>
    <div class="vid-content">
      <h1 class="my-content">Welcome to AmateurLearning</h1>
      <small class="my-content">Learn and Implement</small><br><br>
      <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#stuRegModalCenter
  ">Get Started</a>
    </div>
  </div>



  <!-- End vedio background-->
  <!-- Strat Text Banner -->
  <div class="container-fluid bg-danger txt-banner">
    <div class="row bottom-banner">
      <div class="col-sm">
        <h5> <i class="fas fa-book-open mr-3"></i> Online Courses</h5>
      </div>

      <div class="col-sm">
        <h5><i class="fas fa-users mr-3"></i> Expert Instruction </h5>
      </div>

      <div class="col-sm">
        <h5><i class="fas fa-keyboard mr-3"></i>Lifetime </h5>
      </div>

      <div class="col-sm">
        <h5><i class="fas fa-money-bill-wave-alt mr-3"></i>Money back</h5>
      </div>

    </div>
  </div>

  <!-- End Text Banner -->

  <!-- Start most popular courses-->
  <div class="container mt-5">
    <h1 class="text-center"> Popular Courses </h1>
    <!--Start Most Popular Course 1st Card Deck-->

    <div class="card-deck mt-4">

      <a href="#" class="btn " style="text-align: left; padding:0px; margin: 0px;">
        <div class="card">
          <img src="images\guiter.jpeg" class="card-img-top  custom-pic " alt="Guiter" />
          <div class="card-body">
            <h5 class="card-title">Learn Guiter Easy Way</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consecture adipisticing
              elite. Facilis, nemo.
            </p>
            <div class="card-footer">
              <p class="card-text d-inline">Price: <small><del>&#8377 200</del></small>
                <span class="font-weight-bolder">&#8377 200</span>
              </p>
              <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
            </div>
          </div>
        </div>
      </a>

      <a href="#" class="btn " style="text-align: left; padding:0px; margin: 0px;">
        <div class="card">
          <img src="images\guiter.jpeg" class="card-img-top  custom-pic " alt="Guiter" />
          <div class="card-body">
            <h5 class="card-title">Learn Guiter Easy Way</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consecture adipisticing
              elite. Facilis, nemo.
            </p>
            <div class="card-footer">
              <p class="card-text d-inline">Price: <small><del>&#8377 200</del></small>
                <span class="font-weight-bolder">&#8377 200</span>
              </p>
              <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
            </div>
          </div>
        </div>
      </a>

      <a href="#" class="btn " style="text-align: left; padding:0px; margin: 0px;">
        <div class="card">
          <img src="images\guiter.jpeg" class="card-img-top  custom-pic " alt="Guiter" />
          <div class="card-body">
            <h5 class="card-title">Learn Guiter Easy Way</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consecture adipisticing
              elite. Facilis, nemo.
            </p>
            <div class="card-footer">
              <p class="card-text d-inline">Price: <small><del>&#8377 200</del></small>
                <span class="font-weight-bolder">&#8377 200</span>
              </p>
              <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
            </div>
          </div>
        </div>
      </a>
    </div>
    <!--End Most popular course 1st Deck-->
    <!--Start Most popular course 2nd Deck-->
    <div class="card-deck mt-4">

      <a href="#" class="btn" style="text-align: left; padding:0px; margin: 0px;">
        <div class="card">
          <img src="images\NaturePic.jpg" class="card-img-top custom-pic  " alt="Guiter" />
          <div class="card-body">
            <h5 class="card-title">Learn Photography</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consecture adipisticing
              elite. Facilis, nemo.
            </p>
            <div class="card-footer">
              <p class="card-text d-inline">Price: <small><del>&#8377 200</del></small>
                <span class="font-weight-bolder">&#8377 200</span>
              </p>
              <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
            </div>
          </div>
        </div>
      </a>

      <a href="#" class="btn" style="text-align: left; padding:0px; margin: 0px;">
        <div class="card">
          <img src="images\NaturePic.jpg" class="card-img-top custom-pic  " alt="Guiter" />
          <div class="card-body">
            <h5 class="card-title">Learn Photography</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consecture adipisticing
              elite. Facilis, nemo.
            </p>
            <div class="card-footer">
              <p class="card-text d-inline">Price: <small><del>&#8377 200</del></small>
                <span class="font-weight-bolder">&#8377 200</span>
              </p>
              <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
            </div>
          </div>
        </div>
      </a>

      <a href="#" class="btn" style="text-align: left; padding:0px; margin: 0px;">
        <div class="card">
          <img src="images\NaturePic.jpg" class="card-img-top custom-pic  " alt="Guiter" />
          <div class="card-body">
            <h5 class="card-title">Learn Photography</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consecture adipisticing
              elite. Facilis, nemo.
            </p>
            <div class="card-footer">
              <p class="card-text d-inline">Price: <small><del>&#8377 200</del></small>
                <span class="font-weight-bolder">&#8377 200</span>
              </p>
              <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
            </div>
          </div>
        </div>
      </a>

    </div>
    <!--End Most popular course 2nd Deck-->

    <div class="text-center m-2">
      <a class="btn btn-danger btn-sm" href="#">View All Courses</a>
    </div>
  </div>
  <!-- End most popular courses-->
  <!-- Start Contact us-->
  <?php
  include('./contact.php');
  ?>

  <!--End of contact us container-->

  <!--Start social Follow-->
  <div class="container-fluid bg-danger">
    <div class="row text-white text center p-1">
      <div class="col-sm">
        <a class="text-white social-hover" href="#"><i class="fab fa-facebook"></i>
          Facebook</a>
      </div>

      <div class="col-sm">
        <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i>
          Twitter</a>
      </div>

      <div class="col-sm">
        <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp-square"></i>
          Whatsapp</a>
      </div>
      <div class="col-sm">
        <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i>
          Instagram</a>
      </div>

    </div>
  </div>
  <!-- End of social Follow-->
  <div class="container-fluid text-center text-white bg-info p-1">
    <h1>About us</h1>
    <p> This is Amateur Learning.Amateurism can be seen in both a negative and positive light. <br>Amateurism can be
      seen in both a negative and positive light. <br>Amateurism can be seen in both a negative and positive light.
      <br>Amateurism can be seen in both a negative and positive light. </p>
  </div>
  <!--Start Footer-->
  <footer class="container-fluid bg-dark text-center p-2">
    <small class="text-white">Copyright &copy; 2019 || Designed By AmateurLearning || <a href="#login"
        data-toggle="modal" data-target="#adminLoginModalCenter">Admin Login</a> </small>
  </footer>

  <!-- Start Styudent Registration Modal-->


  <div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="stuRegModalCenter
      Label">Student Registration</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <!-- Start of student Registration Form-->
          <form>
            <div class="form-group">
              <i class="fas fa-user"></i>
              <label for="stuname" class="p1-2 font-weight-bold">Name</label>
              <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
            </div>

            <div class="form-group">
              <i class="fas fa-envelope"></i>
              <label for="stuemail" class="p1-2 font-weight-bold">Email</label>
              <input type="email" class="form-control" placeholder="Email" name="stuemail" id="stuemail">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
              <i class="fas fa-key"></i>
              <label for="stupass" class="p1-2 font-weight-bold">New Password</label>
              <input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">

            </div>

          </form>
          <!-- End of student Registration Form-->
        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-primary">Sign up</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>

  <!-- End student registration Modal-->



  <!-- Start Styudent Log in Modal-->


  <div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Log in </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <!-- Start of student LOg in  Form-->
          <form id="stuLoginForm">

            <div class="form-group">
              <i class="fas fa-envelope"></i>
              <label for="stulogemail" class="p1-2 font-weight-bold">Email</label>
              <input type="email" class="form-control" placeholder="Email" name="stulogemail" id="stulogemail">

            </div>

            <div class="form-group">
              <i class="fas fa-key"></i>
              <label for="stulogpass" class="p1-2 font-weight-bold">Password</label>
              <input type="password" class="form-control" placeholder="Password" name="stulogpass" id="stulogpass">

            </div>

          </form>
          <!-- End of student Log in  Form-->
        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-primary" id="stuLoginbtn">Login </button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

        </div>
      </div>
    </div>
  </div>

  <!-- End student Log in  Modal-->

  <!-- Start Admin Log in Modal-->


  <div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Log in </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <!-- Start of Admin LOg in  Form-->
          <form id="adminLoginForm">

            <div class="form-group">
              <i class="fas fa-envelope"></i>
              <label for="adminlogemail" class="p1-2 font-weight-bold">Email</label>
              <input type="email" class="form-control" placeholder="Email" name="adminlogemail" id="adminlogemail">

            </div>

            <div class="form-group">
              <i class="fas fa-key"></i>
              <label for="adminlogpass" class="p1-2 font-weight-bold">Password</label>
              <input type="password" class="form-control" placeholder="Password" name="adminlogpass" id="adminlogpass">

            </div>

          </form>
          <!-- End of Admin Log in  Form-->
        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-primary" id="adminLoginbtn">Login </button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

        </div>
      </div>
    </div>
  </div>

  <!-- End Admin Log in  Modal-->


  <!-- file from jqury-->
  <script src="js\jquery-3.5.1.min.js"></script>
  <!--file from bootstrap-->
  <script src="js\popper.min.js"></script>
  <script src="js\bootstrap.min.js"> </script>
  <!--file from fontawesom-->
  <script src="js\all.min.js"></script>
</body>

</html>