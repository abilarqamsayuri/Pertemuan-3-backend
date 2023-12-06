<?php

    // membuat array multidimensi
    $kendaraan = [
        "transportasi" => ["mobil, ","sepeda, ","truk, ","motor, ","bus"],
        "mobil" => ["merk" => "toyota, ", "type" => "vios, ", "year" => 2016],
        "motor" => ["honda, ", "yamaha, ", "suzuki, "]
    ];

    //menampilkan output
    echo "<h1> Ini adalah array multidimensi </h1>";
    echo "Ini array kendaraan<br>";
    echo "<br>", $kendaraan["transportasi"][0],
                 $kendaraan["transportasi"][1],
                 $kendaraan["transportasi"][2],
                 $kendaraan["transportasi"][3],
                 $kendaraan["transportasi"][4], "<br>";
                 echo "========================= <br>";

    echo "Ini array mobil<br>";
    echo "<br>", $kendaraan["mobil"]["merk"];
    echo $kendaraan["mobil"]["type"];
    echo $kendaraan["mobil"]["year"], "<br>";
    echo "========================= <br>";

    echo "Ini array motor<br>";
    echo "<br>", $kendaraan["motor"][0],
                 $kendaraan["motor"][1],
                 $kendaraan["motor"][2], '<br><br>';

    // membuat looping array multidimensi menggunakan foreach
    $ar_jus = [
        ['buah'=>'mangga','harga'=>8000],
        ['buah'=>'alpukat','harga'=>10000],
        ['buah'=>'durian','harga'=>14000]
    ];

    foreach($ar_jus as $jus) {
        echo "jus ".$jus['buah'].' harganya : '.$jus['harga'].'<br>';
    }

    

?>