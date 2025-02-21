<?php
session_start();
require_once "../functions.php";

if(isset($_SESSION["kadi"])){
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["tablo"]) && isset($_GET["id"])) {
        $tablo = $_GET["tablo"];
        $id = $_GET["id"];

        $baglanti = baglan();

        $sorgu = "DELETE FROM $tablo WHERE id = $id";

        $sonuc = mysqli_query($baglanti, $sorgu);

        if($sonuc){
            header("Location:admin.php");
        } else {
            echo "Silme işlemi başarısız oldu.";
        }
    } else {
        echo "Geçersiz istek.";
    }
} else {
    header("location:../index.php");
}
?>
