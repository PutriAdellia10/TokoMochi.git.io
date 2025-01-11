<?php
include '../../koneksi/koneksi.php';

$inv = $_GET['inv'];

$result = mysqli_query($conn, "SELECT * FROM produksi WHERE invoice = '$inv'");


    $updateProduksi = mysqli_query($conn, "UPDATE produksi SET terima = '1', status = '0' WHERE invoice = '$inv'");
    
    if (!$updateProduksi) {
        die('Error updating produksi: ' . mysqli_error($conn));
    }

    echo "
    <script>
    alert('PESANAN BERHASIL DITERIMA');
    window.location = '../produksi.php';
    </script>
    ";

?>
