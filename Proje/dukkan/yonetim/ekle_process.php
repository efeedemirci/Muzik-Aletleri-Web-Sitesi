<?php
session_start();
require_once "../functions.php";

if(isset($_SESSION["kadi"])){
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tablo"])) {
        $tablo = $_POST["tablo"];
        $kadi = $_POST["kadi"];
        $ksifre = $_POST["ksifre"];
        $resim = $_POST["resim"];
        $baslik = $_POST["baslik"];
        $icerik = $_POST["icerik"];
        
        $baglanti = baglan();

        if($tablo == "kullanicilar"){
            $sorgu = "INSERT INTO kullanicilar (kadi, ksifre) VALUES ('$kadi', '$ksifre')";
        }
        else{
            $sorgu = "INSERT INTO $tablo (resim, baslik, icerik) VALUES ('$resim', '$baslik', '$icerik')";
        }

        $sonuc = mysqli_query($baglanti, $sorgu);

        if($sonuc){
            header("Location: admin.php");
        } else {
            echo "Ekleme işlemi başarısız oldu.";
        }
    } else {
        echo "Ekleme formu gönderilmedi.";
    }
} else {
    header("location:../index.php");
}
?>