<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $product = $_POST['product'];
  $number = $_POST['number'];
  $nama = $_POST['nama'];

  $data = "Nama: $nama" . PHP_EOL . "jumlah: $number" . PHP_EOL . "Nama produk yang dibeli: $product" . PHP_EOL . PHP_EOL;

  $file = fopen('order.txt', 'a');
  fwrite($file, $data);
  fclose($file);

  echo "<h2>Terima kasih!</h2>";
  echo "<p>Pembelian Anda telah berhasil. Data pembelian telah disimpan.</p>";
}
?>