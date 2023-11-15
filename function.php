<?php 

//membuat function
function perkenalan ($cc){
    echo "Assalamualaikum, $cc <br>";
    echo "Perkenalkan nama saya Muhammad Rizal";
    echo "<hr>";
}
    perkenalan ("c");
    perkenalan ("C");

// Function memasukan nilai menggunakan parameter
    function pesan ($salam, $nama){
        echo "halo abg $salam, <br>";
        echo "Perkenalkan nama saya $nama";
        echo "<hr>";
    }
    pesan("hello", "Rizal");
    $salam = "Selamat pagi";
    $nama = "Bapak Rizal";
    pesan($salam,$nama);

//mengembalikan nilai menggunakan return
function hitung_umur ($thn_lahir){
    $umur = date('Y') - $thn_lahir;
    return $umur;
}
    echo "Umur saya sekarang adalah ".hitung_umur (1996)." Tahun";
    echo "<hr>";

//memanggil functtion dalam function

function biodata ($nama, $jkel, $umur){
    echo "ini Function dalam function <br> Nama: ".$nama."<br>";
    echo "Jenis Kelamin: ".$jkel."<br>";
    echo "Umur: ".hitung_umur( $umur)."<br>";
    echo "<hr>";
}
 biodata ("Rizal","Laki-laki","1996");

 //memanggil function defould 
function salam($waktu="Datang",$nama="Admin"){
         return "Selamat $waktu, $nama";
    }
    echo salam("Siang","Rizal");
    echo "<hr>";

//function mengunakan if untuk menampilkan bilangan ganjil genap

function bilangan_ganjil_genap ($angka){

    if ($angka % 2==1){
        echo "$angka adalah bilangan ganjil";
    }else{
        echo "$angka adalah bilanga genap";
    }
}
    bilangan_ganjil_genap(5);
    echo "<br>";
    bilangan_ganjil_genap(10);
    echo "<br>";
    bilangan_ganjil_genap(1996);
?>
