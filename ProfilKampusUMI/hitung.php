<?php 
$golongan='A';
$jamkerja=49;
$upahperjam;
//$satuminggu=7*24;
$upahlembur;
if($golongan=='A'){
$upahperjam=4000;
}else if($golongan=='B'){
    $upahperjam=5000;
}else if($golongan=='C'){
    $upahperjam=6000;
}else if($golongan=='D'){
    $upahperjam=7500;
}

$upah=$jamkerja*$upahperjam;
if($jamkerja>48){
$upahlembur=3000;
$jamlembur=$jamkerja-48;
}else{
    $upahlembur= 0;
    $jamlembur= 0;
}
$gaji=$upah+$upahlembur;

echo'GOLONGAN = '.$golongan.'<br>';
echo 'Jam Kerja = '.$jamkerja.'<br>';
echo 'Lembur = '.$jamlembur.'<br>';
echo 'upah lembur= '.$upahlembur.'<br>';
echo 'upah = upah perjam('.$jamkerja.') x jam kerja ('.$upahperjam.') = '.$upah.'<br>';
echo 'Gaji = upah('.$upah.') + upah lembur ('.$upahlembur.')='.$gaji;
?>
