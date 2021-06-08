<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="home.css">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  
  <title>HOME PROJECT</title>
</head>
<body >
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container">
      <h3><i class="fas fa-cart-plus text-success"></i></h3>
      <a class="navbar-brand" href="#" Style="color:#F8F8FF;">MY RESTAURANT</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#"Style="color:#F8F8FF;">Home</a>
          <a class="nav-link" href="#"Style="color:#F8F8FF;">About</a>
          <a class="nav-link btn btn-warning tombol" href="order.php"Style="color:#F8F8FF;">Pesanan</a>
          <a class="nav-link" href="login.php" Style="color:#F8F8FF;">Log Out</a>
        </div>
        <div class="icon mt-2 " Style="color:#F8F8FF;">
          <h5><i class="fab fa-instagram" data-toggle="tooltip" title="Instagram"></i>
            <i class="fab fa-facebook data-toggle="tooltip" title="Facebook"></i>
            <i class="fab fa-whatsapp data-toggle="tooltip" title="Whatsapp"></i>
          </h5>
        </div>
      </div>
    </div>
  </nav>

  <div class="row mt-5 no-gutters">
    <div class="col-md-2 bg-light">
      <ul class="list-group list-group-flush p-2 pt-4">
        <li class="list-group-item active bg-success" aria-current="true"><i class="fas fa-align-justify"></i> KATEGORI
        </li>
        <li class="list-group-item"><i class="fas fa-angle-right"></i><a href="makanan.php"> Makanan</li></a>
        <li class="list-group-item"><i class="fas fa-angle-right"></i><a href="minuman.php">Minuman</li></a> 
      </ul>
    </div>
    <div class="col-md-10">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/sederhana1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/sederhana2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/sederhanaa3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <h4 class="text-center font-wight-bold mt-4 mb-4">Best seller</h4>

      <div class="row mx-auto">
        <div class="card mr-2 ml-2" style="width: 16rem;">
          <img src="img/rendang.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Rendang</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
              class="fas fa-star"></i><i class="fas fa-star"></i> <br>
            <a href="#" class="btn btn-info">Detail</a>
            <a href="#" class="btn btn-danger">Rp 28.000</a>
          </div>
        </div>
        <div class="card mr-2 ml-2" style="width: 16rem;">
          <img src="img/itikk.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Itik Cabe Hijau</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
              class="fas fa-star"></i><i class="fas fa-star"></i> <br>
            <a href="#" class="btn btn-info">Detail</a>
            <a href="#" class="btn btn-danger">Rp 25.000</a>
          </div>
        </div>
        <div class="card mr-2 ml-2" style="width: 16rem;">
          <img src="img/ayam.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ayam Bakar</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
              class="fas fa-star"></i><i class="fas fa-star"></i> <br>
            <a href="#" class="btn btn-info">Detail</a>
            <a href="#" class="btn btn-danger">Rp 22.000</a>
          </div>
        </div>
        <div class="card mr-2 ml-2" style="width: 16rem;">
          <img src="img/ikan.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ikan Bakar</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
              class="fas fa-star"></i><i class="fas fa-star"></i> <br>
            <a href="#" class="btn btn-info">Detail</a>
            <a href="#" class="btn btn-danger">Rp 30.000</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-dark text-white p-5">
    <div class="row">
      <div class="col-md-5">
        <h5>LAYANAN PELANGGAN</h5>
        <ul>
          <li>Pusat Bantua</li>
          <li>Cara Pembelian</li>
          <li>Pengiriman</li>
          <li>Cara Pengembalian</li>
        </ul>
      </div>
      <div class="col-md-5">
      <h5>TENTANG KAMI</h5>
      <p>Restoran yang baru dibuka pada September 2017 ini punya menu khusus bernama Sepiring Padang. Menu yang dibanderol dengan harga Rp 98 ribu itu diracik agar bisa dinikmati dua sampai tiga orang.

Dalam sepiring menu Sepiring Padang, pengunjung mendapatkan dua porsi nasi dan delapan macam lauk. Bagi konsumen yang datang sendirian, mereka juga bisa memesan Sepiring Padang dengan versi lebih kecil. Menu single Sepiring Padang hanya akan terdiri atas lima macam lauk.</p>
      </div>
      <div class="col-md-5">
      <h5>HUBUNGI KAMI</h5>
      <ul>
      <li>0819-0386-9258</li>
      <li>Sepiringpadang@gmail.com</li>
      </ul>
      </div>
    </div>
  </footer>

  <div class="text-center text-black font-weight-bold bg-warning p-3">
  <p>BY IRSANDI RIDHOTUL FITRA <i class="far fa-copyright"></i>2021</p>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
  </script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>