<?php
  include('includes/header.php');
?>
<body>


<section>
<div class="jumbotron jumbotron-fluid doctors-hero">
  <div class="container">
    <h1 class="display-4 about-hero-title">Our Doctors</h1>

  </div>
</div>






<div class="container">

<div class="row">

    <div class="col-sm-3">  
    <div class="card single-doctor-direct" >
  <img src="/assets/images/2.jpg" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>



</div>
</div>
</div>






<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="107467831029040"
  theme_color="#00c4cc">
      </div>


</body>

<?php
  include('includes/footer.php');
?>
