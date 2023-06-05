<?php

    include "ayar.php";

    // $query = "SELECT * FROM blogs";
    // $query = "SELECT * FROM blogs WHERE id=1";
    // $query = "SELECT * FROM blogs WHERE id>=4";
    // $query = "SELECT * FROM blogs WHERE id>4 and id<8";
    // $query = "SELECT * FROM blogs WHERE id>4 or id<8";
    // $query = "SELECT * FROM blogs WHERE title = 'film 1";
    // $query = "SELECT * FROM blogs WHERE imageUrl = '1.jpeg";
    $query = "SELECT * FROM blogs WHERE isActive!=1" ;
    $query = "SELECT * FROM blogs WHERE isActive=1 and title like '%film%' ";



    $result = mysqli_query($baglan, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)){ // satirlarin kolonlarina index numaralariyla ulasiyoruz. Bunun sayesinde biz tum rawlarin 0.ci ve 1.ci indexlerini yazdirdik.
            echo $row["id"]." ".$row["title"]." ".$row["description"]." ".$row["isActive"]; #id & title
            echo "<br>";
        }
    }else{
        echo "kayit yok";
    }


  


    mysqli_close($baglan);

?>