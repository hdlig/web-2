<?php
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

if (!empty($proses)) {
    $nilai_akhir = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);

    if ($nilai_akhir > 55) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }

    if ($nilai_akhir >= 0 && $nilai_akhir <= 35) {
        $grade = "E";
    } elseif ($nilai_akhir >= 36 && $nilai_akhir <= 55) {
        $grade = "D";
    } elseif ($nilai_akhir >= 56 && $nilai_akhir <= 69) {
        $grade = "C";
    } elseif ($nilai_akhir >= 70 && $nilai_akhir <= 84) {
        $grade = "B";
    } elseif ($nilai_akhir >= 85 && $nilai_akhir <= 100) {
        $grade = "A";
    } else {
        $grade = "I";
    }

    switch ($grade) {
        case 'A':
            $predikat = "Sangat Memuaskan";
            break;
        case 'B':
            $predikat = "Memuaskan";
            break;
        case 'C':
            $predikat = "Cukup";
            break;
        case 'D':
            $predikat = "Kurang";
            break;
        case 'E':
            $predikat = "Sangat Kurang";
            break;
        default:
            $predikat = "Tidak ada";
            break;
    }

    echo 'Proses : ' . $proses;
    echo '<br/>Nama : ' . $nama_siswa;
    echo '<br/>Mata Kuliah : '. $mata_kuliah;
    echo '<br/>Nilai UTS : '. $nilai_uts;
    echo '<br/>Nilai UAS : '. $nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : '. $nilai_tugas;
    echo '<br/>Nilai Akhir : '. number_format($nilai_akhir, 2, ',', '.');
    echo '<br/>Status : '. $status;
    echo '<br/>Grade : '. $grade;
    echo '<br/>Predikat : '. $predikat;
};
?>