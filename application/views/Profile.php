<link rel="stylesheet" href="css/Style_Profile.css">
<style>  
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,400&display=swap');
    </style>

    <!-- HEADER -->
  <head> 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/Style_Profile.css">
    <link rel="stylesheet" type="text/css" href="styles.css?version=51">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/7d24721300.js" crossorigin="anonymous"></script>
    <title>Profile</title>

  </head>

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


      
<!-- BODY PROFILE -->
<div class="page-content page-container" id="page-content">
    <div class="padding center">
        <!-- <div class="row container d-flex ms-auto"> -->
            <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mt-6">
                <!-- <div class="card user-card-full"> -->
                    <div class="row m-lg-auto">
                        <div class="row-cols-sm-auto bg-gradient user-profile">
                            <div class="card-block text-center text-white">
                            <div class="fotoprofil"> <img src="assets/img/rei.jpg" class="img-radius" alt="User-Profile-Image"> </div>
                                <h3 class="text-color">DHAFINGEMING</h3>
                            </div>
                        </div>
                        <form method="post" action="<?php echo base_url().'c_Profile/ubah';?>">
                        <div class="col-sm-auto">
                            <div class="card-block">
                                <h6 class="bios b-b-default ">Profile</h6>
                                <div class="row">
                                    <div class="row-cols-sm-auto">
                                        <p class="bios">Nama :</p>
                                        <input class="form-control"  type="text" name="nama" 
							                          value="<?php foreach ($profile as $data){echo $data['nama'];}?>"></input> <br>
                                    </div>
                                    <div class="row-cols-sm-auto">
                                        <p class="bios">Tanggal Lahir :</p>
                                        <input class="form-control"  type="text" name="tanggallahir" 
							                          value="<?php foreach ($profile as $data){echo $data['tanggallahir'];}?>"></input> <br>
                                    </div>
                                    <div class="row-cols-sm-auto">
                                        <p class="bios">Jenis Kelamin :</p>
                                        <input class="form-control"  type="text" name="jeniskelamin" 
							                          value="<?php foreach ($profile as $data){echo $data['jeniskelamin'];}?>"></input> <br>
                                    </div>
                                    <div class="row-cols-sm-auto">
                                        <p class="bios">E - Mail :</p>
                                        <input class="form-control"  type="text" name="email" 
							                          value="<?php foreach ($profile as $data){echo $data['email'];}?>"></input> <br>
                                    </div>
                                    <div class="row-cols-sm-auto">
                                        <p class="bios">Nomor HP :</p>
                                        <input class="form-control"  type="text" name="nomorhp" 
							                          value="<?php foreach ($profile as $data){echo $data['nomorhp'];}?>"></input> <br>
                                    </div>
                                    <div class="row-cols-sm-auto">
                                      <p class="bios">Alamat :</p>
                                      <input class="form-control"  type="text" name="alamat" 
							                        value="<?php foreach ($profile as $data){echo $data['alamat'];}?>"></input> <br>

                                      <input hidden class="form-control"  type="text" name="id_user" 
							                        value="<?php foreach ($profile as $data){echo $data['id_user'];}?>"></input> <br>
                                      
                                      <button class="btn btn-primary" type = "submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end -->


<!-- footer -->
<!-- Awal Footer -->
<div class="col-xl-auto col-md-auto"></div>
<div class="row m-lg-auto"></div>
<footer class="bg-light text-black pt-5 pb-4">
  <div class=" container text-left text-md-left">
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