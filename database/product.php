<?php

$nama = 'Nasi Goreng';
$harga = 25000;
$stok = 10;

$sql = "INSERT INTO makanan (nama, harga, stok) VALUES ('$nama', $harga, $stok)";

if (mysqli_query($conn, $sql)) {
    echo "Data makanan berhasil disimpan.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>