<html>
<head>
    <title> Welcome to Noahs Pet Clinic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="./css/aos.css" />
    <script src="./js/aos.js"></script>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top ">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./index.php"><img class="main-logo" src="images/logo.jpg"></a>
          </div>
          <div class="collapse navbar-collapse " id="myNavbar">
            <ul class="nav navbar-nav navbar-right ">
              <li><a href="./gallery.php">GALLERY</a></li>
              <li><a href="./index.php#contact">CONTACT</a></li>
              <li><a href="./index.php#about">ABOUT</a></li>
              <li><a href="./pet-list.php">DATABASE</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="images/slider/2.jpg" alt="Chania">
            <div class="carousel-caption carousel-caption-alt">
              <!-- <p class="brand-name-p">Welcome to<p> -->
              <h1 class="brand-name-caption">Noahs Pet Clinic</h1>
              <p class="brand-name-p">We'll take care of your loved ones!</p>
            </div>
          </div>
      
          <div class="item">
            <img src="images/slider/3final.jpg" alt="Chicago">
            <div class="carousel-caption carousel-caption-alt">
                <!-- <h1>Welcome to<h1> -->
                    <h1 class="brand-name-caption">Noahs Pet Clinic</h1>
                    <p class="brand-name-p">We'll take care of your loved ones!</p>
            </div>
          </div>
      
          <div class="item">
            <img src="images/slider/1.jpg" alt="New York">
            <div class="carousel-caption carousel-caption-alt">
                <!-- <h1>Welcome to<h1> -->
                    <h1 class="brand-name-caption">Noahs Pet Clinic</h1>
                    <p class="brand-name-p">We'll take care of your loved ones!</p>
            </div>
          </div>
        </div>
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    
      <div class="container container-npc" id="about" data-aos="fade-up" data-aos-duration="1500">
        <div class="row">
            <div class="col-sm-6" data-aos="fade-right" data-aos-duration="1500">
                <img src="images/about.jpg" class="img-responsive"></span>
              </div>
          <div class="col-sm-6">
            <h1 class="about_h1">Delivering leading pet health, with love, when you need us!</h2>
            <h4 class="about_h4">NPC provide primary and specialist care for companion animals and their families. We are proud of our ability to diagnose and treat conditions in pets without over vaccinating, over diagnosing or over treating. Pets need people to make health decisions for them. We help you make these decisions so that your companions live satisfying and comfortable lives.</h4>
           
            <button class="btn btn-default btn-lg about_button">Get in Touch</button>
          </div>

        </div>
      </div>
      
      <div class="container container-npc pricing-form bg-grey" data-aos="fade-up" data-aos-duration="1500" id="register">
        <h1>Register your pet today!</h1>
        <h4>We are always delighted to meet new pets and their people. If you would like to pre-register before visiting us simply fill in this form!</h4>
        <form action="pet.php" method="POST" id="pet_register">
                    <input  type="hidden" name="action" value="add-pet">
                    <div class="row">
                          <div class="col-sm-4">
                              <input id="pet_name" type="text" class="form-control services-form" name="name" placeholder="Name of the pet">
                          </div>
                          <div class="col-sm-3">
                            <input id="pet_age" type="number" class="form-control services-form" name="age" placeholder="Age of the pet">
                          </div>       
                          <div class="col-sm-3">
                            <input id="pet_breed" type="text" class="form-control services-form" name="breed" placeholder="Breed eg. Alsatian">
                          </div>            
                          <div class="col-sm-2">
                              <button id="add_pet" class="btn btn-default  btn-lg about_button" type="submit">Register</button>
                          </div>
                    </div>            

        </form>
      </div> 

    <div class="container container-npc padding-100" id="contact"  data-aos="fade-up" data-aos-duration="1500">
        
        <div class="row">
          <div class="row">
            <div class="col-sm-9"><h1 class="about_h1">Contact us and we'll get back to you within 24 hours.</h1></div>
            <div class="col-sm-3" data-aos="zoom-in" data-aos-duration="1500"><img src="images/theme-alt.jpg" class="img-responsive"></div>
          </div>
          <div class="col-sm-5">
            <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
            <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
            <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
          </div>
          <div class="col-sm-7">
            <div class="row">
              <div class="col-sm-6 form-group">
                <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
              </div>
              <div class="col-sm-6 form-group">
                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
              </div>
            </div>
            <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
            <div class="row">
              <div class="col-sm-12 form-group">
                <button class="btn btn-default pull-right btn-lg about_button" type="submit">Let us connect</button>
              </div>
            </div>
          </div>
        </div>

          <img data-aos="zoom-in-up" data-aos-duration="1500" src="images/map.jpg" style="width:100%">
        </div>
      </div>   
        
        <footer class="container-fluid text-center bg-4">
          <a href="#myPage" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
          </a>
          <p>Copyright 2020 @ <a href="#" class="npc_link">Noahs Pet Cinic</a></p>
        </footer> 
</body>
<script>
 $("#pet_register").submit(function(e){
   e.preventDefault();
   var form = $(this);
   var url = form.attr('action');
  $.ajax({
    type: "POST",
    url: url, 
    data: form.serialize(),
    success: function(result){
      if(result)
        alert("Hurray! Your pet is now a member of NPC!");
    }
  });
});
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</html>