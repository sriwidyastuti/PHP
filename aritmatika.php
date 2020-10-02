<?php
$angka1=$_GET['ang1'];
$angka2=$_GET['ang2'];
$range=$_GET['ang3'];
$selisih=$angka2-$angka1;

echo "Hasil : <br>";
echo $angka1 , $angka2;

for ($i=1; $i<=$range; $i++){
    $hasil = $angka1 + ($angka2*($i-1));
    echo ", $hasil";
}

$hasilsuku = $angka1+ ($range-3) * $angka2;
echo "<br><br> Nilai suku ke-". $range;
echo "<br>". $hasilsuku
?>