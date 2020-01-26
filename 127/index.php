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
        <!-- Only enable link if access from trusted networks admin/20190212 -->
        <!-- Added localhost admin/20190214 -->
	<?php if ( $_SERVER['REMOTE_ADDR'] == "127.0.0.1" || $_SERVER['REMOTE_ADDR'] == "104.24.0.54" ) { ?>
	  <li class="nav-item"><a id="adminlink" class="nav-link enabled" href="http://onetwoseven.htb:60080/">Admin</a></li>
	<?php  } else { ?>
	  <li class="nav-item"><a id="adminlink" class="nav-link disabled" href="http://onetwoseven.htb:60080/">Admin</a></li>
	<?php  } ?>
      </ul>
    </div>
  </nav>
</header>

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="dist/img/ai-codes-coding-97077.jpg">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>OneTwoSeven</h1>
            <p>There is no place like OneTwoSeven - your free home page hoster.</p>
            <p><a class="btn btn-lg btn-primary" href="/signup.php" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="dist/img/business-code-coding-943096.jpg">
        <div class="container">
          <div class="carousel-caption">
            <h1>127.0.0.1</h1>
            <p>We provide static web site hosting for free to all interested people. Just sign up and get your unique username and a password.</p>
            <p><a class="btn btn-lg btn-primary" href="/signup.php" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="dist/img/ai-artificial-intelligence-codes-247791.jpg">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>DoubleColonOne - your future home!</h1>
            <p>Coming soon - the IPv6 only homepage hosting service called DoubleColonOne. All accounts will be transferred when the service is ready - and we promise your page visits will be half of what you had on IPv4!</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up tomorrow</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- START THE FEATURETTES -->

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Secure SFTP Upload.<span class="text-muted"> WTF!</span></h2>
        <p class="lead">We provide secure upload to your account using industry standard strong encryption algorithms. Noone can spy on your password. Noone will see what precious files you upload.</p>
      </div>
      <div class="col-md-5">
        <img src="dist/img/cyber-security-cybersecurity-device-60504.jpg" width="400" height="400"><title>SSH</title>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Static file hosting.<span class="text-muted"> Retro!</span></h2>
        <p class="lead">Like in the good old times! Fire up your Netscape Navigator 4.0 and browse your pages like in the last century! Use animated GIFs like in the 90s, upload Java applets for scrolling banners. Back to the roots!</p>
        <p class="lead">Sounds cool? It does but we wanted to provide PHP hosting as well for all of you but we could not master chroot() handling for Apache properly. Therefore we provided you our MVP only. Just like twitter only allows 140 characters we only allow old-school pages.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="dist/img/caffeine-coffee-cup-6347.jpg" width="400" height="400"><title>Coffee</title>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">There is one more thing. <span class="text-muted"> IPv6!</span></h2>
        <p class="lead">Ever wanted to have a small audience like in the good old days? Migrate your pages to our new IPv6 only service and you can half your audience. Stay tuned for the announcement of this service.</p>
      </div>
      <div class="col-md-5">
        <img src="dist/img/abstract-ai-art-373543.jpg" width="400" height="400"><title>Coffee</title>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Denial of Service.<span class="text-muted"> Nope!</span></h2>
	<p class="lead">We want to make all clients happy. We implemented state of the art Donkey's Denial of Service protection - thanks guys! We may drop SYNs for some time if the error count per source IP address is too high. Our statistics show that no SYN packets got harmed since implementation of this feature.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="dist/img/donkey-ddos.jpg" width="400" height="400"><title>Coffee</title>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

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

