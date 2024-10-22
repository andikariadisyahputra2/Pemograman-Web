<?php
// Mulai sesi
session_start();

// Inisialisasi array transaksi jika belum ada
if (!isset($_SESSION['transactions'])) {
    $_SESSION['transactions'] = array();
}

// Cek apakah form sudah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    
    // Menyimpan transaksi ke dalam array
    $transaction = array(
        "product_name" => $product_name,
        "price" => $price,
        "quantity" => $quantity
    );
    
    // Tambahkan transaksi ke sesi
    array_push($_SESSION['transactions'], $transaction);
}

// Fungsi untuk menghitung total penjualan
function calculate_total_sales($transactions) {
    $total = 0;
    foreach ($transactions as $transaction) {
        $total += $transaction['price'] * $transaction['quantity'];
    }
    return $total;
}

// Menampilkan data transaksi dalam bentuk tabel
if (isset($_SESSION['transactions']) && count($_SESSION['transactions']) > 0) {
    echo "<table border='1'>
            <tr>
                <th>Nama Produk</th>
                <th>Harga (Rp)</th>
                <th>Jumlah Terjual</th>
                <th>Total (Rp)</th>
            </tr>";
    
    foreach ($_SESSION['transactions'] as $transaction) {
        echo "<tr>
                <td>" . $transaction['product_name'] . "</td>
                <td>" . number_format($transaction['price'], 0, ',', '.') . "</td>
                <td>" . $transaction['quantity'] . "</td>
                <td>" . number_format($transaction['price'] * $transaction['quantity'], 0, ',', '.') . "</td>
            </tr>";
    }
    
    // Tampilkan total penjualan
    $total_sales = calculate_total_sales($_SESSION['transactions']);
    echo "<tr>
            <td colspan='3'>Total Penjualan</td>
            <td><strong>Rp " . number_format($total_sales, 0, ',', '.') . "</strong></td>
          </tr>";
    
    echo "</table>";
} else {
    echo "<p>Belum ada data penjualan.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
    <body>
        <br>
        <a href="index.html"> Kembali Ke Input Data</a>
</body>
</html>