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
       /*  .header .text h1 {
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
        }*/
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
  <div class="header">
   <img alt="A large fish statue in Pangandaran, Indonesia" height="600" src="assets/images/ikan marlin.jpeg" width="1920"/>
   <div class="text">
    <h2>
     BEST DESTINATIONS OF PANGANDARAN
    </h2>
    <h1>
     PANGANDARAN TRAVELING
    </h1>
   </div>
  </div>
  <div class="container">
   <div class="section-title">
    
<main class="flex-shrink-0">
    <div class="container">
      <form method="post" action="lib/proses.php">
  <div class="card mt-2">
    <div class="card-header bg-dark text-white">
      Form Pemesanan Paket Wisata
    </div>
    <div class="card-body">
      <div class="mb-3">
        <label for="nama_pemesanan" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama_pemesanan" name="nama_pemesanan" placeholder="Nama Lengkap Sesuai Tanda Pengenal" required>
      </div>
      <div class="mb-3">
        <label for="hp_pemesan" class="form-label">Nomor Handphone</label>
        <input type="text" class="form-control" id="hp_pemesan" name="hp_pemesan" placeholder="Nomor Handphone 08..." required>
      </div>
      <div class="mb-3">
        <label for="waktu_wisata" class="form-label">Waktu Mulai Perjalanan</label>
        <input type="date" class="form-control" id="waktu_wisata" name="waktu_wisata" placeholder="Waktu Mulai Perjalanan" required>
      </div>
      <div class="mb-3">
        <label for="hari_wisata" class="form-label">Hari Wisata</label>
        <input type="number" class="form-control" id="hari_wisata" value="1" name="hari_wisata" placeholder="Jumlah Hari Perjalanan" required>
      </div>
      <div class="mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="paket_inap" value="1" id="paket_inap">
            <label class="form-check-label" for="paket_inap">
              Penginapan (Rp. 1.000.000)
            </label>
          </div>
      </div>
      <div class="mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="paket_transport" value="1" id="paket_transport">
            <label class="form-check-label" for="paket_transport">
              Transportasi (Rp. 1.200.000)
            </label>
          </div>
      </div>
      <div class="mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="paket_makan" value="1" id="paket_makan">
            <label class="form-check-label" for="paket_makan">
              Service/ Makan (Rp. 500.000)
            </label>
          </div>
      </div>
      <div class="mb-3">
        <label for="jumlah_peserta" class="form-label">Jumlah Peserta</label>
        <input type="number" class="form-control" id="jumlah_peserta" value="1" name="jumlah_peserta" placeholder="Jumlah Hari Perjalanan" required>
      </div>
      <div class="mb-3">
        <label for="harga" class="form-label">Harga Paket</label>
        <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga Paket Perjalanan" readonly>
      </div>
      <div class="mb-3">
        <label for="total" class="form-label">Total Tagihan</label>
        <input type="number" class="form-control" id="total" name="total" placeholder="Total Paket Perjalanan" readonly>
      </div>
    </div>
    <div class="card-footer">
      <input type="submit" class="btn btn-primary" value="Simpan">
      <input type="reset" class="btn btn-danger" value="Ulangi">
    </div>
  </div>
  <script>
  //tentukan konstanta biaya masing-masing
  const paket_inap = 1000000;
  const paket_transport = 1200000;
  const paket_makan = 500000;
  
  function updateTotalCost()
  {
      //inisisi harga paket 0
      let totalCost = 0;
      
      //referensi dari checkbox
      const inapCheckbox = document.getElementById('paket_inap');
      const transportCheckbox = document.getElementById('paket_transport');
      const makanCheckbox = document.getElementById('paket_makan');
      
      //jika inap checkbox ter-check
      if(inapCheckbox.checked)
      {
          totalCost+=paket_inap;
      }
      
      //jika transport checkbox ter-check
      if(transportCheckbox.checked)
      {
          totalCost+=paket_transport;
      }
      
      //jika makan checkbox ter-check
      if(makanCheckbox.checked)
      {
          totalCost+=paket_makan;
      }
      
      document.getElementById('harga').value = totalCost;
  }
  
  function updateTotal()
  {
      let TotalTagihan = 0;
      
      var hari_wisata = document.getElementById('hari_wisata').value;
      var jumlah_peserta = document.getElementById('jumlah_peserta').value;
      var harga = document.getElementById('harga').value;
      
      TotalTagihan = hari_wisata * jumlah_peserta * harga;
      
      document.getElementById('total').value = TotalTagihan;
  }
  
  document.getElementById('paket_inap').addEventListener('change', updateTotalCost);
  document.getElementById('paket_transport').addEventListener('change', updateTotalCost);
  document.getElementById('paket_makan').addEventListener('change', updateTotalCost);
  
  document.getElementById('paket_inap').addEventListener('change', updateTotal);
  document.getElementById('paket_transport').addEventListener('change', updateTotal);
  document.getElementById('paket_makan').addEventListener('change', updateTotal);
  
  document.getElementById('hari_wisata').addEventListener('change', updateTotalCost);
  document.getElementById('jumlah_peserta').addEventListener('change', updateTotalCost);
  
  document.getElementById('hari_wisata').addEventListener('change', updateTotal);
  document.getElementById('jumlah_peserta').addEventListener('change', updateTotal);
  
  updateTotalCost();
  updateTotal();
  </script>  </div>
  </main>
  <footer class="text-center mt-4 mb-4">
    <p>@2024 pangandaran semakin menyala</p>
    </footer>