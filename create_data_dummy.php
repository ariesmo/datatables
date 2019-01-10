<?php
ini_set('max_execution_time', 1000);
include '../koneksi.php';

for($i=1;$i<=1000;$i++){
mysqli_query($koneksi, "INSERT INTO mahasiswa SET nim='TI10$i', nama='SISWA ke-$i', jurusan='TEKNIK INFORMATIKA'");
}
?>
