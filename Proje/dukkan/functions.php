<?php

function baglan(){
    $baglanti = mysqli_connect("localhost","root","","dukkan");
    if($baglanti){
      /*  echo "Bağlanıldı.<br>"; */
    }else{
        echo "Bağlanılamadı.<br>";
    }
    return $baglanti;
}
?>