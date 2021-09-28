<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Corp Theme</title>
    <link href='https://fonts.googleapis.com/css?family=Francois+One|Source+Sans+Pro:200,300,400,600,700,900,700italic' rel='stylesheet' type='text/css'>

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">    
    <!-- build:css css/tidy.css -->
    <link rel="stylesheet" href="css/app.scss" />
    <!-- /build -->

  </head>
  <body>


<header class="top home">

    <div class="row">
      <div class="large-12 columns">
        <nav class="top-bar" data-topbar>
          <ul class="title-area">
            <li class="name">
              <a href="index.html"><i class="fa fa-university"></i> CORP</a>
            </li>
             <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
          </ul>

          <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="left">
              <li><a href="about.html"><span data-hover="About">About</span></a></li>
              <li><a href="news.html"><span data-hover="News">News</span></a></li>
              <li><a href="contact.html"><span data-hover="Contact">Contact</span></a></li>
              <li class="has-dropdown">
                <a href="services.html"><span data-hover="Services">Services</span></a>
                <ul class="dropdown">
                  <li><a href="page.html">First Service</a></li>
                  <li><a href="page.html">Second Service</a></li>
                  <li><a href="page.html">Third Service</a></li>
                </ul>
              </li>
            </ul>

            <ul class="right social">
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>

          </section>
        </nav>
      </div>
    </div>

    <section class="business__header">
    <div class="row">
      
        <div class="small-12 medium-8 columns">


          <h3><i class="fa fa-bar-chart-o"></i> 611.45 <span class="up">+4.23</span> <span class="down">+0.70%</span> GOOG:US</h3>

        </div>

        <div class="small-12 medium-4 columns highlow">
          <h3>High 615.98 Low 603.00</h3>
        </div>

    </div>
    </section>

</header>

<main>

 {{-- content here --}}
 @yield('content')
</main>
<footer class="footer">

    <div class="row">
  
      <aside class="footer__widget footer__widget--address">
  
          <div class="title-area">
            <a href="#" class="logo"><i class="fa fa-university"></i> CORP</a>
          </div>
  
          <p>228 Park Ave S<br/>
          New York, NY 10003-1502</p>
          <a href="tel:518-474-4429"><i class="fa fa-phone"></i> 518-474-4429</a><br>
          <a href="mailto:info@email.com"><i class="fa fa-envelope-o"></i> info@email.com</a>
          <p class="watb"><a href="http://watb.co.uk" target="_blank">Web Design Agency</a> WATB.</p>
  
      </aside>
  
      <aside class="footer__widget">
  
        <h3>Latest Posts</h3>
  
              <article class="footer__article">
                <div class="footer__article__header">
                      <img src="images/5.jpg" alt="image description"><h1>Some blog title here</h1>
                </div>          
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt…</p>                
              </article>     
  
              <article class="footer__article">
                <div class="footer__article__header">
                      <img src="images/5.jpg" alt="image description"><h1>Some blog title here</h1>
                </div>          
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt…</p>                
              </article>             
  
      </aside>
  
      <aside class="footer__widget footer__widget--cloud">
  
        <h3>Tag Cloud</h3>
  
        <div class="tagcloud">
  
        <a href="#">News</a><a href="#">Gallery</a><a href="#">Trending</a><a href="#">Politics</a><a href="#">Sports</a><a href="#">Video</a>
  
        </div>
  
      </aside>
  
    </div>
  
  </footer>
  
  
  
    <!-- build:js js/jquery.min.js -->
    <script src="bower_components/jquery/dist/jquery.js"></script>
    <!-- /build -->
  
    <!-- build:js js/build.min.js -->
    <script src="bower_components/foundation/js/foundation.js"></script>
    <script src="js/app.js"></script>
    <!-- /build -->
  
    </body>
  </html>
  