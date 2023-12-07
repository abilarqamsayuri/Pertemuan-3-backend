<?php 

    // membuat indexed array
    $kendaraan = ["mobil", "sepeda", "truk", "motor", "bus"];

    //menampilkan output
    echo "<h1>Ini adalah indexed array</h1>";
    echo $kendaraan[0], "<br>";
    echo $kendaraan[1], "<br>";
    echo $kendaraan[2], "<br>";
    echo $kendaraan[3], "<br>";
    echo $kendaraan[4], "<br><br>";

    // membuat loop indexed array menggunakan for
    $_fruits = ['pepaya', 'mangga', 'pisang', 'jambu'] ;
    $jml_data = count($_fruits);

    for($i = 0;$i<$jml_data;$i++){
        echo "buah - " . "adalah ". $_fruits[$i];
        echo "<br><br>";
    }

?>