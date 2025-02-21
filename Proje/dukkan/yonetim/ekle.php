<?php
echo'<head><script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script></head>';

session_start();
require_once "../functions.php";

if(isset($_SESSION["kadi"])){
    $tablo = $_GET["tablo"];
    if($tablo == "kullanicilar"){
        echo '
            <!DOCTYPE html>
            <html>
            <head></head>
            <body>
                <form action="ekle_process.php" method="POST">
                    <input type="hidden" name="tablo" value="kullanicilar">
                    Kullanıcı Adı <input type="text" name="kadi"><br>
                    Şifre <input type="text" name="ksifre"><br>
                    <input type="submit" name="ekle" value="Ekle">
                </form>
            </body>
            </html>';
    }
    else{
        echo '
            <!DOCTYPE html>
            <html>
            <head></head>
            <body>
                <form action="ekle_process.php" method="POST">
                    <input type="hidden" name="tablo" value="'.$tablo.'">
                    Resim <textarea name="resim" id="editor1" class="ckeditor"></textarea><br>
                    Başlık <textarea name="baslik" id="editor1" class="ckeditor"></textarea><br>
                    İçerik <textarea name="icerik" id="editor1" class="ckeditor"></textarea><br>
                    <input type="submit" name="ekle" value="Ekle">
                </form>
            </body>
            </html>';
    }
} else {
    header("location:../index.php");
}
?>
