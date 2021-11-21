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
include 'KONEKSINYAKAKAK.php';
if (isset($_POST['deleteAgenda'])) {
    deleteAgenda($_POST['deleteAgenda'],$conn);
}
function deleteAgenda($id_buku,$conn){
   
    $query = "DELETE FROM buku_table where id_buku=$id_buku"; 
    $sql = mysqli_query($conn,$query);
    if ($sql) {
        echo '<br>';
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil Menghapus Buku Kembali ke</strong> <a href="rafli_home.php"> Home</a> .
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    } else {
        echo '<br>';
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Gagal Menghapus DATA dengan ID '.$id.' Karena '.mysqli_error($conn).'</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
}