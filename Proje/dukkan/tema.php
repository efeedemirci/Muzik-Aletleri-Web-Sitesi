<?php
function head_ustkisim(){
    echo
    '
<!DOCTYPE html>
    <html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Armoni Efes</title>
        <link rel="icon" type="image/x-icon" href="efesfavicon.jpg">
        <link rel="stylesheet" href="css/stilim.css">
    </head>
    <body>
    ';
}
function body_ustkisim() {
        echo '
        <header>
            <a href="index.php"><img src="resimler/armoniefeslogo3.png" alt="Armoni Efes Logo"></a>
            <div class="slogan">Müziğin Armonik Sırları Burada...</div>
            <nav class="basmenu">
                <a href="index.php">Ana Sayfa</a>';
                if(isset($_SESSION["kadi"])){
                    if($_SESSION["kadi"]=="admin"){
                        echo'<a href="yonetim/admin.php">Admin Paneli</a>';
                    }
                    echo'<a href="logout.php">Çıkış Yap</a>';
                }
                else{
                    echo '<a href="giris_yap.php">Giriş Yap</a>';
                }
        echo'
            </nav>
        </header>';
}
function body_menukisim(){
    echo'
    <nav class="menu">
        <ul>
            <li>
                <a href="vurmalilar.php">Vurmalılar</a>
                <ul>';
                require_once "functions.php";
                $baglanti = baglan();
                $sorgu = "SELECT * FROM vurmalilar";
                $sonuc = mysqli_query($baglanti,$sorgu);
                if($sonuc){
                    while($satir = mysqli_fetch_assoc($sonuc)){
                        echo "
                        <li><a href='vurmalilar.php?tablo=vurmalilar&id=".$satir["id"]."'>".$satir["baslik"]."</a></li>
                        ";
                    }
                }
            echo'       
                </ul>
            </li>';

            echo'
            <li>
                <a href="nefesliler.php">Nefesliler</a>
                <ul>';
                require_once "functions.php";
                $baglanti = baglan();
                $sorgu = "SELECT * FROM nefesliler";
                $sonuc = mysqli_query($baglanti,$sorgu);
                if($sonuc){
                    while($satir = mysqli_fetch_assoc($sonuc)){
                        echo "
                        <li><a href='nefesliler.php?id=".$satir["id"]."'>".$satir["baslik"]."</a></li>
                        ";
                    }
                }
            echo'       
                </ul>
            </li>';

            echo'
            <li>
                <a href="tuslular.php">Tuşlular</a>
                <ul>';
                require_once "functions.php";
                $baglanti = baglan();
                $sorgu = "SELECT * FROM tuslular";
                $sonuc = mysqli_query($baglanti,$sorgu);
                if($sonuc){
                    while($satir = mysqli_fetch_assoc($sonuc)){
                        echo "
                        <li><a href='tuslular.php?id=".$satir["id"]."'>".$satir["baslik"]."</a></li>
                        ";
                    }
                }
            echo'       
                </ul>
            </li>';

            echo'
            <li>
                <a href="telliler.php">Telliler</a>
                <ul>';
                require_once "functions.php";
                $baglanti = baglan();
                $sorgu = "SELECT * FROM telliler";
                $sonuc = mysqli_query($baglanti,$sorgu);
                if($sonuc){
                    while($satir = mysqli_fetch_assoc($sonuc)){
                        echo "
                        <li><a href='telliler.php?id=".$satir["id"]."'>".$satir["baslik"]."</a></li>
                        ";
                    }
                }
            echo'       
                </ul>
            </li>';

            echo'
            <li>
                <a href="yaylilar.php">Yaylılar</a>
                <ul>';
                require_once "functions.php";
                $baglanti = baglan();
                $sorgu = "SELECT * FROM yaylilar";
                $sonuc = mysqli_query($baglanti,$sorgu);
                if($sonuc){
                    while($satir = mysqli_fetch_assoc($sonuc)){
                        echo "
                        <li><a href='yaylilar.php?id=".$satir["id"]."'>".$satir["baslik"]."</a></li>
                        ";
                    }
                }
            echo'
                </ul>
            </li>
        </ul>
    </nav>
    ';
}
function body_ana_icerik(){
    require_once "functions.php";
    $baglanti = baglan();
    $sorgu = "SELECT * FROM anaicerik";
    $sonuc = mysqli_query($baglanti,$sorgu);
    if($sonuc){
        while($satir = mysqli_fetch_assoc($sonuc)){
            echo "
            <section class='content'>
            <div>
                <h2>".$satir["baslik"]."</h2>
                <img src='resimler/".$satir["resim"]."' alt='Resim' width='700px'>
            </div>
            <div>
                <p>".$satir["icerik"]."</p>
            </div>
            </section>
            ";
        }
    }
    else{
        echo "Makale Bulunamadı.";
    }
}
function body_giris_formu(){
    echo'
    <section>
        <form method="POST" action="login.php">
            Kullanıcı Adı<input type="text" name="kadi"><br>
            Şifre<input type="password" name="ksifre"><br>
            <input type="submit" name="login" value="Giriş Yap">
        </form>
    </section>
    ';
}
function body_alt_kisim(){
    echo
    '
        <footer>
            <div class="contact-info">
                <h3>İletişim Bilgileri</h3>
                <p>Tel: +90 (312) 505 05 50</p>
                <p>Adres: Aziziye Mh. Cinnah Cd. No: 114/A, 06690 Çankaya/ANKARA</p>
            </div>
            <div class="copyright">
                <p>&copy; 2024 Armoni Efes</p>
            </div>
        </footer>
    </body>
    </html>
    ';
}
?>