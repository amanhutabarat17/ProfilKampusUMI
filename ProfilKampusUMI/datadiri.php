<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    td{
        padding: 5px;
    }
</style>
<body>
   <center>
    <form action="proses_input.php" method="POST">
    <table style="background-color: cornflowerblue;border-radius: 8px;box-shadow: 15px 15px 15px rgba(0, 0, 0, 0.7);">
        <th colspan="2">
           <h1>FORM MAHASISWA</h1> 
        </th>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" id=""></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="npm"></td>
        </tr>
        <tr>
            <td>JENIS KELAMIN</td>
            <td><input type="radio" name="jenkel" value="laki-laki">LAKI-LAKI <input type="radio" name="jenkel" value="perempuan">PEREMPUAN</td>
        </tr>
        <tr>
         <td> KELAS </td>
         <td>
         <select name="kelas" id="">
            <option value="TIA">TIA</option>
            <option value="TIB">TIB</option>
            <option value="TIC">TIC</option>
            <option value="TID">TID</option>
            <option value="TIMALAM">TI-MALAM</option>
         </select>
        </td>
        </tr>
        <tr>

        </tr>
        <tr>
            <td>ALAMAT</td>
           <td><textarea name="alamat" id="" cols="30" rows="10" name="alamat"></textarea></td> 
        </tr>
        <th colspan="2">
            <input type="submit" value="submit" name="submit">
        </th>
    </table>
    </form>
</center>
<br>
<table border="2">
<tr>
    <th>NPM</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Jenis Kelamin</th>
    <th>Alamat</th>
    <th>Action</th>
</tr>
<?php 
include'koneksi.php';

$query="SELECT * FROM mahasiswa";
$result=mysqli_query($koneksi, $query);
while($row=mysqli_fetch_assoc($result)){
echo"<tr>";
echo"<td>" .$row['npm']."</td>";
echo"<td>" .$row['nama']."</td>";
echo"<td>" .$row['kelas']."</td>";
echo"<td>" .$row['jenkel']."</td>";
echo"<td>" .$row['alamat']."</td>";
echo"<td><a href='edit.php?npm=" .$row['npm']."'>Edit</a> | <a href='hapus.php?npm=" .$row['npm']. "'>Hapus</a></td>";
echo"<tr>";
}
?>
</table>
</body>
</html>
