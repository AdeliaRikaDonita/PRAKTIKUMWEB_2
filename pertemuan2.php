<?php
// Data Mahasiswa dalam bentuk Array Multidimensi (Array di dalam  Array)
$siswa = [
    ["nama" => "Mark", "nilai" => 89],
    ["nama" => "Jake", "nilai" => 60],
    ["nama" => "Minji", "nilai" => 95],
    ["nama" => "Hanni", "nilai" => 48],
];

echo "<h2>Daftar Kelulusan Mahasiswa</h2>";
echo "<table border = '1' cellpadding='18' cellspacing='0'>";
echo "<tr><th>Nama</th><th>Nilai</th><th>Keterangan</th><th>Grade</th></tr>";

foreach ($siswa as $s) {
    //Logika Penentuan Lulus
    if ($s['nilai'] >= 70) {
        $keterangan = "LULUS";
        $warna = "green";
    } else {
        $keterangan = "GAGAL";
        $warna = "red";
    }

    if ($s['nilai'] > 80) {
        $grade = "A";
    } elseif ($s['nilai'] > 75) {
        $grade = "B+";
    } elseif ($s['nilai'] > 65) {
        $grade = "C+";
    } elseif ($s['nilai'] > 60) {
        $grade = "C";
    } else {
        $grade = "D";
    }

    echo "<tr>";
    echo "<td>" . $s['nama'] . "</td>";
    echo "<td>" . $s['nilai'] . "</td>";
    echo "<td style ='color: $warna; font-weight: bold;'>$keterangan</td>";
    echo "<td>" . $grade . "</td>";
    echo "</tr>";
}

?>