<!DOCTYPE html>
<html>
<head>
<title>Reponsive HTML Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/css-bootstrap.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Questrial" rel="stylesheet" type="text/css">
<link href="css/css-style.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header class="main__header">
  <div class="container">
    <nav class="navbar navbar-default" role="navigation"> 
      <!-- Brand and toggle get grouped for better mobile display --> 
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="navbar-left">
        <ul class="nav navbar-nav navbar-collapse" id="bs-example-navbar-collapse-1">
          <li class="active"><a href="index.html">Home</a></li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
            <ul class="dropdown-menu">
              <li><a href="index_fixed.html">Home / Fixed</a></li>
              <li><a href="index_with_blog.html">Home + Blog</a></li>
              <li><a href="portfolio.html">Portfolio</a></li>
              <li><a href="typography.html">Typography</a></li>
              <li><a href="shortcodes.html">Shortcodes</a></li>
              <li><a href="blog.html">Blog &amp; News</a></li>
              <li><a href="tables.html">Tables</a></li>
              <li><a href="faq.html">FAQ</a></li>
            </ul>
          </li>
          <li><a href="left_sidebar.html">left sidebar</a></li>
        </ul>
        <div class="navbar-header">
          <h1 class="navbar-brand"><a href="index.html"><span>CRICKET</span><br>
            <small>html template</small></a></h1>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1,#bs-example-navbar-collapse-2"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <ul class="nav navbar-nav second navbar-collapse" id="bs-example-navbar-collapse-2">
          <li><a href="right_sidebar.html">right sidebar</a></li>
          <li><a href="full_width.html">full page</a></li>
          <li><a href="contact.html">contact us</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </nav>
  </div>
</header>
<section class="slider">
  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel"> 
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="">
      </li><li data-target="#myCarousel" data-slide-to="1" class="active">
      </li><li data-target="#myCarousel" data-slide-to="2" class="">
    </li></ol>
    <div class="carousel-inner">
      <div class="item"> <img data-src="images/slider/slider1.jpg" alt="First slide" src="images/slider-slider1.jpg">
        <div class="container">
          <div class="carousel-caption">
            <h1>Morbi nec lacinia tellus. Aenean fringilla pellentesque ante ipsum</h1>
            <p>Phasellus rhoncus volutpat lectus, at posuere.</p>
            <p><a class="btn btn-primary" href="#" role="button">Try Now</a></p>
          </div>
        </div>
      </div>
      <div class="item active"> <img data-src="images/slider/slider2.jpg" alt="Second slide" src="images/slider-slider2.jpg">
        <div class="container">
          <div class="carousel-caption">
            <h1>Dictum, rutrum augue. Integer vel egestas urna vestibulum integer hendrerit</h1>
            <p>Vestibulum ultrices sed augue a bibendum.</p>
            <p><a class="btn btn-primary" href="#" role="button">Details</a></p>
          </div>
        </div>
      </div>
      <div class="item"> <img data-src="images/slider/slider3.jpg" alt="Third slide" src="images/slider-slider3.jpg">
        <div class="container">
          <div class="carousel-caption">
            <h1>Lorem ipsum dolor sit amet, consectetur</h1>
            <p>Nunc sit amet eros tempus, volutpat urna at.</p>
            <p><a class="btn btn-primary" href="#" role="button">Buy</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon carousel-control-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon carousel-control-right"></span></a> </div>
</section>
<!--end of slider section-->
<section class="main__middle__container">
  <div class="container">
    <div class="row">
      <h2 class="text-center">Lorem ipsum dolor sit amet, <span>consectetuer adipiscing</span> elit. Donec odio. Quisque volutpat mattis eros. Aenean ullamcorper sem. </h2>
      <p class="text-center big-paragraph">Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
    </div>
  </div>
  <div class="text-center three-blocks">
    <div class="container">
      <div class="row">
        <h2 class="block__title"><span>About Us</span></h2>
        <div class="col-md-6"> <img src="images/content__images-pic1.jpg" alt="image" class="img-rounded img-responsive">
          <h3><a href="#">Donec odio. Quisque volutpat</a></h3>
          <p><small>Phasellus ultrices nulla quis nibh. Quisque a lectus.</small></p>
          <p>Quisque et aliquam mauris. Nunc id cursus quam. Curabitur aliquam ornare ante et commodo. Nulla eu erat id massa egestas eleifend. Sed id venenatis.</p>
          <p><a class="btn btn-lg btn-default" href="#" role="button">Learn more</a></p>
        </div>
        <div class="col-md-6"> <img src="images/content__images-pic2.jpg" alt="image" class="img-rounded img-responsive">
          <h3><a href="#">Phasellus ultrices nulla quis nibh</a></h3>
          <p><small>Phasellus ultrices nulla quis nibh. Quisque a lectus.</small></p>
          <p>Quisque et aliquam mauris. Nunc id cursus quam. Curabitur aliquam ornare ante et commodo. Nulla eu erat id massa egestas eleifend. Sed id venenatis.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
        </div>
      </div>
    </div>
  </div>
  <div class="row grey-info-block text-center">
    <div class="container">
      <h2 class="">Pellentesque egestas sem suspendisse commodo ullamcorper ...</h2>
      <p class="">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore eritatis et quasi architecto beatae vitae dicta sunt explicabo.
        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione 
        voluptatem sequi nesciunt.</p>
      <p><a class="btn btn-info" href="#" role="button">Buy it</a><a class="btn btn-default" href="#" role="button">Learn More</a></p>
    </div>
  </div>
  <section class="recent-posts">
    <div class="container">
      <div class="row icons__blocks">
        <h2 class="text-center block__title"><span>services</span></h2>
        <div class="col-md-4">
          <h3><a href="#">Digital Experience</a></h3>
          <div class="text-center"> <img src="images/content__images-image.jpg" alt="image" class="img-responsive img-rounded">
            <p>Quisque et aliquam mauris. Nunc id cursus quam. Curabitur aliquam ornare ante et commodo. Nulla eu erat id massa egestas eleifend. Sed id venenatis.</p>
            <p><a href="#" class="btn btn-default btn-lg">Learn more</a></p>
          </div>
        </div>
        <div class="col-md-4">
          <h3><a href="#">Web Publication</a></h3>
          <div class="text-center"> <img src="images/content__images-image2.jpg" alt="image" class="img-responsive img-rounded">
            <p>Quisque et aliquam mauris. Nunc id cursus quam. Curabitur aliquam ornare ante et commodo. Nulla eu erat id massa egestas eleifend. Sed id venenatis.</p>
            <p><a href="#" class="btn btn-default btn-lg">Learn more</a></p>
          </div>
        </div>
        <div class="col-md-4">
          <h3><a href="#">Pixel Perfect</a></h3>
          <div class="text-center"> <img src="images/content__images-image1.jpg" alt="image" class="img-responsive img-rounded">
            <p>Quisque et aliquam mauris. Nunc id cursus quam. Curabitur aliquam ornare ante et commodo. Nulla eu erat id massa egestas eleifend. Sed id venenatis.</p>
            <p><a href="#" class="btn btn-default btn-lg">Learn more</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h3>About</h3>
        <p>We strive to deliver a level of service that exceeds the expectations of our customers. <br>
          <br>
          If you have any questions about our products or services, please do not hesitate to contact us. We have friendly, knowledgeable representatives available seven days a week to assist you.</p>
      </div>
      <div class="col-md-3">
        <h3>Tweets</h3>
        <p><span>Tweet</span> <a href="#">@You</a><br>
          Etiam egestas, ipsum posuere accumsan sollicitudin, nulla mauris volutpat sem, sit amet rutrum risus. </p>
        <p><span>Tweet</span> <a href="#">@You</a><br>
          Quisque porta tellus vitae adipiscing molestie. Mauris et lacus blandit, malesuada.</p>
      </div>
      <div class="col-md-3">
        <h3>Mailing list</h3>
        <p>Subscribe to our mailing list for offers, news updates and more!</p>
        <br>
        <form action="#" method="post" class="form-inline" role="form">
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail2">your email:</label>
            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="your email:">
          </div>
          <button type="submit" class="btn btn-primary">subscribe</button>
        </form>
      </div>
      <div class="col-md-3">
        <h3>Social</h3>
        <p>123 Business Way<br>
          San Francisco, CA 94108<br>
          USA<br>
          <br>
          Phone: (888) 123-4567<br>
          Fax: (887) 123-4567<br>
          <br>
        </p>
        <div class="social__icons"> <a href="#" class="socialicon socialicon-twitter"></a> <a href="#" class="socialicon socialicon-facebook"></a> <a href="#" class="socialicon socialicon-google"></a> </div>
      </div>
    </div>
    <hr>
    <p class="text-center">&copy; Copyright ABC Company. All Rights Reserved.</p>
  </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script type="text/javascript" src="js/2681-js-jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/8452-js-bootstrap.min.js"></script> 
<script type="text/javascript">

$('.carousel').carousel({
  interval: 3500, // in milliseconds
  pause: 'none' // set to 'true' to pause slider on mouse hover
})
</script>
</body>
</html>
