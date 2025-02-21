<?php
session_start();
require_once "tema.php";
head_ustkisim();
body_ustkisim();
body_menukisim();

require_once "functions.php";
$baglanti = baglan();

if (isset($_GET["id"])) {
    $id = mysqli_real_escape_string($baglanti, $_GET["id"]);
    $sorgu = "SELECT * FROM tuslular WHERE id = $id";
    $sonuc = mysqli_query($baglanti, $sorgu);
    
    if ($sonuc && $satir = mysqli_fetch_assoc($sonuc)) {
        echo "
        <section class='content'>
        <div>
            <h2>".$satir["baslik"]."</h2>
            <img src='resimler/".$satir["resim"]."' alt='Resim' width='600px'>
        </div>
        <div>
            <p>".$satir["icerik"]."</p>
        </div>
        </section>
        ";
    } else {
        echo "Belirtilen ID'ye ait içerik bulunamadı.";
    }
} else {
    $sorgu = "SELECT * FROM tuslular";
    $sonuc = mysqli_query($baglanti, $sorgu);

    if ($sonuc) {
        while ($satir = mysqli_fetch_assoc($sonuc)) {
            echo "
            <section class='content'>
            <div>
                <h2>".$satir["baslik"]."</h2>
                <img src='resimler/".$satir["resim"]."' alt='Resim' width='600px'>
            </div>
            <div>
                <p>".$satir["icerik"]."</p>
            </div>
            </section>
            ";
        }
    }
}
body_alt_kisim();
?>
