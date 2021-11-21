<!-- ########################
###########################################
Nama :TAUFIK RAFLI MARGOCAHYO
Kelas : SI4303
NIM : SI4303
!IMPORTANT DONT COPY THIS CODE WITHOUT PERMISSION 
HAVE A NICE DAY

$Original data = 85d96ac99544327ff071891342f9f503
###########################################
######################## -->
<?php
$nowDate = time();
if (isset($_POST['submit'])) {
  $judulbuku = $_POST['judulbuku'];
  $Penulis = $_POST['Penulis'];
  $TahunTerbit = $_POST['TahunTerbit'];
  $Deskripsi = $_POST['Deskripsi'];
  $bahasa = $_POST['bahasa'];
  $tag = json_encode($_POST['Tag']);
  $fileIMG = $_FILES['inputImg'];
  $fileIMGName = $_FILES['inputImg']['name'];
  $fileIMGType = $_FILES['inputImg']['type'];
  $fileIMGSize = $_FILES['inputImg']['size'];
  $fileIMGTempLoc = $_FILES['inputImg']['tmp_name'];
  $filePathLocal = "./assets/img/Gambar/Buku/$nowDate-$judulbuku" . ".png";
  $saveLocal =  move_uploaded_file($fileIMGTempLoc, $filePathLocal);


$query = "INSERT INTO `buku_table`
    (`judul_buku`, `penulis_buku`, `tahun_terbit`,
     `deskripsi`, `gambar`, `tag`,
      `bahasa`) 
    VALUES ('$judulbuku','$Penulis','$TahunTerbit',
    '$Deskripsi','$filePathLocal','$tag','$bahasa')";

  $sql = mysqli_query($conn, $query);
  if ($sql) {
    echo '<br>';
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat !! Anda Berhasil Menambahkan Buku ! Check data Buku Kamu </strong> <a href="rafli_home.php">disini</a> .
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
  } else {
    echo '<br>';
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Gagal Menambah Buku! Karena ' . $mysqli_error($conn) . '</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
  }

} else {
  // do nothing
}
