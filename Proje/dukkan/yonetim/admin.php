<?php
session_start();
require_once("../tema.php");
require_once "../functions.php";
echo
    '
<!DOCTYPE html>
    <html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Armoni Efes</title>
        <link rel="icon" type="image/x-icon" href="efesfavicon.jpg">
        <link rel="stylesheet" href="../css/stilim.css">
        <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    </head>
    <body>
    ';
echo '
    <header>
        <a href="../index.php"><img src="../resimler/armoniefeslogo3.png" alt="Armoni Efes Logo"></a>
        <div class="slogan">Müziğin Armonik Sırları Burada...</div>
        <nav class="basmenu">
            <a href="../index.php">Ana Sayfa</a>';
            if(isset($_SESSION["kadi"])){
                if($_SESSION["kadi"]=="admin"){
                    echo'<a href="admin.php">Admin Paneli</a>';
                }
                echo'<a href="../logout.php">Çıkış Yap</a>';
            }
            else{
                echo '<a href="../giris_yap.php">Giriş Yap</a>';
            }
    echo'
        </nav>
    </header>';
    echo'
    <nav class="menu">
        <ul>
            <li>
                <a href="../vurmalilar.php">Vurmalılar</a>
                <ul>';
                $baglanti = baglan();
                $sorgu = "SELECT * FROM vurmalilar";
                $sonuc = mysqli_query($baglanti,$sorgu);
                if($sonuc){
                    while($satir = mysqli_fetch_assoc($sonuc)){
                        echo "
                        <li><a href='../vurmalilar.php?id=".$satir["id"]."'>".$satir["baslik"]."</a></li>
                        ";
                    }
                }
            echo'       
                </ul>
            </li>';

            echo'
            <li>
                <a href=".//nefesliler.php">Nefesliler</a>
                <ul>';
                $baglanti = baglan();
                $sorgu = "SELECT * FROM nefesliler";
                $sonuc = mysqli_query($baglanti,$sorgu);
                if($sonuc){
                    while($satir = mysqli_fetch_assoc($sonuc)){
                        echo "
                        <li><a href='../nefesliler.php?id=".$satir["id"]."'>".$satir["baslik"]."</a></li>
                        ";
                    }
                }
            echo'       
                </ul>
            </li>';

            echo'
            <li>
                <a href="../tuslular.php">Tuşlular</a>
                <ul>';
                $baglanti = baglan();
                $sorgu = "SELECT * FROM tuslular";
                $sonuc = mysqli_query($baglanti,$sorgu);
                if($sonuc){
                    while($satir = mysqli_fetch_assoc($sonuc)){
                        echo "
                        <li><a href='../tuslular.php?id=".$satir["id"]."'>".$satir["baslik"]."</a></li>
                        ";
                    }
                }
            echo'       
                </ul>
            </li>';

            echo'
            <li>
                <a href="../telliler.php">Telliler</a>
                <ul>';
                $baglanti = baglan();
                $sorgu = "SELECT * FROM telliler";
                $sonuc = mysqli_query($baglanti,$sorgu);
                if($sonuc){
                    while($satir = mysqli_fetch_assoc($sonuc)){
                        echo "
                        <li><a href='../telliler.php?id=".$satir["id"]."'>".$satir["baslik"]."</a></li>
                        ";
                    }
                }
            echo'       
                </ul>
            </li>';

            echo'
            <li>
                <a href="../yaylilar.php">Yaylılar</a>
                <ul>';
                $baglanti = baglan();
                $sorgu = "SELECT * FROM yaylilar";
                $sonuc = mysqli_query($baglanti,$sorgu);
                if($sonuc){
                    while($satir = mysqli_fetch_assoc($sonuc)){
                        echo "
                        <li><a href='../yaylilar.php?id=".$satir["id"]."'>".$satir["baslik"]."</a></li>
                        ";
                    }
                }
            echo'
                </ul>
            </li>
        </ul>
    </nav>
    ';
require_once "../functions.php";
if(isset($_SESSION["kadi"])){
    
    $baglanti = baglan();
    $sorgu = "SELECT * FROM kullanicilar";
    $sonuc = mysqli_query($baglanti,$sorgu);
    if($sonuc){
        echo'
        <section>
        <h1>Kullanıcılar Tablosu</h1>
        <table border="1">
        <tr><th>ID</th><th>Kullanıcı Adı</th><th>Şifre</th>
        <th>Düzenle</th><th>Sil</th><th><a href="ekle.php?tablo=kullanicilar">Ekle</a></th></tr>
        ';
        while($satir = mysqli_fetch_assoc($sonuc)){
            echo "
            <tr>
            <td>".$satir["id"]."</td>
            <td>".$satir["kadi"]."</td>
            <td>".$satir["ksifre"].'</td>
            <td><a href="duzenle.php?tablo=kullanicilar&id='.$satir["id"].'">Düzenle</a></td>
            <td><a href="sil.php?tablo=kullanicilar&id='.$satir["id"].'">Sil</a></td>
            <td></td>
            </tr> ';
        }
        echo "</table>";
        echo "</section><br>";
    }
    $sorgu2 = "SELECT * FROM anaicerik";
    $sonuc2 = mysqli_query($baglanti,$sorgu2);
    if($sonuc2){
        echo'
        <section>
        <h1>Ana İçerik Tablosu</h1>
        <table border="1">
        <tr><th>ID</th><th>Resim</th><th>Başlık</th><th>İçerik</th>
        <th>Düzenle</th><th>Sil</th><th><a href="ekle.php?tablo=anaicerik">Ekle</a></th></tr>
        ';
        while($satir = mysqli_fetch_assoc($sonuc2)){
            echo "
            <tr>
            <td>".$satir["id"]."</td>
            <td width='300px'><img src='".$satir["resim"]."' alt='".$satir["resim"]."' width='250px'></td>
            <td>".$satir["baslik"]."</td>
            <td>".$satir["icerik"].'</td>
            <td><a href="duzenle.php?tablo=anaicerik&id='.$satir["id"].'">Düzenle</a></td>
            <td><a href="sil.php?tablo=anaicerik&id='.$satir["id"].'">Sil</a></td>
            <td></td>
            </tr> ';
        }
        echo "</table>";
        echo "</section><br>";
    }
    $sorgu3 = "SELECT * FROM vurmalilar";
    $sonuc3 = mysqli_query($baglanti,$sorgu3);
    if($sonuc3){
        echo'
        <section>
        <h1>Vurmalılar Tablosu</h1>
        <table border="1">
        <tr><th>ID</th><th>Resim</th><th>Başlık</th><th>İçerik</th>
        <th>Düzenle</th><th>Sil</th><th><a href="ekle.php?tablo=vurmalilar">Ekle</a></th></tr>
        ';
        while($satir = mysqli_fetch_assoc($sonuc3)){
            echo "
            <tr>
            <td>".$satir["id"]."</td>
            <td width='300px'><img src='".$satir["resim"]."' alt='".$satir["resim"]."' width='250px'></td>
            <td>".$satir["baslik"]."</td>
            <td>".$satir["icerik"].'</td>
            <td><a href="duzenle.php?tablo=vurmalilar&id='.$satir["id"].'">Düzenle</a></td>
            <td><a href="sil.php?tablo=vurmalilar&id='.$satir["id"].'">Sil</a></td>
            <td></td>
            </tr> ';
        }
        echo "</table>";
        echo "</section><br>";
    }
    $sorgu4 = "SELECT * FROM nefesliler";
    $sonuc4 = mysqli_query($baglanti,$sorgu4);
    if($sonuc4){
        echo'
        <section>
        <h1>Nefesliler Tablosu</h1>
        <table border="1">
        <tr><th>ID</th><th>Resim</th><th>Başlık</th><th>İçerik</th>
        <th>Düzenle</th><th>Sil</th><th><a href="ekle.php?tablo=nefesliler">Ekle</a></th></tr>
        ';
        while($satir = mysqli_fetch_assoc($sonuc4)){
            echo "
            <tr>
            <td>".$satir["id"]."</td>
            <td width='300px'><img src='".$satir["resim"]."' alt='".$satir["resim"]."' width='250px'></td>
            <td>".$satir["baslik"]."</td>
            <td>".$satir["icerik"].'</td>
            <td><a href="duzenle.php?tablo=nefesliler&id='.$satir["id"].'">Düzenle</a></td>
            <td><a href="sil.php?tablo=nefesliler&id='.$satir["id"].'">Sil</a></td>
            <td></td>
            </tr> ';
        }
        echo "</table>";
        echo "</section><br>";
    }
    $sorgu5 = "SELECT * FROM tuslular";
    $sonuc5 = mysqli_query($baglanti,$sorgu5);
    if($sonuc5){
        echo'
        <section>
        <h1>Tuşlular Tablosu</h1>
        <table border="1">
        <tr><th>ID</th><th>Resim</th><th>Başlık</th><th>İçerik</th>
        <th>Düzenle</th><th>Sil</th><th><a href="ekle.php?tablo=tuslular">Ekle</a></th></tr>
        ';
        while($satir = mysqli_fetch_assoc($sonuc5)){
            echo "
            <tr>
            <td>".$satir["id"]."</td>
            <td width='300px'><img src='".$satir["resim"]."' alt='".$satir["resim"]."' width='250px'></td>
            <td>".$satir["baslik"]."</td>
            <td>".$satir["icerik"].'</td>
            <td><a href="duzenle.php?tablo=tuslular&id='.$satir["id"].'">Düzenle</a></td>
            <td><a href="sil.php?tablo=tuslular&id='.$satir["id"].'">Sil</a></td>
            <td></td>
            </tr> ';
        }
        echo "</table>";
        echo "</section><br>";
    }
    $sorgu6 = "SELECT * FROM telliler";
    $sonuc6 = mysqli_query($baglanti,$sorgu6);
    if($sonuc3){
        echo'
        <section>
        <h1>Telliler Tablosu</h1>
        <table border="1">
        <tr><th>ID</th><th>Resim</th><th>Başlık</th><th>İçerik</th>
        <th>Düzenle</th><th>Sil</th><th><a href="ekle.php?tablo=telliler">Ekle</a></th></tr>
        ';
        while($satir = mysqli_fetch_assoc($sonuc6)){
            echo "
            <tr>
            <td>".$satir["id"]."</td>
            <td width='300px'><img src='".$satir["resim"]."' alt='".$satir["resim"]."' width='250px'></td>
            <td>".$satir["baslik"]."</td>
            <td>".$satir["icerik"].'</td>
            <td><a href="duzenle.php?tablo=telliler&id='.$satir["id"].'">Düzenle</a></td>
            <td><a href="sil.php?tablo=telliler&id='.$satir["id"].'">Sil</a></td>
            <td></td>
            </tr> ';
        }
        echo "</table>";
        echo "</section><br>";
    }
    $sorgu7 = "SELECT * FROM yaylilar";
    $sonuc7 = mysqli_query($baglanti,$sorgu7);
    if($sonuc3){
        echo'
        <section>
        <h1>Yaylılar Tablosu</h1>
        <table border="1">
        <tr><th>ID</th><th>Resim</th><th>Başlık</th><th>İçerik</th>
        <th>Düzenle</th><th>Sil</th><th><a href="ekle.php?tablo=yaylilar">Ekle</a></th></tr>
        ';
        while($satir = mysqli_fetch_assoc($sonuc7)){
            echo "
            <tr>
            <td>".$satir["id"]."</td>
            <td width='300px'><img src='".$satir["resim"]."' alt='".$satir["resim"]."' width='250px'></td>
            <td>".$satir["baslik"]."</td>
            <td>".$satir["icerik"].'</td>
            <td><a href="duzenle.php?tablo=yaylilar&id='.$satir["id"].'">Düzenle</a></td>
            <td><a href="sil.php?tablo=yaylilar&id='.$satir["id"].'">Sil</a></td>
            <td></td>
            </tr> ';
        }
        echo "</table>";
        echo "</section><br>";
    }
}else{
    header("location:index.php");
}
body_alt_kisim();
?>