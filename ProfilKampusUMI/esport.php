<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="container">
    <table border="0" class="text-center">
        <tr>
        <th rowspan="4"><img src="gambar/umi.png" width="150px" alt=""></th>
        <th class="display-4">UNIVERSITAS METHODIST INDONESIA</th>
        </tr>
        <tr>
            <th class="display-6">Pendaftaran Mahasiswa Baru</th>
        </tr>
        <tr>
            <th>  Jl Hang Tuah no 8, Madras Hulu Medan Polonia,
                    Medan, 20151 Phone. +62 61 415-7882 Fax. +62 61 456-7533</th>
        </tr>
        <th><hr style="border:2px solid black;"></th>
        <tr>
        </tr>
    </table>
    <br>
    <h1 align="center">DATA PENDAFTARAN MAHASISWA</h1>
    <br>

    <table  border="1" class="table table-bordered">
        <tr>
        <th>NPM</th>
        <th>NAMA</th>
        <th>KELAS</th>
        <th>JENKEL</th>
        <th>ALAMAT</th>
        </tr>
        <?php
        include 'koneksi.php';
        $query="SELECT * FROM mahasiswa";
        $result=mysqli_query($koneksi,$query);
    while ($row = mysqli_fetch_array($result)) {  
        ?><tr>
        <td><?php echo $row['npm']?></td>
        <td><?php echo $row['nama']?></td>
        <td><?php echo $row['kelas']?></td>
        <td><?php echo $row['jenkel']?></td>
        <td><?php echo $row['alamat']?></td>
        </tr>
     <?php
     
    }  
    ?>
    </table>
    <a href="esportword.php">
        <button class="btn btn-primary">Download</button>
    </a>
</body>
</html>