<?php
$baglan = mysqli_connect("localhost","root"," ","paylastikca");
if (!$baglan)
{
    die("Veri tabanı bağlanma işlemi başarısız".mysqli_connect_error());
}
else {
    echo "Bağlantı Başarılı.";
}
?>
