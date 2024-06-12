<?php
include 'koneksi.php';

if(isset($_POST['submit'])){
    $npm= $_POST['npm'];
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $jenkel=$_POST['jenkel'];
    $alamat=$_POST['alamat'];
  $query= "INSERT INTO mahasiswa(npm, nama, kelas, jenkel, alamat) VALUES('$npm', '$nama', '$kelas', '$jenkel', '$alamat')";
    $result=mysqli_query($koneksi, $query) ;
if($result){
echo"<script>";
echo "alert('Data Berhasil Dimasukkan')";
echo "</script>";
header("location: datadiri.php");
exit();
}else{
    echo"<script> alert('Gagal menambahakan data');</script>"; 
}
}

?>