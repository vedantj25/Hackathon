<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sigma PolyTech</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-frontpage.css" rel="stylesheet">
  <style>
  @import url('//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

.isa_info, .isa_success, .isa_warning, .isa_error {
margin: 10px 0px;
padding:12px;

}
.isa_info {
  color: #00529B;
  background-color: #BDE5F8;
}
.isa_success {
  color: #4F8A10;
  background-color: #DFF2BF;
}
.isa_warning {
  color: #9F6000;
  background-color: #FEEFB3;
}
.isa_error {
  color: #D8000C;
  background-color: #FFD2D2;
}
.isa_info i, .isa_success i, .isa_warning i, .isa_error i {
  margin:10px 22px;
  font-size:2em;
  vertical-align:middle;
}
  </style>

</head>
<?php include "databaseConnection.php" ?>
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Sigma Polytech</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">thismenu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">thatmenu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">onlymenu</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2">Sigma Really Bad Polytech</h1>
          <p class="lead mb-5 text-white-50">bla bla bllla naaa;a na;lns;nda  lasndkasndla isdnaskd laskasnkaac aoicn ac </p>
        </div>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">
    <div id="msgDsp">
      <?php $SESSION_MSG = $_SESSION['MSG'];
      if(strpos($SESSION_MSG,"Error!") > 0){
        echo "<div class='isa_error'><i class='fa fa-info-check'></i><p>".$SESSION_MSG."</p></div>";
      }
      elseif (strpos($SESSION_MSG,"Success!") > 0) {
        echo "<div class='isa_success'><i class='fa fa-info-circle'></i><p>".$SESSION_MSG."</p></div>";
      }


      ?>

    <div class="row">
      <div class="col-md-8 mb-5">
        <h2>What We Do</h2>
        <hr>
        <p>we fuck up student's future but sometimes we do hire hot teachers maybe by mistack </p>
        <a class="btn btn-primary btn-lg" href="#">CAll US SO WE CAN MAKE YOU SUCK OUR DICK &raquo;</a>
      </div>
      <div class="col-md-4 mb-5">
        <h2>Contact Us</h2>
        <hr>
        <address>
          <strong>Near Lack</strong>
          <br>Somewhere far where it'll take everyone a long fukin drive to arrive,
          <br>also where we managed to find cheapest land so we can hide our blackmoney
          <br>
        </address>
        <address>
          <abbr title="Phone">P:</abbr>
          6969696969
          <br>
          <abbr title="Email">E:</abbr>
          <a href="mailto:#">notagreatcollege@sigma.ac.in</a>
        </address>
      </div>
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" src="card1.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Teaching:</h4>
            <p class="card-text">This is accurate represantion of how our faculty makes our Students feel..</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" src="card2.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Our Motto:</h4>
            <p class="card-text">The image above perfectly describes what our vision looks like.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" src="card3.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Student Reviews:</h4>
            <p class="card-text">The picture above perfectly describes what our students feel about us.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Students who works for us for free</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
