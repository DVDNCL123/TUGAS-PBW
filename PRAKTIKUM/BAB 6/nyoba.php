<?php
//    $nama = "josep bonggah";
//    $umur = 21;


//    // Menampilkan nilai variabel
//    echo "Nama: " . $nama . "<br>";
//    echo "Umur: " . $umur . " tahun<br>";

    // define("SITE_NAME", "unsika.ac.id");
    // define("VERSION", "1.0");


    // echo "Selamat datang di " . SITE_NAME . "<br>";
    // echo "Versi Sistem: " . VERSION . "<br>";

    $nama = "David Nicolas";
    echo "Nama saya adalah ". $nama . "<br>";

    $umur = 21;
    echo "Umur saya " . $umur. " tahun" . "<br>";

    $berat = 70.5;
    echo "Berat badan saya ". $berat ." kg" . "<br>";

    $isLogin = true;

    $buah = ["apel", "jeruk", "mangga"];
    echo $buah[2] . "<br>";

    class Mahasiswa {
       public $nama;
       public function sapa() {
           return "Halo, saya $this->nama";
       }
   }
    $mhs = new Mahasiswa();
    $mhs->nama = "josep";
    echo $mhs->sapa();

    //$data = null;
    //var_dump($data);
?>
