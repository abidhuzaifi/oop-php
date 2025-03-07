<?php
include "Mahasiswa.php";

// Objek pertama
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->setData('A11.2023.15285', 'Muhammad Abid Huzaifi', 'Teknik Informatika');
$mahasiswa1->displayData();

// Objek kedua
$mahasiswa2 = new Mahasiswa();
$mahasiswa2->setData('A11.2023.15111', 'Muhammad Firmansyah', 'Sistem Informasi');
$mahasiswa2->displayData();
?>
