<?php
# sunucu => blogapp

    # php + mysqli => sunucu
    # php + pdo => sunucu

    $baglan = mysqli_connect("localhost","root","","blogapp");

    mysqli_set_charset($baglan, "UTF8");

    if (mysqli_connect_errno() > 0){
        die("hata: ".mysqli_connect_errno());
    }

    echo "mysql baglantisi yapildi.";

    // sql sorulari gonder.

    mysqli_close($baglan);

    echo "mysql baglantisi kapatildi.";

?>