<?php
include "ayar.php";


// $query = "DELETE FROM blogs WHERE id=1";
// $query = "DELETE FROM blogs WHERE id>5 and i<10"; // burada 5 ile 10 arasinda olan kayitlar silinir.
$query = "DELETE FROM blogs WHERE isActive=0";
$result = mysqli_query($baglan, $query);

$count = mysqli_affected_rows($baglan);// bununlada toplam kac row silindigini ogreniyoruz

if($result){
    echo "silinen veri adeti:".$count;
}else {
    echo "veri silinmedi.";
}

mysqli_close($baglan);



?>