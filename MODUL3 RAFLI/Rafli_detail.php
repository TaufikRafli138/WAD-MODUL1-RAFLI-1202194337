<!-- ########################
###########################################
Nama :TAUFIK RAFLI MARGOCAHYO
Kelas : SI4303
NIM : SI4303
!IMPORTANT DONT COPY THIS CODE WITHOUT PERMISSION 
HAVE A NICE DAY

###########################################
######################## -->


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Tugas Pendahuluan 1 WAD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/style/styles.css">

</head>
<body>

    <style>
    .YunitaMarsindi {
      border-radius: 4px;
      background-color: #blue;
      border: none;
      color: #FFFFFF;
      text-align: center;
      font-size: 15px;

      width: 200px;
      transition: all 0.5s;
      cursor: pointer;
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
      content: '\00bb';
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
    }
        .fax {
            color: orange;
            margin-right: 12px;
        }

        .img-poster {
            object-fit: scale-down;
            height: 1000px;
            display: block;
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            box-shadow: 0 0 25px #3d2173a1;
            transition: all ease 1s;
        }

        .card-home {
            margin: 20px;
        }

        .modal {
            padding: 50px !important;
        }

        .modal .modal-dialog {
            width: 100%;
            max-width: none;
            height: 100%;
            margin: 0;
        }

        .modal .modal-content {
            height: 100%;
            border: 0;
            border-radius: 0;
        }

        .modal .modal-body {
            overflow-y: auto;
        }
  </style>

  <section id="home">
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="rafli_home.php"><img src="https://hmsitel-u.id/wp-content/uploads/2021/01/logo-ead-1.png" class="w-100" alt="" style="width:100px; height:40px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
<div class="nav navbar-right">
      <li class="nav-item dropdown">
     <a class="nav-link text-light" href="rafli_TambahBuku.php"> <button type="button" class="btn btn-primary YunitaMarsindi"><span>Tambah_buku</span></button></a>
      </li>   
    </div>
  </div>


    </nav>

    <div class="container">
        <?php
        include './modules/KONEKSINYAKAKAK.php';
        include './modules/MODULBIKININILAH.php';
        include './modules/HAPUSAKU.php';
        include './modules/GANTILAH.php';

        ini_set('display_errors', '');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        ini_set('error_reporting', E_ALL);

        $id_buku = $_GET['id_buku'];
        $query = "SELECT * FROM buku_table where id_buku=$id_buku;";
        $sql = mysqli_query($conn, $query);
        ?>

        <div class="row">
            <?php if ($row = mysqli_fetch_array($sql)) {  ?>
                <div class="col-md-8 col-lg-offset-8 " style="margin-left: 200px">
                    <div class="card card-home">
                        <h1 style="text-align:center; margin-bottom: 50px;">Detail Buku</h1>
                        <img class="card-img-top img-poster" src="<?php echo $row['gambar'] ?>" alt="Card image cap">
                        <div class="card-body">
                            <h3><?php echo $row['judul_buku'] ?></h3>
                            <p class="card-text">
                                <p> <strong> Deskripsi : </strong></p>
                                <p><?php echo $row['deskripsi'] ?></p>
                                <div class="row">
                                    <div class="col-md-8">
                                        <p> <strong> Judul: </strong></p>
                                        <p><i class="fa fax fa-calendar"></i><?php echo $row['judul_buku'] ?></p>
                                        <p> <strong> Penulis: </strong></p>
                                        <p><i class="fa fax fa-calendar"></i><?php echo $row['penulis_buku'] ?></p>
                                        <p> <strong> Tahun Terbit: </strong></p>
                                        <p><i class="fa fax fa-calendar"></i><?php echo $row['tahun_terbit'] ?></p>
                                        <p> <strong> Deskripsi: </strong></p>
                                        <p><i class="fa fax fa-calendar"></i><?php echo $row['deskripsi'] ?></p>
                                        <p> <strong> Bahasa: </strong></p>
                                        <p><i class="fa fax fa-calendar"></i><?php echo $row['bahasa'] ?></p>
                                        <p> <strong> Tag: </strong></p>
                                         <?php
                                        $fwv = json_decode($row['tag']);
                                        $isBenefitEmpty = true;
                                        //if array benefit is not empty
                                        if (!empty($fwv)) {
                                            $isBenefitEmpty = false;
                                            echo '<ul>';
                                            echo '<li>' . implode('</li><li>', $fwv) . '</li>';
                                            echo '</ul>';
                                        } else {
                                            $isBenefitEmpty = true;
                                            //if array benefit is empty
                                            echo '<ul>';
                                            echo '<li>' . 'Tidak Ada Tag.' . '</li>';
                                            echo '</ul>';
                                        }
                                        ?>
                                    </div>
                                    
                                </div>
                         

                        </div>

                        <form action="rafli_detail.php?id_buku=<?php echo $row['id_buku'] ?>" method="post">
                            <div class="card-footer bg-transparent">
                                <p style="text-align: center;">
                                    <!-- Button trigger modal -->
                                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                        Edit
                                    </button>
                                    <button type="submit" value="<?php echo $row['id_buku'] ?>" name="deleteAgenda" class="btn btn-danger">Hapus</button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Update Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container mx-auto my-5">
                                    <form action="Rafli_detail.php?id_buku=<?php echo $row['id_buku'] ?>" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-8 col-lg-offset-8  " style="margin-left:200px;">
                                                <div class="card h-100">
                                                    <div class="card-header bg-primary"></div>
                                                    <div class="card-body">

              <input type="hidden" name="id_buku" value=<?php echo $row['id_buku'] ?>>
              <div class="form-group">
                <h6>Judul Buku</h6>
                <input required type="text" name="judulbuku" id="" class="form-control" value="<?php echo $row['judul_buku'] ?>" placeholder="" aria-describedby="helpId">
              </div>

              <div class="form-group">
                <h6 style="margin-top:5px;"> Penulis</h6>
                <input required type="text" name="Penulis" id="" class="form-control" placeholder="" value="<?php echo $row['penulis_buku'] ?>" aria-describedby="helpId">
              </div>

               <div class="form-group">
                <h6 style="margin-top:5px;">Tahun Terbit</h6>
               <input required type="text" name="TahunTerbit" id="" class="form-control" placeholder="" value="<?php echo $row['tahun_terbit'] ?>"aria-describedby="helpId">
              </div>

              <div class="form-group">
                <h6 style="margin-top:5px;">Deskripsi</h6>
                 <textarea required class="form-control" name="Deskripsi" id="" rows="3" value=""><?php echo $row['deskripsi'] ?></textarea>
              </div>


              <div class="">
                <h6 style="margin-top:5px;">Bahasa</h6>
                                                                <label class="col-md-6 form-check">
                                                                    <div class="row">
                                                                        <div class="form-check col-md-6">
                                                                            <input class="form-check-input" name="bahasa" value="Indonesia" type="radio" <?php echo ($row['bahasa'] == 'Indonesia') ? 'checked' : '' ?>>
                                                                            <label class="form-check-label" for="gridRadios2">
                                                                                Indonesia
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check col-md-6">
                                                                            <input class="form-check-input" value="Lainnya" type="radio" name="bahasa" <?php echo ($row['bahasa'] == 'Lainnya') ? 'checked' : '' ?>>
                                                                            <label class="form-check-label" for="gridRadios3">
                                                                                Lainnya
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                </label>
                </div>


 <?php
                                                        $arrayBenefit = null;
                                                        $dat1= false;
                                                        $dat2 = false;
                                                        $dat3 = false;
                                                        $dat4= false;
                                                        $dat5 = false;
                                                        $dat6 = false;
                                                        $dat7 = false;

                                                        if ($isBenefitEmpty) {
                                                            $snack = false;
                                                        } else {
                                                            $arrayBenefit = json_decode($row['tag']);
                                                            if (in_array("Pemograman", $arrayBenefit)) {
                                                                $dat1 = true;
                                                            }
                                                            if (in_array("Website", $arrayBenefit)) {
                                                                $dat2 = true;
                                                            }
                                                            if (in_array("Java", $arrayBenefit)) {
                                                                $dat3 = true;
                                                            }
                                                            if (in_array("OOP", $arrayBenefit)) {
                                                                $dat4 = true;
                                                            }
                                                            if (in_array("MVC", $arrayBenefit)) {
                                                                $dat5 = true;
                                                            }
                                                            if (in_array("Kalkulus", $arrayBenefit)) {
                                                                $dat6 = true;
                                                            }
                                                           if (in_array("Lainnya", $arrayBenefit)) {
                                                                $dat7 = true;
                                                            }
                                                        }
                                                        ?>

                                                        <div class="form-group">
                                                      <!--       <label for=""><strong>Tag</strong></label> -->
                                                      <h6 style="margin-top:5px;">Tag</h6>
                                                            <div class="form-check">
                                                                <div class="row col-md-10">

                                                                    <div class="col-md-4">
                                                                        <label class="form-check-label">
                                                                            <input <?php echo ($dat1) ? 'checked' : ''; ?> type="checkbox" class="form-check-input" name="Tag[]" id="" value="Pemograman">
                                                                            Pemograman
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <label class="form-check-label">
                                                                            <input <?php echo ($dat2) ? 'checked' : ''; ?> type="checkbox" class="form-check-input" name="Tag[]" id="" value="Website">
                                                                            Website
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <label class="form-check-label">
                                                                            <input <?php echo ($dat3) ? 'checked' : ''; ?> type="checkbox" class="form-check-input" name="Tag[]" id="" value="Java">
                                                                            Java
                                                                        </label>
                                                                    </div>


                                                                    <div class="col-md-4">
                                                                        <label class="form-check-label">
                                                                            <input <?php echo ($dat4) ? 'checked' : ''; ?> type="checkbox" class="form-check-input" name="Tag[]" id="" value="OOP">
                                                                            OOP
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <label class="form-check-label">
                                                                            <input <?php echo ($dat5) ? 'checked' : ''; ?> type="checkbox" class="form-check-input" name="Tag[]" id="" value="MVC">
                                                                            MVC
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <label class="form-check-label">
                                                                            <input <?php echo ($dat6) ? 'checked' : ''; ?> type="checkbox" class="form-check-input" name="Tag[]" id="" value="Kalkulus">
                                                                            Kalkulus
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-check-label">
                                                                            <input <?php echo ($dat7) ? 'checked' : ''; ?> type="checkbox" class="form-check-input" name="Tag[]" id="" value="Lainnya">
                                                                            Lainnya
                                                                        </label>
                                                                    </div>     
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" name="updateEvent" class="btn btn-primary YunitaMarsindi" style="height:40px; width:150px"> <span>Save changes</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>