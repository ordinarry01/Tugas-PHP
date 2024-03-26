<!-- file PHP -->
<?php 
	$nama = "Humam Rafi Rachmad";
	$TTL = "Medan, 03 Mei 2003";
	$NIM = 210801005;
	$prodi = "S1-Fisika";
	$fakultas = "FMIPA";
	$alamat = "Jl. Pembangunan, GG. Pribadi, Medan";
	$email =  "humamrr63@gmail.com";
	$telp = "089613357381";
	$universitas = "Universitas Sumatera Utara";
?>

<!-- file HTML -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tugas 1 PHP</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
	<!-- Navigation Bar -->
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
				<div class="container-fluid">
					<a class="navbar-brand" href="#" style="font-weight: bold;">
						<img src="./image/LOGO_ELDAS3-removebg-preview.png" alt="Bootstrap" style="object-fit: scale-down; height: 60px;">
						Laboratorium Elektronika Dasar</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="./home.html" target="maincontent">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./datatables.html" target="maincontent">Database</a>
						</li>
						</ul>
						<form class="d-flex" role="search">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success" type="submit">Search</button>
						</form>
					</div>
				</div>
			</nav>
			<!-- Content HTML yang dimasukan data PHP ada disini -->
			<div class="jumbotron">
				<h2>
					Profile Asisten Laboratorium <br> <br>
				</h2> 
				<div class="container">
					<img style="border-radius: 8px; width:20%" src="./image/Gallery1.jpeg" alt="Gambar">
					<br> <br>
					<fieldset>
						<ol>
							<li>Nama: <?= $nama ?> </li>
							<li>Email: <?= $email ?> </li>
							<li>No. Telp: <?= $telp ?> </li>
							<li>Tempat Tanggal Lahir: <?= $TTL ?> </li>
							<li>NIM: <?= $NIM ?> </li>
							<li>Program Studi: <?= $prodi ?> </li>
							<li>Fakultas: <?= $fakultas ?> </li>
							<li>Universitas: <?= $universitas ?></li>
							<li>Alamat: <?= $alamat ?> </li>
						</ol>
					</fieldset>
				</div>
			</div>
		</div>
	</div>
	<!-- Ini hanya content tambahan saja -->
	<div class="row">
		<div class="col-md-4">
			<h2>
				Heading
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
		</div>
		<div class="col-md-4">
			<h2>
				Heading
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
		</div>
		<div class="col-md-4">
			<h2>
				Heading
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
		</div>
	</div>
</div>
	<!-- File JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>