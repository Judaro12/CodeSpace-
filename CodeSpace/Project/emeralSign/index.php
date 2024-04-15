<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Emerald Sign</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
    <link rel="stylesheet" href="Include\style.css">
  </head>

  <body>
    
    <!-- ---------------- Navbar -------------------------------->
  <?php
  session_start(); // Always start the session at the very beginning

    require('Include/connect.php'); // Include your database connection settings

    // Then, include the correct navbar
    if (isset($_SESSION['user_id'])) {
      include('Include\navbar_session.php'); // Session navbar for logged-in users
    } else {
      include('Include\navbar_main.php'); // Main navbar for guests
    }
?>
  <h1 style="font-size: 120px; text-align: center">The Emerald Sign</h1>

  <div class="container" style="margin-top: 20px;">    
      <div class="row">        
        <div class="col-lg-6 text-align: center ">
          <h4>Handcrafted Elegance </h4>
          <br>
          <p>We specialize in the creation of exquisite wedding invitations that capture the essence of your love story. Each invitation is meticulously designed, reflecting your unique style and vision. Additionally, we offer stunning arrangements featuring dried flowers, providing an enduring and enchanting element to your wedding decor.
          <p>Embracing the philosophy of creativity and craftsmanship, our handmade invitations and floral arrangements are crafted with meticulous attention to detail. We believe in creating pieces that not only tell your love story but also reflect the beauty of your journey together. </p>
        </div>

          <div class="col-lg-6">
            <div id="videoCarousel" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                      <div class="carousel-item active">
                          <video class="d-block w-100" autoplay loop muted>
                              <source src="Videos\e-video1.mp4" type="video/mp4">
                              Your browser does not support the video tag.
                          </video>
                      </div>
                      <div class="carousel-item">
                        <video class="d-block w-100" autoplay loop muted>
                            <source src="Videos\e-video2.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                  </button>
              </div>              
           </div>       
      </div>
  </div>
  <hr>
  <div>
    <img src="Img/IMG_4345.jpg" alt="passportpic" width="100%">
  </div>
  <br>
  <h2 style="font-size: 50px; text-align: center">Watercolour Inspirations</h2>
  <div class="container mt-3"> 
      <div class="row">
        <div class="col-md-3">
          <div class="card" style="width: 18rem;">
            <img src= "Img/water1.jpeg"  class="card-img-top" alt="OnePiece">            
          </div>
        </div>

        <div class="col-md-3">         
          <div class="card" style="width: 18rem;">
            <img src="Img/water2.jpeg" class="card-img-top" alt="Naruto">            
          </div>
        </div>
        
        <div class="col-md-3">    
          <div class="card" style="width: 18rem;">
            <img src="Img/water3.jpeg" class="card-img-top" alt="MyHeroAcademia">            
          </div>
        </div>
      
        <div class="col-md-3">    
          <div class="card" style="width: 18rem;">
            <img src="Img/water4.jpeg" class="card-img-top" alt="MyHeroAcademia">            
          </div>
        </div>
      </div>

      <div class="row mt-3" >
        <div class="col-md-3">
          <div class="card" style="width: 18rem;">
            <img src= "Img/water5.jpeg"  class="card-img-top" alt="OnePiece">            
          </div>
        </div>

        <div class="col-md-3">         
          <div class="card" style="width: 18rem;">
            <img src="Img/water6.jpeg" class="card-img-top" alt="Naruto">            
          </div>
        </div>
        
        <div class="col-md-3">    
          <div class="card" style="width: 18rem;">
            <img src="Img/water7.jpeg" class="card-img-top" alt="MyHeroAcademia">            
          </div>
        </div>
      
        <div class="col-md-3">    
          <div class="card" style="width: 18rem;">
            <img src="Img/water8.jpeg" class="card-img-top" alt="MyHeroAcademia">            
          </div>
        </div>
      </div>
    </div>
  <hr>
    
  
  <?php
  include('Include/footer.php');
  ?>
    


    <script src="https://kit.fontawesome.com/a1ff07f7e6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>