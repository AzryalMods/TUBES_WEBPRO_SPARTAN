<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/Style_Detail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/7d24721300.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <title>Product Details</title>

  </head>
  <body>
    <!--  Awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="<?= base_url() ?>assets/img/logo.png" style="width: 162px; height: 34;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto ">
            <!-- Navbar -->
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="c_Home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="c_Cart">Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="c_Profile">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="c_Login">Sign In</a>
            </li>
          </ul>
          <!-- Search Button -->
          <form class="d-flex ms-auto my-4 my-lg-0">
            <input class="form-control me-2" type="search" placeholder="Search products" aria-label="Search">
            <button class="btn" type="submit">
              <img src="<?= base_url() ?>assets/img/Search.png" alt="" width="24" height="24">
            </button>
          </form>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Awal Banner -->
    <div class="bg-image">
      <img src="<?= base_url() ?>assets/img/bg.jpg" class="backgorund" alt="Responsive image">
        <div class="backgorund-text">
          <h2>PRODUCT DETAILS</h2>
        </div>
    </div>
    <!-- Akhir Banner -->

    <!--Awal Produk-->
    <!--Awal Produk-->
    <div class= "container sproduct mt-5 mb-5">
      <div class="row">
        <div class="col">
            <div class="slider">
                <div class="product">
                    <img src="<?= base_url() ?>assets/img/produk1.png" alt="" onclick="clickme(this)">
                    <img src="<?= base_url() ?>assets/img/produk2.png" alt="" onclick="clickme(this)">
                    <img src="<?= base_url() ?>assets/img/produk3.png" alt="" onclick="clickme(this)">
                    <img src="<?= base_url() ?>assets/img/produk4.png" alt="" onclick="clickme(this)">
                </div>
                <div class="preview">
                    <img src="<?= base_url() ?>assets/img/produk1.png" id="imagebox" alt="">
                </div>
            </div>
        </div>
        
        <div class="col">
          <div class="content">
              <p class="brand">Brand: CORSAIR</p>
              <h2>iCUE 7000X RGB Tempered Glass Full-Tower ATX PC Case — Black</h2>
              <div class="rating ">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
              <h2>Rp 3.000.000</h2>
              <span>Casing iCUE 7000X RGB Tempered Glass Full-Tower ATX PC menampilkan bangunan Anda di belakang tiga panel kaca temper,
                dengan ruang untuk hingga tiga radiator 360mm simultan,manajemen kabel tersembunyi,
                dan empat kipas CORSAIR SP140 RGB ELITE yang diberikan.</span><p></p>

              <button type="button">
                  <a class="fa fa-shopping-cart" href="c_Cart" >
                    <span>Add to cart</span>
                  </a>
              </button>
          </div>
       </div>
     </div>
   </div>



   <div class="related ">
    <center><h2>RELATED ITEMS</h2></center>
    <div class="row">
        <div class="columns">
            <div class="items">
                <img src="<?= base_url() ?>assets/img/produk5.png" alt="">
                <div class="details">
                    <p>5000D AIRFLOW Tempered Glass Mid-Tower ATX PC Case — White</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>Rp 1.999.000</p>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="items">
                <img src="<?= base_url() ?>assets/img/produk6.webp" alt="">
                <div class="details">
                    <p>N275R Airflow Tempered Glass Mid-Tower Gaming Case — Black</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Rp 2.000.000</p>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="items">
                <img src="<?= base_url() ?>assets/img/produk7.webp" alt="">
                <div class="details">
                    <p>iCUE 465X RGB Mid-Tower ATX Smart Case — White</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Rp 2.750.000</p>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="items">
                <img src="<?= base_url() ?>assets/img/produk8.webp" alt="">
                <div class="details">
                    <p>Crystal Series 280X RGB Tempered Glass Micro ATX Case — White</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Rp 3.999.000</p>
                </div>
            </div>
        </div>      
    </div>
</div>                       
  <!--Akhir Produk-->

    <!-- Awal Footer -->
    <footer class="bg-light text-black pt-5 pb-4">
      <div class="container text-left text-md-left">
        <div class="row text-left text-md-left">
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="mb-4"><img src="<?= base_url() ?>assets/img/logo.png" style="width: 162px; height: 34;"></h5>
            <p>Loren ipsum dolor sit amet ital consectetur lorem ipsum dolor sit amet adipisicing elit.</p>
          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-dark">Quick Links</h5>
          <p>
            <a href="#" class="text-black" style="text-decoration: none;">About</a>
          </p>
          <p>
            <a href="#" class="text-black" style="text-decoration: none;">Offers & Discounts</a>
          </p>
          <p>
            <a href="#" class="text-black" style="text-decoration: none;">Get Coupon</a>
          </p>
          <p>
            <a href="#" class="text-black" style="text-decoration: none;">Contact Us</a>
          </p>
          </div>

          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-dark">New Products</h5>
          <p>
            <a href="#" class="text-black" style="text-decoration: none;">Mouse</a>
          </p>
          <p>
            <a href="#" class="text-black" style="text-decoration: none;">Keyboard</a>
          </p>
          <p>
            <a href="#" class="text-black" style="text-decoration: none;">Headset</a>
          </p>
          <p>
            <a href="#" class="text-black" style="text-decoration: none;">Case</a>
          </p>
          </div>

          <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-dark">Support</h5>
          <p>
            <a href="#" class="text-black" style="text-decoration: none;">Frequently Asked Questions</a>
          </p>
          <p>
            <a href="#" class="text-black" style="text-decoration: none;">Terms & Conditions</a>
          </p>
          <p>
            <a href="#" class="text-black" style="text-decoration: none;">Privacy Policy</a>
          </p>
          <p>
            <a href="#" class="text-black" style="text-decoration: none;">Report a Payment Issue</a>
          </p>
          </div>
        </div>

        <hr class="mb-4">
        <div class="row align-item-center">
          <div class="col-md-7 col-lg-8">
            <p>Copyright ©2021 | Created with <i class="fas fa-heart text-danger"></i> by <a href="https://www.instagram.com/al.baxz/?hl=en" class="text-decoration-none text-dark fw-bold">Baxaraz</a></p>
          </div>
          
          <div class="col-md-1 col-lg-4">
            <div class="text-center text-md-right">
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                  <a href="#" class="btn-floating btn-sm text-black" style="font-size: 24px;"><i class="fab fa-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="btn-floating btn-sm text-black" style="font-size: 24px;"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="btn-floating btn-sm text-black" style="font-size: 24px;"><i class="fab fa-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
    </footer>
    <!-- Akihr Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
      function clickme(smallImg) {
          var fullImg = document.getElementById("imagebox");
          fullImg.src = smallImg.src;
      }
  </script>

  <script type="text/javascript">
        $(function(){
          $.scrollUp();
        });
        </script>

  </body>
</html>