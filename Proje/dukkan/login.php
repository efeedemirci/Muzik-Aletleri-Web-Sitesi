<?php
if(($_POST["kadi"]=="admin")&&($_POST["ksifre"]=="1234")){
    session_start();
    $_SESSION["kadi"]=$_POST["kadi"];
    header("location:yonetim/admin.php");
}
?>