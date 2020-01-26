<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>OneTwoSeven</title>

    <!-- Bootstrap core CSS -->
    <link href="/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <style>
      .bd-placeholder-img { font-size: 1.125rem; text-anchor: middle; -webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none; }
      @media (min-width: 768px) { .bd-placeholder-img-lg { font-size: 3.5rem; } }
    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="/index.php">OneTwoSeven</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"><a class="nav-link" href="/index.php">Home<span class="sr-only">(current)</span></a></li>
        <li class="nav-item"><a class="nav-link" href="/stats.php">Statistics</a></li>
        <li class="nav-item"><a class="nav-link disabled" href="#">Admin</a></li>
      </ul>
    </div>
  </nav>
</header>

<?php
function username() { $ip = $_SERVER['REMOTE_ADDR']; return "ots-" . substr(str_replace('=','',base64_encode(substr(md5($ip),0,8))),3); }
function password() { $ip = $_SERVER['REMOTE_ADDR']; return substr(md5($ip),0,8); }
?>

<main role="main">

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- START THE FEATURETTES -->
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Express checkout.<span class="text-muted"> Yeah!</span></h2>
	<p class="lead">Your personal account is ready to be used:<br><br>Username: <b><?php echo username() ?></b><br>Password: <b><?php echo password() ?></b><br><br>You can use the provided credentials to upload your pages via sftp://onetwoseven.htb. Your personal home page will be available <a href="http://onetwoseven.htb/~<?php echo username() ?>">here</a>.<br><br><font size="-1">It may take up to one minute for all backend processes to properly identify you.</font></p>
      </div>
      <div class="col-md-5">
        <img src="dist/img/black-and-white-computer-device-163017.jpg" width="400" height="400"><title>Calc</title>
      </div>
    </div>

    <hr class="featurette-divider">

  </div><!-- /.container -->

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2019 OneTwoSeven, Dec. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a> &middot; <a href="attribution.php">Attribution</a></p>
  </footer>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script></body>
</html>

