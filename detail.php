<!DOCTYPE html>
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Pangandaran Traveling
  </title>
  <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
    
   body {
            font-family: 'Arial', sans-serif;
        }
        .header {
            position: relative;
            text-align: center;
            color: white;
        }
        .header img {
            width: 100%;
            height: auto;
        }
        .header .text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .header .text h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .header .text h2 {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .section-title {
            text-align: center;
            margin: 2rem 0;
            font-size: 2rem;
            font-weight: bold;
        }
        .description {
            margin: 2rem 0;
        }
        .description p {
            font-size: 1rem;
        }
        .assets img {
            width: 100%;
            height: auto;
            margin-bottom: 1rem;
        }
  </style>
 </head>
 <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Pangandaran Traveling</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pemesanan.php">Pemesanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="daftar.php">Daftar Pemesanan</a>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
 <body>

 <?php
include 'lib/koneksi.php';

$id_pemesanan = htmlentities($_GET['id_pemesanan']);

$sql = "SELECT * FROM pemesanan where id_pemesanan = '$id_pemesanan' and is_deleted=0";

$query = mysqli_query($db,$sql);

if(mysqli_num_rows($query)==0)
{
    echo 'tidak ada'; exit;
}else{
    $detail = mysqli_fetch_row($query);
?>

<main class="flex-shrink-0">
  <div class="container">
    <form method="post" action="lib/proses.php">
<div class="card mt-2">
  <div class="card-header bg-dark text-white">
    Detail Pemesanan Paket Wisata #<?=$detail[0]?>
  </div>
  <div class="card-body">
	<div class="mb-3">
	  <label for="nama_pemesanan" class="form-label">Nama Lengkap</label>
	  <div id="nama_pemesan"><?=$detail[1]?></div>
	</div>
	<div class="mb-3">
	  <label for="hp_pemesan" class="form-label">Nomor Handphone</label>
	  <div id="hp_pemesan"><?=$detail[2]?></div>
	</div>
	<div class="mb-3">
	  <label for="waktu_wisata" class="form-label">Waktu Mulai Perjalanan</label>
	  <div id="waktu_wisata"><?=$detail[3]?></div>
	</div>
	<div class="mb-3">
	  <label for="hari_wisata" class="form-label">Hari Wisata</label>
	  <div id="hari_wisata"><?=$detail[4]?></div>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="paket_inap" value="1" id="paket_inap" <?=($detail[5]==1)?'checked':''?> disabled>
		  <label class="form-check-label" for="paket_inap">
			Penginapan (Rp. 1.000.000)
		  </label>
		</div>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="paket_transport" value="1" id="paket_transport" <?=($detail[6]==1)?'checked':''?> disabled>
		  <label class="form-check-label" for="paket_transport">
			Transportasi (Rp. 1.200.000)
		  </label>
		</div>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="paket_makan" value="1" id="paket_makan" <?=($detail[7]==1)?'checked':''?> disabled>
		  <label class="form-check-label" for="paket_makan">
			Service/ Makan (Rp. 500.000)
		  </label>
		</div>
	</div>
	<div class="mb-3">
	  <label for="jumlah_peserta" class="form-label">Jumlah Peserta</label>
	   <div id="jumlah_peserta"><?=$detail[8]?></div>
	 </div>
	<div class="mb-3">
	  <label for="total" class="form-label">Total Tagihan</label>
	  <div id="total">Rp. <?=number_format($detail[9],0,',','.')?></div>
	</div>
	<div class="mb-3">
	  <label for="created_at" class="form-label">Waktu Pemesanan</label>
	  <div id="created_at"><?=$detail[10]?></div>
	</div>
  </div>
  <div class="card-footer d-print-none">
    <a href="index.php?aksi=pesan" class="btn btn-primary">Buat Pesanan Baru</a>
	<a href="#" onclick="window.print()" class="btn btn-success">Cetak</a>
  </div>
</div>
<?php } ?>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
 </body>
</html>