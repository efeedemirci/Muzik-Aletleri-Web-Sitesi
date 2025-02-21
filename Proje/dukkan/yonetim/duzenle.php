<?php
echo'<head><script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script></head>';

session_start();
require_once "../functions.php";

if(isset($_SESSION["kadi"])){
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["tablo"]) && isset($_GET["id"])) {

        $tablo = $_GET["tablo"];
        $id = $_GET["id"];

        $baglanti = baglan();

        if($tablo == "kullanicilar"){
            $sorgu = "SELECT * FROM kullanicilar WHERE id = $id";
            $formBasligi = "Kullanıcı Düzenle";
        }
        else{
            $sorgu = "SELECT * FROM $tablo WHERE id = $id";
            $formBasligi = "$tablo düzenle";
        }
        
        $sonuc = mysqli_query($baglanti, $sorgu);

        if($sonuc && mysqli_num_rows($sonuc) > 0){
            $satir = mysqli_fetch_assoc($sonuc);
            ?>
            <html>
            <head>
                <title><?php echo $formBasligi; ?></title>
            </head>
            <body>
                <h2><?php echo $formBasligi; ?></h2>
                
                <?php if ($tablo == "kullanicilar"): ?>
                    <form action="duzenle_process.php" method="POST">
                        <input type="hidden" name="tablo" value="<?php echo $tablo; ?>">
                        <input type="hidden" name="id" value="<?php echo $satir['id']; ?>">
                        Kullanıcı Adı: <textarea name="kadi" id="editor1" class="ckeditor"><?php echo $satir['kadi']; ?></textarea><br>
                        Şifre: <textarea name="ksifre" id="editor1" class="ckeditor"><?php echo $satir['ksifre']; ?></textarea><br>
                        <input type="submit" value="Düzenle">
                    </form>
                <?php else: ?>
                    <form action="duzenle_process.php" method="POST">
                        <input type="hidden" name="tablo" value="<?php echo $tablo; ?>">
                        <input type="hidden" name="id" value="<?php echo $satir['id']; ?>">
                        Resim: <textarea name="resim" id="editor1" class="ckeditor"><?php echo $satir['resim']; ?></textarea><br>
                        Başlık: <textarea name="baslik" id="editor1" class="ckeditor"><?php echo $satir['baslik']; ?></textarea><br>
                        İçerik: <textarea name="icerik" id="editor1" class="ckeditor"><?php echo $satir['icerik']; ?></textarea><br>
                        <input type="submit" value="Düzenle">
                    </form>
                <?php endif; ?>
            </body>
            </html>
            <?php
        } else {
            echo "Kayıt bulunamadı.";
        }
    } else {
        echo "Geçersiz istek.";
    }
} else {
    header("location:../index.php");
}
?>
