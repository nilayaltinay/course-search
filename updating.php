<?php
include "ayar.php";

// $query = "UPDATE blogs SET title='guncellendi', description='guncellendi' WHERE id=1";
// yukarida sadece id si 1 olan row uzerinden title ve description kolonlarini 'guncellendi'
//olarak degistiriyorum.

// $query = "UPDATE blogs SET imageUrl='1.jpeg'"; burada da tum imageUrl'ler 1.jpeg olarak guncellenir.

$query = "UPDATE blogs SET imageUrl='1.jpeg' WHERE isActive=1";
$result=mysqli_query($baglan, $query);

if($result){
    echo "veri guncelledin.";
}else{
    echo "veri guncelleme hatasi";
}



mysqli_close($baglan);



?>