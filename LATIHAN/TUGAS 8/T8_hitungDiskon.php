<?php
$npm = $_GET['npm'];
$nama = $_GET['nama'];
$prodi = $_GET['prodi'];
$semester = $_GET['smt'];
$ukt = $_GET['ukt'];

echo "NPM: ".$npm;
echo "<br>";
echo "Nama: ".$nama;
echo "<br>";
echo "Prodi: ".$prodi;
echo "<br>";
echo "Semester: ".$semester;
echo "<br>";
echo "Biaya ukt: ".number_format($ukt, 0, ',', '.');
echo "<br>";

$ukt;
if($ukt >= 5000000 ){
    if($semester<=8){
        $diskon = 0.10;
    }else{
        $diskon = 0.15;
    }

    $uktDiskon = $ukt * $diskon;
    $total = $ukt - $uktDiskon;

    echo "Diskon: ".($diskon*100). "%<br>";
    echo "YANG HARUS DIBAYAR:Rp ".number_format($total,0, ',', ".");
}else{
    echo "YANG HARUS DIBAYAR: Rp".number_format($ukt, 0, ',', '.');
}

?>