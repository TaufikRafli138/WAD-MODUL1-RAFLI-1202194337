<!doctype html>
<html lang="en">
<?php session_start();
include '../Controller/ModulController.php';
$db = new database();
if (isset($_SESSION['logged'])) {
    # code...
}else{
      $db->movePage("../View/login.php");
}
?>
<head>
    <title>Cart</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
        .content {
            margin-top: 60px;
            margin-bottom: 60px;
        }
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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


   <!-- 
    <nav class="navbar navbar-expand-lg <?= $db->getColor() ?>">
        <a class="navbar-brand" href="index.php">Restoran</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"></ul>
            <div class="navbar-nav">
                <li class="nav nav-item">
                    <a class="" href="cart.php">
                        <i class="fa fa-cart-arrow-down fa-lg" aria-hidden="true"></i> </a>
                    &nbsp; &nbsp; &nbsp; &nbsp;
                    </a>
                </li>
                <li class="nav-item">
                    <p class="" href="#">Selamat Datang &nbsp;&nbsp; </a>
                </li>
                <li class=" nav nav-item dropdown ">
                    <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION['user-name'] ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="profile.php"><button type="button" class="btn btn-block">Profile</button></a>
                        <div class="dropdown-divider"></div>
                        <form action="" method="post">
                            <a href="login.php"><button type="submit" name="logout" class="btn btn-block">Logout</button></a>
                        </form>
                    </div>
                    <div class="col-md-3"></div>
                </li>
            </div>
        </div>
    </nav>
 -->
    <div class="container">
        <?php
        $show_data = true;
        if ($db->show_data() != null) {
            $show_data = true;
            $data = $db->show_data();
        } else {
            $show_data = false;
        }
        if (isset($_POST['delete_item'])) {
            $db->delete_data($_POST['item_id']);
        }
        ?>
    </div>

    <div class="container content">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Tempat</th>
                    <th>Lokasi</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Harga</th>
               
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $total = 0;
                if ($show_data) :
                    foreach ($data as $key) :
                ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $key['nama_tempat'] ?></td>
                            <td><?= $key['lokasi'] ?></td>
              <!--                   $namedate=date('Y-m-d H:i:s', strtotime($item_date)); -->
                            <td><?= date('l,d-m-Y', strtotime($key['tanggal'])) ?></td>
                            <td>Rp.<?= number_format($key['harga']) ?></td>
                   
                            <td>
                                <form action="" method="post">
                                    <input type="hidden" name="item_id" value="<?= $key['id'] ?>">
                                    <button type="submit" name="delete_item" class="btn btn-danger">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php
                        $no++;
                       
                            $total += $key['harga'];
                       
                        
                    endforeach;
                else : ?>
                    <td colspan="6"><center><marquee scrollamount="20">Tidak Ada Data Pemesanan Tiket. Ayok lah Liburan,masa Koding terus </marquee></center></td>
                <?php
                endif; ?>
                <tr>
                    <td colspan="5"> <strong>Total</strong> </td>
                    <td colspan="2"> <strong>Rp<?= number_format($total) ?></strong> </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

<?php include 'footer.php';?>