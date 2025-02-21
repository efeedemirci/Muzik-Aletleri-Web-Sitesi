<?php
session_start();
require_once "../functions.php";

if(isset($_SESSION["kadi"])){
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tablo"])) {
        $tablo = $_POST["tablo"];
        $id = $_POST["id"];
        $kadi = $_POST["kadi"];
        $ksifre = $_POST["ksifre"];
        $resim = $_POST["resim"];
        $baslik = $_POST["baslik"];
        $icerik = $_POST["icerik"];

        $baglanti = baglan();

        if($tablo == "kullanicilar"){
            $sorgu = "UPDATE kullanicilar SET kadi='$kadi', ksifre='$ksifre' WHERE id=$id";
        }
        else{
            $sorgu = "UPDATE $tablo SET resim='$resim', baslik='$baslik', icerik='$icerik' WHERE id=$id";
        }

        $sonuc = mysqli_query($baglanti, $sorgu);

        if($sonuc){
            header("Location: admin.php");
        } else {
            echo "Düzenleme işlemi başarısız oldu.";
        }
    } else {
        echo "Düzenleme formu gönderilmedi.";
    }
} else {
    header("location:../index.php");
}
?>
