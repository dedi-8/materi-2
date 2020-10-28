<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/350ae57961.js" crossorigin="anonymous"></script>
    <style>
    	.card p{
    		margin-top: -10px;
    		margin-bottom: 1px;
    	}
    	.row .card:hover{
    		box-shadow: 2px 2px 2px rgba(0,0,0,0.4);
    		transform: scale(1.1);
    		background-color: lightyellow;
    	}
    </style>
    <title>Halaman Produk</title>
  <body>

<!--header-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a href="" class="text-d">Aplikasi TokoLAKU</a>
  <a class="navbar-brand text-warning" href="#"><b>TokoLAKU</b></a>
    <ul class="navbar-nav">
      <li>
        <a href="" class="ml-4 text-warning fas fa-bell"> Notifikasi</a>
      </li>
      <li>
        <a href="" class="ml-4 text-warning far fa-question-circle"> Bantuan</a>
      </li>
      <li class="nav-item">
        <a class="ml-4 text-warning" href="#" data-target="#masuk" data-toggle="modal">Masuk</a>
      </li>
      <li class="nav-item">
        <a class="ml-4 text-warning" href="#" data-target="#daftar" data-toggle="modal">Daftar</a>
      </li>
    </ul>
  </div>
</nav>

<!--modal login-->
<!-- Modal Masuk-->
<div class="modal fade" id="masuk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="card">
            <div class="card-header bg-warning mb-0"><h5 class="text-center"><span class="font-weight-bold text-white">TokoLaku</span></h5></div>
            <div class="card-body">
              <form action="">
                <div class="form-group">
                  <input type="text" name="" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="text" name="" class="form-control" placeholder="Password">
                </div>
                <div class="form-group custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                  <label class="custom-control-label" for="customControlAutosizing">
                    Ingat Password
                  </label>
                </div>
            <div class="form-group">
              <input type="submit" name="" value="Masuk" class="btn btn-secondary btn-block">
            </div>
          </form>
          <a href="">Lupa Password ?</a>
            <p>Belum memiliki akun TokoLaku?<a href=""> Daftar</a></p>
        </div>
      </div>

      </div>
    </div>
  </div>
</div>

<!--modal daftar-->
<div class="modal fade" id="daftar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buat Akun</h5>
        <h5 class="modal-title text-warning m-auto" id="exampleModalLabel">TokoLAKU</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
               <form action="">
                 <div class="form-group">
          <label for="">Masukan Nama</label>
          <input type="text" class="form-control" placeholder="Masukan Nama">
            </div>
        <div class="form-group">
          <label for="">Masukan Alamat</label>
           <input type="text" class="form-control" placeholder="Alamat">
        </div>
            <div class="form-group">
            <label for="">Tanggal lahir</label>
            <input type="text" name="" class="form-control" placeholder="30-09-2000">
          </div>
                <div class="form-group">
                  <label for="">Alamat Email/No Handphone</label>
                  <input type="text" name="" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="">Masukan Password</label>
                  <input type="text" name="" class="form-control" placeholder="Maximal 8 karakter">
                </div>
                 <div class="form-group">
            <label for="">Konfirmasi Password</label>
            <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" placeholder="Maximal 8 karakter">
         </div>
                 <div class="form-group custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                  <label class="custom-control-label" for="customControlAutosizing">
                    Ingat Password
                  </label>
                </div>
                 <div class="form-group">
                   <input type="submit" name="" value="Daftar" class="btn btn-primary btn-block">
                 </div>
               </form>

      </div>
      </div>
    </div>
  </div>

<!--navbar kategory-->
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Elektronik</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Komputer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Handphone</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Fashion</a>
      <li class="nav-item">
        <a class="nav-link" href="#">Olahraga</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Otomotif</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Kesehatan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Kecantikan</a>
      </li>
    </ul>
  </div>
  <form class="form-inline mr-4">
    <div class="" style="position: relative;">
      <input class="form-control" type="search" placeholder="Cari Barang" aria-label="Search">
      <button class="btn btn-outline-primary" type="submit">Search</button>
      </div>
    </form>
    <li class="nav-item nav flex-column">
        <a class="nav-link fa fa-cart-plus fa-2x" href="#" data-placement="bottom" data-toggle="tooltip"title="Keranjang"></a>
    </li>
</div>
</nav>

<!--coursel-->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="foto/asus.jpg" class="d-block w-100" alt="..." height="500px" width="400px">
    </div>
    <div class="carousel-item">
      <img src="foto/coursel1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="foto/coursel2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--modal produk-->
<!--iphone-->
<div class="modal" tabindex="-1" id="iphone">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <div class="modal-body">
        <!--grid-->
      <div class="row">
        <div class="col-md-4">
          <img src="foto/iphone 11.jpg" height="200px" width="200px">
        </div>
        <div class="col-md-6">
          <table class="table table-borderless">
            <tr>
              <th>Nama Produk</th>
              <td>Iphone 11</td>
            </tr>
            <tr>
              <th>Jumlah stok</th>
              <td>1000 Pcs</td>
            </tr>
            <tr>
              <th>Ongkir</th>
              <td>Gratis Pengiriman minimal belanja Rp. 2.000.000</td>
            </tr>
            <tr>
              <th>Rating</th>
              <td>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fas fa-star"></i>
              </td>
            </tr>
            <tr>
              <th>Harga</th>
              <td>12.000.000</td>
            </tr>
          </table>
        </div>
        <div class="container mt-2">
          <h5>Detail</h5>
          <p>Tiga Kamera 12 MP Ultra wide dan telefoto. layar true tone, layar warna luas(p3), haptic touch.</p>
        </div>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Masukan Keranjang</button>
        <button type="button" class="btn btn-primary">Lanjutkan Pembelian</button>
      </div>
    </div>
  </div>
</div>

<!--modal oppo-->
<div class="modal" tabindex="-1" id="oppo">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <div class="modal-body">
         <!--grid-->
      <div class="row">
        <div class="col-md-4">
          <img src="foto/hp.jpg" height="200px" width="200px">
        </div>
        <div class="col-md-6">
          <table class="table table-borderless">
            <tr>
              <th>Nama Produk</th>
              <td>Oppo f5 4/32</td>
            </tr>
            <tr>
              <th>Jumlah stok</th>
              <td>100 Pcs</td>
            </tr>
            <tr>
              <th>Ongkir</th>
              <td>Gratis Pengiriman minimal belanja Rp. 1.000.000</td>
            </tr>
            <tr>
              <th>Rating</th>
              <td>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fas fa-star"></i>
              </td>
            </tr>
            <tr>
              <th>Harga</th>
              <td>2.000.000</td>
            </tr>
          </table>
        </div>
        <div class="container mt-2">
          <h5>Detail</h5>
          <p>Kamera selfi dilengkapi dengan AI, daya tahan baterai bagus dan dilengkapi sensor sidik jari.</p>
        </div>
      </div>

      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Masukan Keranjang</button>
        <button type="button" class="btn btn-primary">Lanjutkan Pembelian</button>
      </div>
    </div>
  </div>
</div>

<!--modal headphone-->
<div class="modal" tabindex="-1" id="headphone">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <div class="modal-body">
         <!--grid-->
      <div class="row">
        <div class="col-md-4">
          <img src="foto/headphone.jpg" height="200px" width="200px">
        </div>
        <div class="col-md-6">
          <table class="table table-borderless">
            <tr>
              <th>Nama Produk</th>
              <td>Headphone</td>
            </tr>
            <tr>
              <th>Jumlah stok</th>
              <td>20 Pcs</td>
            </tr>
            <tr>
              <th>Ongkir</th>
              <td>standar</td>
            </tr>
            <tr>
              <th>Rating</th>
              <td>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fas fa-star"></i>
              </td>
            </tr>
            <tr>
              <th>Harga</th>
              <td>200.000</td>
            </tr>
          </table>
        </div>
        <div class="container mt-2">
          <h5>Detail</h5>
          <p>Produk bergaransi resmi dengan kwalitas terbaik, tahan air dan benturan dengan kwalitas suara jernih</p>
        </div>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Masukan Keranjang</button>
        <button type="button" class="btn btn-primary">Lanjutkan Pembelian</button>
      </div>
    </div>
  </div>
</div>

<!--modal asus-->
<div class="modal" tabindex="-1" id="asus">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <div class="modal-body">
         <!--grid-->
      <div class="row">
        <div class="col-md-4">
          <img src="foto/asus.jpg" height="200px" width="200px">
        </div>
        <div class="col-md-6">
          <table class="table table-borderless">
            <tr>
              <th>Nama Produk</th>
              <td>ASUS</td>
            </tr>
            <tr>
              <th>Jumlah stok</th>
              <td>2 Pcs</td>
            </tr>
            <tr>
              <th>Ongkir</th>
              <td>Gratis Pengiriman minimal belanja Rp. 500.000</td>
            </tr>
            <tr>
              <th>Rating</th>
              <td>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fas fa-star"></i>
              </td>
            </tr>
            <tr>
              <th>Harga</th>
              <td>3.000.000</td>
            </tr>
          </table>
        </div>
        <div class="container mt-2">
          <h5>Detail</h5>
          <p>Desain yang bagus, kecepatan processor dan dilengkapi daya baterai yang besar</p>
        </div>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Masukan Keranjang</button>
        <button type="button" class="btn btn-primary">Lanjutkan Pembelian</button>
      </div>
    </div>
  </div>
</div>

<!--modal baju pria-->
<div class="modal" tabindex="-1" id="baju">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <div class="modal-body">
         <!--grid-->
      <div class="row">
        <div class="col-md-4">
          <img src="foto/bajupria.jpg" height="200px" width="200px">
        </div>
        <div class="col-md-6">
          <table class="table table-borderless">
            <tr>
              <th>Nama Produk</th>
              <td>Baju Kaos Pria</td>
            </tr>
            <tr>
              <th>Jumlah stok</th>
              <td>20 Pcs</td>
            </tr>
            <tr>
              <th>Ongkir</th>
              <td>Gratis Pengiriman minimal belanja Rp. 100.000</td>
            </tr>
            <tr>
              <th>Rating</th>
              <td>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fas fa-star"></i>
              </td>
            </tr>
            <tr>
              <th>Harga</th>
              <td>Rp 25.000</td>
            </tr>
          </table>
        </div>
        <div class="container mt-2">
          <h5>Detail</h5>
          <p>Bahan kwalitas bagus dengan berbagai macam waran,desain dan ukuran</p>
        </div>
      </div>

      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Masukan Keranjang</button>
        <button type="button" class="btn btn-primary">Lanjutkan Pembelian</button>
      </div>
    </div>
  </div>
</div>

<!--modal roma-->
<div class="modal" tabindex="-1" id="roma">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <div class="modal-body">
         <!--grid-->
      <div class="row">
        <div class="col-md-4">
          <img src="foto/roma.jpg" height="200px" width="200px">
        </div>
        <div class="col-md-6">
          <table class="table table-borderless">
            <tr>
              <th>Nama Produk</th>
              <td>Roma Kelapa</td>
            </tr>
            <tr>
              <th>Jumlah stok</th>
              <td>1000 Pcs</td>
            </tr>
            <tr>
              <th>Ongkir</th>
              <td>Standar</td>
            </tr>
            <tr>
              <th>Rating</th>
              <td>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fas fa-star"></i>
              </td>
            </tr>
            <tr>
              <th>Harga</th>
              <td>Rp 8.000/pcs</td>
            </tr>
          </table>
        </div>
        <div class="container mt-2">
          <h5>Detail</h5>
          <p>Pendamping saat minum teh dan kopi, sebagai makanan ringan yang sehat dan bergizi.</p>
        </div>
      </div>

      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Masukan Keranjang</button>
        <button type="button" class="btn btn-primary">Lanjutkan Pembelian</button>
      </div>
    </div>
  </div>
</div>

<!--modal helm-->
<div class="modal" tabindex="-1" id="helm">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <div class="modal-body">
         <!--grid-->
      <div class="row">
        <div class="col-md-4">
          <img src="foto/helm.jpg" height="200px" width="200px">
        </div>
        <div class="col-md-6">
          <table class="table table-borderless">
            <tr>
              <th>Nama Produk</th>
              <td>Helm</td>
            </tr>
            <tr>
              <th>Jumlah stok</th>
              <td>200 Pcs</td>
            </tr>
            <tr>
              <th>Ongkir</th>
              <td>Gratis Pengiriman minimal belanja Rp. 1.000.000</td>
            </tr>
            <tr>
              <th>Rating</th>
              <td>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fas fa-star"></i>
              </td>
            </tr>
            <tr>
              <th>Harga</th>
              <td>Rp 450.000</td>
            </tr>
          </table>
        </div>
        <div class="container mt-2">
          <h5>Detail</h5>
          <p>Helm Bergaransi, prduk dijamin original</p>
        </div>
      </div>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Masukan Keranjang</button>
        <button type="button" class="btn btn-primary">Lanjutkan Pembelian</button>
      </div>
    </div>
  </div>
</div>

<!--modal topi-->
<div class="modal" tabindex="-1" id="topi">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <div class="modal-body">
         <!--grid-->
      <div class="row">
        <div class="col-md-4">
          <img src="foto/topi.jpg" height="200px" width="200px">
        </div>
        <div class="col-md-6">
          <table class="table table-borderless">
            <tr>
              <th>Nama Produk</th>
              <td>Topi pria/Wanita</td>
            </tr>
            <tr>
              <th>Jumlah stok</th>
              <td>300 Pcs</td>
            </tr>
            <tr>
              <th>Ongkir</th>
              <td>standar</td>
            </tr>
            <tr>
              <th>Rating</th>
              <td>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fas fa-star"></i>
              </td>
            </tr>
            <tr>
              <th>Harga</th>
              <td>Rp. 100.000</td>
            </tr>
          </table>
        </div>
        <div class="container mt-2">
          <h5>Detail</h5>
          <p>Topi dengan bahan berkwalitas impor</p>
        </div>
      </div>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Masukan Keranjang</button>
        <button type="button" class="btn btn-primary">Lanjutkan Pembelian</button>
      </div>
    </div>
  </div>
</div>




<!--isi Produk-->
<h5 class="text-center font-weight-bold m-4">PRODUK TERBARU</h5>
<div class="bg-light">
<div class="container">
  <div class="row">
    <div class="card mr-auto ml-auto" style="width: 15rem;">
      <img src="foto/iphone 11.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Iphone 11</h5>
        <p class="card-text">Iphone 11 Garansi Resmi</p>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="far fa-star"></i>
        <p><b>Rp. 12.000.000</b></p>
        <a href="#" class="btn btn-primary" data-target="#iphone" data-toggle="modal">Beli Sekarang</a>
      </div>
    </div>
    <div class="card mr-auto ml-auto" style="width: 15rem;">
      <img src="foto/hp.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">OPPO f5</h5>
        <p class="card-text">OPPO F5 Garansi Resmi</p>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="far fa-star"></i>
        <p><b>Rp. 2.000.000</b></p>
        <a href="#" class="btn btn-primary" data-target="#oppo" data-toggle="modal">Beli sekarang</a>
      </div>
    </div>
    <div class="card mr-auto ml-auto" style="width: 15rem;">
      <img src="foto/headphone.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Headphone</h5>
        <p class="card-text">Headphone kwalitas terbaik impor dari jepang</p>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="far fa-star"></i>
        <p><b>Rp. 200.000</b></p>
        <a href="#" class="btn btn-primary" data-target="#headphone" data-toggle="modal">Beli sekarang</a>
      </div>
    </div>
    <div class="card mr-auto ml-auto" style="width: 15rem;">
      <img src="foto/asus.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Asus</h5>
        <p class="card-text">Laptop Asus Keluaran Terbaru Garansi Resmi</p>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="far fa-star"></i>
        <p><b>Rp. 3.000.000</b></p>
        <a href="#" class="btn btn-primary" data-target="#asus" data-toggle="modal">Beli sekarang</a>
      </div>
    </div>
  </div>
   <div class="row mt-4">
    <div class="card mr-auto ml-auto" style="width: 15rem;">
      <img src="foto/bajupria.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Baju baru</h5>
        <p class="card-text">Baju keren dan berkwalitas</p>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="far fa-star"></i>
        <p><b>Rp. 25.000</b></p>
        <a href="#" class="btn btn-primary" data-target="#baju" data-toggle="modal">Beli Sekarang</a>
      </div>
    </div>
    <div class="card mr-auto ml-auto" style="width: 15rem;">
      <img src="foto/roma.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Roma Kelapa</h5>
        <p class="card-text">Makanan Ringan saat bersantai bersama keluarga</p>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="far fa-star"></i>
        <p><b>Rp. 8.000/pcs</b></p>
        <a href="#" class="btn btn-primary" data-target="#roma" data-toggle="modal">Beli Sekarang</a>
      </div>
    </div>
    <div class="card mr-auto ml-auto" style="width: 15rem;">
      <img src="foto/helm.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">HELM</h5>
        <p class="card-text">Helm Kwalitas Original</p>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="far fa-star"></i>
        <p><b>Rp. 450.000</b></p>
        <a href="#" class="btn btn-primary" data-target="#helm" data-toggle="modal">Beli sekarang</a>
      </div>
    </div>
    <div class="card mr-auto ml-auto" style="width: 15rem;">
      <img src="foto/topi.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Topi pria/wanita</h5>
        <p class="card-text">Bahan impor kwalitas original</p>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="far fa-star"></i>
        <p><b>Rp. 100.000</b></p>
        <a href="#" class="btn btn-primary" data-target="#topi" data-toggle="modal">Beli Sekarang</a>
      </div>
    </div>
  </div>
</div>
</div>






<!--footer-->
<div class="bg-dark mt-4">
  <div class="container">
  <div class="row mt-2">
    <div class="col-sm text-white text-center mt-4 mb-4">
      <h5>IKUTI <a href="#" class="text-warning"> TokoLAKU</a></h5>
      <ul class="nav flex-column">
        <li>
          <p class="fa fa-facebook">  Facebook</p>
        </li>
          <li><p class="fa fa-instagram">  Instagram</p>
        </li>
        <li>
          <p class="fa fa-youtube">  
          Youtube</p>
        </li>
      </ul>
      
      
    </div>
    <div class="col-sm text-white text-center mt-4 mb-4">
      <h5>TENTANG <a href="#" class="text-warning">TokoLAKU</a></h5>
      <p>Tentang kami</p>
      <p>Kebijakan Privasi</p>
    </div>
    <div class="col-sm text-white text-center mt-4 mb-4">
      <h5>LAYANAN PELANGGAN</h5>
      <p>Bantuan</p>
      <p>Hubungi Kami</p>
      <p>Metode Pembayaran</p>
    </div>
    <div class="col-sm text-white text-center mt-4 mb-4">
      <h5>DOWNLOAD APLIKASI</h5>
      <p>Android</p>
    </div>
  </div>
  </div>
</div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>