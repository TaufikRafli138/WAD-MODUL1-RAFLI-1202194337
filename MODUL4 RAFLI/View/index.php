<!doctype html>
<html lang="en">
<?php session_start();
include '../Controller/ModulController.php';
$db = new database();
$show = "";
if (isset($_SESSION['logged'])) {
    # code...
} else {
    $db->movePage("login.php");
}
?>

<head>
    <title>Home</title>
    <!-- Required meta tags -->
     <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .header {
            font-family: 'Comfortaa', Arial, Helvetica, sans-serif;
            color: black;
            height: 170px;
        }

        .p-0 {
            padding-right: 0;
            padding-left: 0;
        }
    .YunitaMarsindi {
      border-radius: 4px;
      background-color: #blue;
      border: none;
      color: #FFFFFF;
      text-align: center;
      font-size: 15px;

      width: 120px;
      transition: all 0.5s;
      cursor: pointer   ;
      margin: 5px;
      height: 50px;
    }

    .YunitaMarsindi span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.5s;

    }

    .YunitaMarsindi span:after {

      position: absolute;
      opacity: 0;
      top: 0;
      right: -20px;
      transition: 0.5s;
      background-color: #pink;
    }

    .YunitaMarsindi:hover span {
      padding-right: 25px;
    }

    .YunitaMarsindi:hover span:after {
      opacity: 1;
      right: 0;

    }

        .content {
            font-family: 'EB Garamond', Arial, Helvetica, sans-serif;
            width: 400px;
            margin-top: 50px;
            margin-bottom: 50px;
            overflow: hidden;
            border-radius: 50px 50px 0px 0px;
            transition: all ease 1s;
        }

        img {
            object-fit: cover;
            height: 270px;
            display: block;
            position: relative;
            overflow: hidden;
            transition: all ease 1s;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


             <nav id="main-navbar" class="navbar navbar-expand-lg navbar-fixed-top <?= $db->getColor() ?>">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="https://hmsitel-u.id/wp-content/uploads/2021/01/logo-ead-1.png" class="w-100" alt="" style="width:100px; height:40px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
<div class="nav navbar-right">
     <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active mr-3">
                    <a class="nav-link" href="bookings.php"><i class="fa fa-shopping-cart" style="font-size:22px"></i></a>
                </li>
                <li class="nav-item active mr-3">
                    <div class="dropdown" >
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <font class="<?= $db->getColor() ?>">Selamat Datang,</font> <font class="text-primary"><?php echo $_SESSION['user-name']?></font>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <center><a class="dropdown-item" href="profile.php">Profile</a></center>
                            <form action="" method="post">
                            <button type="submit" name="logout" class="btn btn-block">Logout</button>
                        </form>
                        </div>

                    </div>
                </li>
                <li><img src="https://i.ytimg.com/vi/b00ieUuSZvA/mqdefault.jpg" alt="Avatar" style="width:50px;height:50px;border-radius:50%"></li>
            </ul>
        </div>
    </div>
  </div>
    </nav>
   
<
    <div class="container">
        <?php
        if (strpos($_SERVER['REQUEST_URI'], "in_") !== false) {
            $db->msgSuccess("Berhasil Login");
        }
        if (isset($_POST['add-product'])) {
            $db->addToCart($_POST['item_name'], $_POST['item_price'],$_POST['item_loc'], $_POST['item_date']);
        }
        ?>
    </div>


 <div class="container my-5">
        <div class="card mx-auto border-0" style="width:100%">
            <div class="border rounded" style="background-image: linear-gradient( 89.8deg, rgba(112,211,43,1) 0.2%, rgba(118,255,238,1) 20%, rgba(192,255,247,1) 41.3%, rgba(246,224,96,1) 70.1%, rgba(118,195,218,1) 100% );">
                <br>
                <h1 class="mt-3" align="center"><strong>EAD TRAVEL</strong></h1>
                <p class="mb-3"align="center">Solusi Perjalanan anda</p>
                <br>
            </div>
           



<div class="mt-5 row text-start">
        <div class="col-lg-4 px-1 mt-2">
          <div class="card">
            <img src="https://ecs7.tokopedia.net/blog-tokopedia-com/uploads/2019/07/wisata-di-balikpapan-1-GetBorneo.jpg">
            <div class="card-body">
              <h5 class="card-title">Pantai Lamaru</h5>
              <p class="card-text" style="text-align:justify; ">Salah satu daya tarik wisata di Balikpapan adalah keberadaan pantai-pantai yang indah. Pantai Lamaru merupakan salah satunya. Tak hanya keindahan garis pantai, objek wisata di Balikpapan satu ini juga dikenal karena barisan pepohonan cemara yang asri mengelilingi pinggiran pantai. Destinasi wisata ini pas untuk Toppers yang mencari ketenangan serta kesejukkan di akhir pekan atau saat liburan</p>
              <hr>
             <p style="color:black; font-size: 15px;font-weight:bold">Rp 1.000.000</p>

                    <center>
                    <form action="" method="post">
                                <button type="button" class="btn btn-primary btn-block"data-target="#modal1" data-toggle="modal">Pesan Ticket</button>
                            </form>


              </center>
            </div>
          </div>
        </div>
        <div class="col-lg-4 px-1 mt-2">
          <div class="card">
            <img src="https://ecs7.tokopedia.net/blog-tokopedia-com/uploads/2019/07/wisata-di-balikpapan-2-Pantainesia.jpg">
            <div class="card-body">
              <h5 class="card-title">Pantai Kemala</h5>
              <p class="card-text" style="text-align:justify; ">Dikenal juga dengan nama Pantai Polda, Pantai Kemala adalah destinasi wisata di Balikpapan bernuansa pantai selanjutnya. Berada dekat dengan pusat kota Balikpapan, Pantai Polda menjadi objek wisata populer di Balikpapan yang tak pernah sepi oleh pengunjung.</p><br>
              <hr>
             <p style="color:black; font-size: 15px;font-weight:bold">Rp 750.000</p>
          

                          <form action="" method="post">
                                
                                <button type="button" class="btn btn-primary btn-block"data-target="#modal2" data-toggle="modal">Pesan Ticket</button>
                            </form>


              </center>
            </div>
          </div>
        </div>
        <div class="col-lg-4 px-1 mt-2">
          <div class="card">
            <img src="https://moedayana.files.wordpress.com/2010/12/fac-int1.jpg">
            <div class="card-body">
              <h5 class="card-title">Pantai Sepinggan</h5>
              <p class="card-text" style="text-align:justify; ">Alternatif destinasi tempat wisata di Balikpapan yang cocok untuk menikmati panorama matahari terbenam lainnya selain Pantai Melawai adalah Pantai Sepinggan. Disini, Toppers bisa memandang indahnya langit jingga dan pantulan cahaya matahari di atas tenangnya permukaan air laut dari dermaga kayu yang membentang panjang di sisi Pantai Sepinggan</p>
              <hr>
             <p style="color:black; font-size: 15px;font-weight:bold">Rp 1.500.000</p>
                        
                               

                                <button type="button" class="btn btn-primary btn-block" data-target="#modal3" data-toggle="modal">Pesan Ticket</button>
              
              </a>


              </center>
            </div>
          </div>
        </div>




            </form>
        </div>

    </div>


    <!-- Modal -->


    <div class="modal fade" id="modal1" role="dialog" aria-labelledby="modalLabel" tabindex="-1">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLabel">Pilih Tanggal Perjalananmu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

        <form action="" method="post">
            <input type="hidden" name="item_name" value="Pantai Lamaru">
            <input type="hidden" name="item_price" value="1000000">
            <input type="hidden" name="item_loc" value="Balikpapan Baru">
            <input class="form-control" type="datetime-local" name="item_date" placeholder="Select DateTime">
          </div>
          <div class="modal-footer">
            
            <button type="submit" name="add-product" class="btn btn-primary btn-block">Pesan</button>
        </form>
          </div>
        </div>
      </div>
    </div>
  </div>


    <div class="modal fade" id="modal2" role="dialog" aria-labelledby="modalLabel" tabindex="-1">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLabel">Pilih Tanggal Perjalananmu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
        <form action="" method="post">
                <input type="hidden" name="item_name" value="Pantai Kemala">
                <input type="hidden" name="item_price" value="750000">
                <input type="hidden" name="item_loc" value="Balikpapan Selatan">
            <input class="form-control" type="datetime-local" name="item_date" placeholder="Select DateTime">
          </div>
          <div class="modal-footer">

            <button type="submit" name="add-product" class="btn btn-primary btn-block">Pesan</button>
        </form>
          </div>
        </div>
      </div>
    </div>
  </div>



    <div class="modal fade" id="modal3" role="dialog" aria-labelledby="modalLabel" tabindex="-1">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLabel">Pilih Tanggal Perjalananmu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                     <form action="" method="post">
             <input type="hidden" name="item_name" value="Pantai Sepinggan">
             <input type="hidden" name="item_price" value="1500000">
             <input type="hidden" name="item_loc" value="Balikpapan Utara">
            <input class="form-control" type="datetime-local" name="item_date" placeholder="Select DateTime">
          </div>
          <div class="modal-footer">
 
            <button type="submit" name="add-product" class="btn btn-primary btn-block">Pesan</button>
        </form>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

    <script>flatpickr("input[type=datetime-local]", {});</script>
  <script src="js/datepicker.js"></script>
  <script>
    $(function() {
      $('[data-toggle="datepicker"]').datepicker({
        autoHide: true,
        zIndex: 2048,
      });
    });
  </script>

<script>
      config = {
        enableTime: true,
        dateFormat: "Y-m-d H:i:s",
        altInput: true,
      }
    </script>

<?php include 'footer.php';?>

</html>