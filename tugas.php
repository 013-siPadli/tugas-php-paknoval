<?php
$nama        = "JIROO";
$kelas       = "XII RPL 1";
$nilai_tugas = 80;
$nilai_uts   = 85;
$nilai_uas   = 95;

$nilai_akhir = ($nilai_tugas * 0.30) + ($nilai_uts * 0.30) + ($nilai_uas * 0.40);

if ($nilai_akhir >= 90) {
    $predikat = "A";
} elseif ($nilai_akhir >= 80) {
    $predikat = "B";
} elseif ($nilai_akhir >= 75) {
    $predikat = "C";
} elseif ($nilai_akhir >= 60) {
    $predikat = "D";
} else {
    $predikat = "E";
}

if ($nilai_akhir >= 75) {
    $status = "LULUS";
} else {
    $status = "TIDAK LULUS";
}
?>

<?php
    echo "<h1>Hasil Penilaian Siswa</h1>";
    echo "nama: $nama";
    echo "<br>";
    echo "kelas: $kelas";
    echo "<hr>";
    echo "nilai_tugas: $nilai_tugas";
    echo "<br>";
    echo "nilai_uts: $nilai_uts";
    echo "<br>";
    echo "nilai_uas: $nilai_uas";
    echo "<hr>";
    echo "nilai akhir: $nilai_akhir";
    echo "<br>";
    echo "Predikat: $predikat";
    echo "<br>";
    echo "Status: $status";
    ?>