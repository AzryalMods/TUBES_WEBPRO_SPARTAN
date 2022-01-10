<!DOCTYPE html>
<html>
<head>
    <!-- meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <title>Login / Sign Up Form</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/7d24721300.js" crossorigin="anonymous"></script>
    
    <link rel="shortcut icon" href="<?= base_url() ?>assets/favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/Style_Login.css">
    
    <!-- javascript -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
</head>
<body>

<div class=" container p-3 bg-secondary text-white">
                <form class="row justify-content-center" method="post" action="<?php echo base_url().'c_daftar/daftarUser';?>">
                    <div style="margin-top:50px;">
                        <h5 class="text-center mt-5 mb-4"><b>"DAFTAR AKUN"</b></h5>
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                        <br>

                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password" name="password">
                        <br>

                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                        <br>

                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                        <br>  
                    </div>
                    <div class="float-end mb-5">
                        <a class="btn btn-danger" id="back" href="c_Login">Batalkan</a>
                        <button type="submit" class="btn btn-primary" id="save">Submit</button>
                    </div>
                </form>
                </div>
  
</body>