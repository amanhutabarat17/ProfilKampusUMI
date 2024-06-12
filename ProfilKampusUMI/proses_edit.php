<?php
                if(isset($_POST['submit'])){
                    $npm = $_POST['npm'];
                    $nama = $_POST['nama'];
                    $kelas = $_POST['kelas'];
                    $jenkel = $_POST['jenkel'];
                    $alamat = $_POST['alamat'];
                
                    $query = "UPDATE mahasiswatbl SET nama='$nama', kelas='$kelas', jenkel='$jenkel', alamat='$alamat' WHERE npm='$npm'";
                
                    $result = mysqli_query($koneksi, $query);
                
                    if ($result) {
                        echo "<script>alert('Data berhasil diubah');</script>";
                    } else {
                        echo "<script>alert('Gagal mengubah data');</script>";
                    }
                } 
                ?>