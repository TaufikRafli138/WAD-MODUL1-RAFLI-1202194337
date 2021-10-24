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
  <section id="about"> <div class="mt-1 row " style="padding:50px;text-align:justify">
          <div class="mt-1 row " style="padding:7px;text-align:justify;background-color:black;height:50px">
            <center>  <h4 style="color:white  ">Find Your best deal for your event, here !</h4></center>
          </div></div>

    <div class="container-fluid text-center">

      <div class="mt-1 row " style="padding:50px;text-align:justify">
          
          <div class="col-sm-6 py-5">
                <div class="p-5">

                   <div class="container">
                    <div class="img-card">
                        <?php
                        if (empty($_GET['img'])) {
                            echo '<center><img class="img-fluid roomPreview prev" src="https://simg.nicepng.com/png/small/134-1340738_blue-sky-4-star-hotel-logo-blue-sky.png" alt="http://ppg.fkip.upr.ac.id/assets/images/notfound.jpg"></center>';
                        } else {
                            echo '<img class="img-fluid roomPreview prev" src="https://' . $_GET['img'] . '" alt="404 NOT FOUND">';
                        }
                        ?>
                    </div>

                </div>
                </div>
            </div>

            <div class="col-sm-6 px-2">
               
                    <form method="post" action="Mybooking.php">
                        <div class="form-group">
                            <label for="inputNama" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="inputNama" placeholder="Nama Anda" name="nama" value="RAFLI_1202194337" required readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inDate" class="col-sm-3 col-form-label">Event Date</label>
                            <div class="col-sm-12">
                                <input type="date" class="form-control" id="inputDate" placeholder="mm/dd/yyyy" name="masukintanggal" value="<?php echo date('Y-m-d'); ?>" required>
                            </div>
                        </div>

                       <div class="form-group">
                            <label for="inputNama" class="col-sm-3 col-form-label">Start Time</label>
                            <div class="col-sm-12">
                                <input type="time" class="form-control" id="inputNama" placeholder="--:-- --" name="start" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDuration" class="col-sm-3 col-form-label">Duration (Hours)</label>
                            <div class="col-sm-12">
                                <input required name="duration" placeholder="Duration" class="form-control" type="number" min="1" aria-describedby="days">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12 col-form-label" for="sel1">Building Type</label>
                            <div class="col-sm-12">
                                <?php
                                if (empty($_GET['room'])) {
                                    echo '
                                <select name="listdata" class="form-control" id="listdata" onchange="change_image()">
                                    <option id="1" value="Nusantara">
                                        Nusantara</option>
                                    <option id="2" value="Garuda">
                                        Garuda</option>
                                    <option id="3" value="GSG">
                                        Gedung Serba Guna</option>
                                </select>';
                                } else {
                                    $roomType = $_GET['room'];
                                    $stat = is_null($roomType);
                                    if ($stat != 1) {
                                        echo '
                                        
                                <input readonly name="listdata" type="text" class="form-control disabled"  id="listdata"  value="' . $roomType . '" required>';
                                    } else {
                                        echo '    <div class="col-sm-12">
                                <select name="listdata" class="form-control" id="listdata" onchange="change_image()">
                                  <option id="1" value="Nusantara">
                                        Nusantara</option>
                                    <option id="2" value="Garuda">
                                        Garuda</option>
                                    <option id="3" value="GSG">
                                        Gedung Serba Guna</option>
                                </select>
                            </div>';
                                    }
                                }
                                ?>
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-sm-12 col-form-label">Phone Number :</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="inputPhone" placeholder="Nomor Telpon" name="notelp" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12 col-form-label" for="sel1">Add Service(s)</label>
                            <div class="col-sm-12">

                                <input type="checkbox" name="services[]" value="Catering"> Catering / $700 <br>
                                <input type="checkbox" name="services[]" value="Decoration"> Decoration / $450 <br>
                                <input type="checkbox" name="services[]" value="Sound"> Sound Sytem / $250 <br>
                                </fieldset>
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-sm-12 py-3">
                                <button type="submit" name="submit" id="btn-submit" class="btn btn-primary btn-block" style="width:100% ">Book</button>
                            </div>
                        </div>

                    </form>
            </div>
        </div>
    </div>
 
<!-- 
<div class="mt-5 row text-start">
        <div class="col-lg-4 px-5 mt-2">
          <div class="card">
            <img src="https://batu.el-hotels.com/wp-content/uploads/sites/45/2019/07/SYF_8391.jpg">
            <div class="card-body">
              <h5 class="card-title">Nusantara Hall</h5>
              <p class="card-text" style="text-align:justify; ">$2000 / Hour<br>5000 Capacity</p>
              <hr>
              <center><p style="color:green; font-size: 15px;font-weight:bold">Free Parking</p><hr><p style="color:green; font-size: 15px;font-weight:bold">Full AC</p><hr><p style="color:green; font-size: 15px;font-weight:bold">Cleaning Service</p><hr><p style="color:green; font-size: 15px;font-weight:bold">Covid-19 Health Protocol</p>
                <hr> <button type="button" class="btn btn-primary">Book Now</button>

              </center>
            </div>
          </div>
        </div>
        <div class="col-lg-4 px-5 mt-2">
          <div class="card">
            <img src="https://i.pinimg.com/736x/c6/3d/90/c63d90229340002ffb2e1899c9d1a077--jakarta-ballrooms.jpg">
            <div class="card-body">
              <h5 class="card-title">Garuda Hall</h5>
              <p class="card-text" style="text-align:justify; ">$1000 / Hour<br>2000 Capacity</p>
              <hr>
              <center><p style="color:green; font-size: 15px;font-weight:bold">Free Parking</p><hr><p style="color:green; font-size: 15px;font-weight:bold">Full AC</p><hr><p style="color:red; font-size: 15px;font-weight:bold">No Cleaning Service</p><hr><p style="color:green; font-size: 15px;font-weight:bold">Covid-19 Health Protocol</p> <hr> <button type="button" class="btn btn-primary">Book Now</button></center>
            </div>
          </div>
        </div>
        <div class="col-lg-4 px-5 mt-2">
          <div class="card">
            <img src="https://moedayana.files.wordpress.com/2010/12/fac-int1.jpg">
            <div class="card-body">
              <h5 class="card-title">Gedung Serba Guna</h5>
              <p class="card-text" style="text-align:justify; ">$500 / Hour<br>500 Capacity</p>
              <hr>
              <center><p style="color:red; font-size: 15px;font-weight:bold">No Free Parking</p><hr><p style="color:red; font-size: 15px;font-weight:bold">No Full AC</p><hr><p style="color:red; font-size: 15px;font-weight:bold">No Cleaning Service</p><hr><p style="color:green; font-size: 15px;font-weight:bold">Covid-19 Health Protocol</p> <hr> <button type="button" class="btn btn-primary">Book Now</button></center>
            </div>
          </div>
        </div>

  </section> -->

  <footer class="bg-light py-2 text-center"><p class="text-secondary m-0">Dibuat oleh Taufik Rafli Margocahyo _1202194337</p></footer>
</body>
</html>
