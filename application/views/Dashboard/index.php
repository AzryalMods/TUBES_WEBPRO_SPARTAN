<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/Style_Home.css">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
		<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
		<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
		<script src="js/jquery.scrollUp.min.js"></script>
    		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    		<title>Keranjang</title>
	</head>
	<center>
	<body>
		<!-- header ni boss -->
		<header>
			<img class="logo" src="assets\img\logo.png" alt="logo">
			<nav>
                <?php foreach($user as $data) {?>
				<ul class="navbar">
					<li><a href="<?php echo site_url() ?>">Home</a></li>
					<li><a href="<?php echo site_url('Profile') ?>">Profile</a></li>
					<li><a href="<?php echo site_url('Cart') ?>">Cart</a></li>
					<li><a href="<?php echo site_url('c_home/login') ?>">Halo, <?php echo $data->$nama?></a></li>
				</ul>
                <?php } ?>
			</nav>
			<!-- <a class="cta" href="Login.html"><button>Sign In</button></a> -->
		</header>
		<!-- video? -->
		<div>
			<video controls autoplay>
				<source src="assets\video.mp4">
			</video>
		</div><br>
		<h1 class="h">EXPLORE PRODUCTS</h1><br>
		<div class="barang">
			<a href="<?php echo site_url('Detail') ?>">
			<img src="assets\img\ic-keyboard.png">
			</a>
			<a href="<?php echo site_url('Detail') ?>">
			<img src="assets\img\ic-mouse.png">
			</a>
			<a href="<?php echo site_url('Detail') ?>">
			<img src="assets\img\ic-headset.png">
			</a>
			<a href="<?php echo site_url('Detail') ?>">
			<img src="assets\img\ic-fan.png">
			</a>
			<a href="<?php echo site_url('Detail') ?>">
			<img src="assets\img\ic-ram.png">
			</a>
			<a href="<?php echo site_url('Detail') ?>">
			<img src="assets\img\ic-psu.png">
			</a>
			<a href="<?php echo site_url('Detail') ?>">
			<img src="assets\img\ic-case.png">
			</a>
			<a href="<?php echo site_url('Detail') ?>">
			<img src="assets\img\ic-mousepad.png">
			</a>
			<a href="<?php echo site_url('Detail') ?>">
			<img src="assets\img\ic-webcam.png">
			</a>
			<a href="<?php echo site_url('Detail') ?>">
			<img src="assets\img\ic-ssd.png">
			</a>
			<a href="<?php echo site_url('Detail') ?>">
			<img src="assets\img\ic-gpc.png">
			</a>
		</div>
		<hr>
		<br>
		<h1 class="h">HOT PRODUCTS</h1><br>
			<!-- SLIDER NIIII -->
			<div class="carousel" data-flickity>
				<div><a href="<?php echo site_url('Detail') ?>"><img src="assets\img\sl-mouse.jpg" class="carousel-cell"></a></div>
				<div><img src="assets\img\sl-keyboard.jpg" class="carousel-cell"></div>
				<div><img src="assets\img\sl-headset.jpg" class="carousel-cell"></div>
				<div><img src="assets\img\sl-controller.jpg" class="carousel-cell"></div>
			</div>
			<hr>
		<div>
		<script type="text/javascript">
		$(function(){
 		 $.scrollUp();
		});
		</script>
		</div>	
		<div><footer class="footer">
			<div class="footer-1">
				<h1><img class="logo" src="assets\img\logo.png"></h1><br>
				<p>Spartan.gg merupakan website yang dibuat untuk memenuhi spesifikasi
				tugas besar matakuliah Pemrograman Web pada Semester 5 di Jurusan 
				S1 Rekayasa Perangkat Lunak Fakultas Informatika Telkom University Bandung. Tugas ini dikerjakan dengan penuh semangat dan juga kerja cerdas.</p><br>
				<ul>
					<li>
						Afan Maulid Rizqi (1302194099)
					</li>
					<li>
						Azryal Achmad Ramdani (1302194031)
					</li>
					<li>
						Dhafin Putra Aldi (1302190087)
					</li>
					<li>
						M. Habibullah Alfatah Bakara (1302190056)
					</li>
					<li>
						Sarja Asra Winata (1302194009)
					</li>
				</ul>
				<hr>
			</div><br>

		
			<br>
			<div class="footer-2">
				<p>All Right Reserverd &copy;Spartan.gg 2021 </p>
			</div>
		</footer></div>
	</body>
	</center>
</html>