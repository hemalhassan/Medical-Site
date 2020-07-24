<?php
  include('includes/header.php');
?>

<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
   

  
    <div class="fadeIn first">
      <img src="/assets/images/black_logo.png" id="icon" alt="" />
    </div>

   
    <form>
    <input type="mail2" id="forget" class="fadeIn second forget-field" name="forget-mail" placeholder="email address">
      <input type="submit" class="fadeIn fourth" value="Reset">
    </form>


    <div id="formFooter">
      <a class="underlineHover alignright" href="login.php">Back to Login Page</a>
    </div>

  </div>
</div>

<style>


/* STRUCTURE */

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column; 
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
  padding-top:200px;
  margin-top:-120px; 
  background-color: #16193B;
}

#formContent {
 
  border-radius: 10px 10px 10px 10px;
  background: #fff;
  padding: 30px;
  width: 90%;
  max-width: 450px;
  position: relative;
  padding:0px;
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}

#formFooter {
  background-color: #f6f6f6;
  border-top: 1px solid #dce8f1;
  padding: 25px;
  text-align: center;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
}

.forget-field::placeholder {
    
    color: #00c4cc !important;

}




input[type=button], input[type=submit], input[type=reset]  {
  background-color: #00c4cc;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  transition: all 0.3s ease-in-out;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;

}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
  background-color: #00c4cc;
}

input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
  transform: scale(0.95);
}

input[type=mail2] {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  transition: all 0.5s ease-in-out;
  border-radius: 5px 5px 5px 5px;
}

input[type=mail2]:focus {
  background-color: #fff;
  border-bottom: 2px solid #00c4cc;
}


.underlineHover{
    padding-bottom:20px;
}
*:focus {
    outline: none;
} 

#icon {
  width:60%;
}
@media screen and (max-width: 992px) {
    .wrapper {
    margin-top:0px; 
    padding-top:20px;
    }
}


</style>
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

