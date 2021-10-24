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
  <title>Tugas Pendahuluan 2 WAD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="file/css/CSSKU.css">
</head>
<body>
  <section id="home">
   
<nav class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark ">
      <div class="mx-auto d-flex">
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Booking.php">Booking</a>
          </li>

        </ul>
      </div>
      </div>
    </nav>
  </section>
    <p class='fs-4 text-center mt-3'>Thank you RAFLI_1202194337 for Reserving</p>
    <p class='fs-5 text-center'>Please double check your reservation details</p>

    <div>
        <div class="container-fluid d-flex justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>Booking Number</th>
                        <th>Name</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Building Type</th>
                        <th>Phone Number</th>
                        <th>Service</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <?php
                        error_reporting(0);
                        ini_set('display_errors', 0);
                        $nama = $_POST['nama'];
                        $tipebangunan = $_POST['listdata'];
                        $waktu =$_POST['start'];
                        $lama = $_POST['duration'];
                        $hargabangunan = 0;
                        $tanggalbook = date('d/m/Y', strtotime($_POST['masukintanggal']));
                        $cekout = date('d/m/Y', strtotime("+$lama hours", strtotime($_POST['masukintanggal'])));
                        switch ($tipebangunan) {
                            case 'Nusantara':
                                $harga = 2000;
                                break;
                            case 'Garuda':
                                $harga = 1000;
                                break;
                            case 'GSG':
                                $harga = 500;
                                break;
                        }
                        $serviceFee = 0;

                        if (empty($_POST['services'])) {
                            $reservedServices = 0;
                        } else {
                            $reservedServices = $_POST['services'];
                            // $serviceFee = count($reservedServices) * 20;
                        }

                        if(in_array('Catering', $_POST['services'])){$serviceFee = $serviceFee+ 700;}
                        if(in_array('Decoration', $_POST['services'])){$serviceFee = $serviceFee+ 450;}
                        if(in_array('Sound', $_POST['services'])){$serviceFee = $serviceFee+ 250;                          }

                        $totalPrice = ($lama * $harga) + $serviceFee;
                        // $hasilku = strtotime("+$lama hours", strtotime($_POST['start']));
                        $hasilku = $waktu +$lama;

                        echo '
                    <td><strong>'  . rand() . '</strong></td>
                    <td>' . $nama . '</td>
                    <td>' . $tanggalbook . '&nbsp;'. $waktu . '</td>
                    <td>' . $cekout  . '</td>
                    <td>' . $tipebangunan . '</td>
                    <td>' . $_POST['notelp'] . '</td> 
                    <td><ul>';
                        if ($reservedServices == 0) {
                            echo 'NO SERVICES'; # 
                        } else {
                            for ($i = 0; $i < count($reservedServices); $i++) {
                                echo '<li>' . $reservedServices[$i] . '</li>';
                            }
                        }

                        echo '</ul></td>
                    <td> $' . $totalPrice . '</td>
                    '
                        ?>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

  <footer class="bg-light py-2 text-center"><p class="text-secondary m-0">Dibuat oleh Taufik Rafli Margocahyo _1202194337</p></footer>
</body>
</html>
