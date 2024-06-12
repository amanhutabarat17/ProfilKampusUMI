<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB1', 'mahasiswadb');
 
// Buat Koneksinya
$db1 = new mysqli(HOST, USER, PASS, DB1);
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=laporan-word.doc");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <table border="0" align="center">
        <tr>
            <th rowspan="4"></th>
            <th style="font-size: calc(1.475rem + 2.7vw);
  font-weight: 300;
  line-height: 1.2;">UNIVERSITAS METHODIST INDONESIA</th>
        </tr>
        <tr>
            <th style=" font-size: calc(1.375rem + 1.5vw);
  font-weight: 300;
  line-height: 1.2;"> PENDAFTARAN MAHASISWA BARU</th>
        </tr>
        <tr>
            <th>Jl. Hang Tuah No.8, Madras Hulu, Kec. Medan Polonia, Kota Medan, Sumatera Utara 20151</th>
        </tr>
        <tr>
            <th>
                <hr style="border: 2px solid black;">
            </th>
        </tr>
    </table>

    <table border="1">
        <tr>
            <th>NPM</th>
            <th>NAMA</th>
            <th>KELAS</th>
            <th>JENKEL</th>
            <th>ALAMAT</th>
        </tr>
        <?php
        $query = "SELECT * FROM mahasiswa ORDER BY npm ASC";
        $dewan1 = $db1->prepare($query);
        $dewan1->execute();
        $res1 = $dewan1->get_result();
        if ($res1->num_rows > 0) {
            while ($row = $res1->fetch_assoc()) {
                $npm = $row['npm'];
                $nama = $row['nama'];
                $kelas = $row['kelas'];
                $jenkel = $row['jenkel'];
                $alamat = $row['alamat'];

                echo "<tr>";
                    echo "<td>".$npm."</td>";
                    echo "<td>".$nama."</td>";
                    echo "<td>".$kelas."</td>";
                    echo "<td>".$jenkel."</td>";
                    echo "<td>".$alamat."</td>";
                echo "</tr>";
        } } else { 
            echo "<tr>";
                echo "<td colspan='5'>Tidak ada data ditemukan</td>";
            echo "</tr>";
         }
        ?>
    </table>
</body>

</html>