<?php

    include "ayar.php";

    // $query = "SELECT * FROM blogs"; # bu yontemle tum data okunur. Ancak belirli kolonu almak istiyorsam asagidaki gibi de cagirabilirim.
    $query = "SELECT id,title, isActive FROM blogs";

    $result = mysqli_query($baglan, $query);

    while ($row = mysqli_fetch_row($result)){ // satirlarin kolonlarina index numaralariyla ulasiyoruz. Bunun sayesinde biz tum rawlarin 0.ci ve 1.ci indexlerini yazdirdik.
        echo $row[0]." ".$row[1]." ".$row[2]; #id & title & isActive
        echo "<br>";
        //echo $row[1]; #title   
    }

    echo "<hr>"; #cizgi ekle

    $result = mysqli_query($baglan, $query);

    while ($row = mysqli_fetch_assoc($result)){ // satirlarin kolonlarina index numaralariyla ulasiyoruz. Bunun sayesinde biz tum rawlarin 0.ci ve 1.ci indexlerini yazdirdik.
        echo $row["id"]." ".$row["title"]; #id & title
        echo "<br>";
        //echo $row[1]; #title   
    }



    echo $row[0]; #id
    echo "<br>";
    echo $row[1]; #title

    mysqli_close($baglan);

?>