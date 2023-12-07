<?php

    echo "<h1>Ini adalah sintax hapus (unset)</h1>";

    // membuat array
    $hewan = [
        "buwung",
        "kucing",
        "ikan"
    ];

    // sintax menghapus array
    unset($hewan[1]);

    echo $hewan[0]."<br><br>";
    //echo $hewan[1]."<br>";
    echo $hewan[2]."<br>";

    echo "<hr>";

    echo "<pre>";
    print_r($hewan);
    echo "</pre>";

?>