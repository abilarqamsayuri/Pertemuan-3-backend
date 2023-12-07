<?php  

    // membuat assosiative array
    $login = [
        "id" => 001,
        "pass" => "abillia1717",
        "name" => "abil sayuri",
        "role" => "admin",
        "active" => 1,
        "level" => 1,
    ];

    // menampilkan output
    echo "<h1>Ini adalah associative array</h1>";
    echo "id = ". $login["id"] ,"<br>";
    echo "pass = ". $login["pass"], "<br>";
    echo "name = ". $login["name"], "<br>";
    echo "role = ". $login["role"], "<br>";
    echo "status = ". $login["active"], "<br>";
    echo "level = ". $login["level"], "<br><br>";

    // membuat array associative
    $umur['abil'] = 20;
    $umur['ali'] = 21;
    $umur['dewi'] = 19;

    // membuat loop associative array menggunakan foreach
    foreach($umur as $key => $val){
        echo "key : ".$key.", value ".$val;
        echo "<br><br>";
    }

?>