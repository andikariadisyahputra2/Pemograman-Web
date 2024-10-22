<?php
$buah = array(
    "apel",
    "pisang",
    "durian",
    "semangka",
    "pepaya",
    "manggis"
);
foreach($buah as $buahan){
    echo $buahan, '<bra>';
}
echo "<hr />";
$siswa = array(
    "nama" => "Andika",
    "umur" => "20",
    "kota" => "Binjai",
    "jurusan" => "Sistem Informasi"
);

echo '<table border="1">';
echo '<tr><th>Nama Siswa</th><th>Umur Siswa</th><th>Kota Siswa</th><th>Jurusan Siswa</th></tr>';
echo '<tr>';
echo '<td>' . $siswa['nama'] . '</td>';
echo '<td>' . $siswa['umur'] . '</td>';
echo '<td>' . $siswa['kota'] . '</td>';
echo '<td>' . $siswa['jurusan'] . '</td>';
echo '</tr>';
echo '</table>';
?>