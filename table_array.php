<?php 
    $matakuliah = [
        ['kode'=>'mk02','nama'=>'design web','dosen'=>'laisa nurin'],
        ['kode'=>'mk03','nama'=>'PHP pemrograman','dosen'=>'nasrul'],
        ['kode'=>'mk04','nama'=>'database','dosen'=>'edo riansyah'],
    ];

    echo "<h1>Ini adalah table array html</h1>"
?>
<table border="1" width='100%'>
<thead>
<tr><th>No</th><th>Kode MK</th><th>Nama Matakuliah</th>
<th>Dosen</th></tr>
</thead>
<tbody>
    <?php 
        $nomor = 1;
        foreach($matakuliah as $row){
            echo '<td>'.$nomor.'</td>
            <td>'.$row['kode'].'</td>
            <td>'.$row['nama'].'</td>
            <td>'.$row['dosen'].'</td></tr>';
            $nomor++;
        }
    ?>
</tbody>
</table>
    </select>
    </form>