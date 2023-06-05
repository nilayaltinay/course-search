<?php

include "ayar.php";

$query = "INSERT INTO blogs(title, description, imageUrl, url, isActive) VALUES ('film 8', 'film 8 aciklama', '1.jpeg', 'film-8', 1 );";
//$query.= "INSERT INTO blogs(title, description, imageUrl, url, isActive) VALUES ('film 5', 'film 5 aciklama', '2.jpeg', 'film-5', 1 );";
//$query.= "INSERT INTO blogs(title, description, imageUrl, url, isActive) VALUES ('film 6', 'film 6 aciklama', '3.jpeg', 'film-6', 1 );";
//$query.= "INSERT INTO blogs(title, description, imageUrl, url, isActive) VALUES ('film 7', 'film 7 aciklama', '3.jpeg', 'film-7', 0 );";

// $sonuc = mysqli_multi_query($baglan, $query);
$sonuc = mysqli_query($baglan, $query);
$lastid = mysqli_insert_id($baglan);

if ($sonuc){
    echo "Kayit eklendi id: ".$lastid;
} else {
    echo "kayit eklenemedi.";
}

mysqli_close($baglan);



?>