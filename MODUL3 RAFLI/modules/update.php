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
if (isset($_POST['updateEvent'])) {
  $judulbuku = $_POST['judulbuku'];
  $Penulis = $_POST['Penulis'];
  $TahunTerbit = $_POST['TahunTerbit'];
  $Deskripsi = $_POST['Deskripsi'];
  $bahasa = $_POST['bahasa']; 
  $tag = json_encode($_POST['Tag']);
  $id = $_POST['id_buku'];

  
  $query ="";
    $query = "UPDATE `buku_table` SET 
    `judul_buku`='$judulbuku',
    `penulis_buku`='$Penulis',
    `tahun_terbit`='$TahunTerbit',
    `deskripsi`='$Deskripsi',`bahasa`='$bahasa',
    `tag`='$tag' WHERE `id_buku`= '$id'";
  // }

  $sql = mysqli_query($conn, $query);
  if ($sql) {
    echo '<br>';
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil Mengupdate Data buku! Check datanya</strong> <a href="rafli_home.php"> disini</a> .
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
  } else {
    echo '<br>';
    echo $mysqli_error($conn);
   }
}
