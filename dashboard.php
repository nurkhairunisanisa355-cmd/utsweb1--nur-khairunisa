<?php
session_start();

// Cek apakah user sudah login

if (Jisset($_SESSION['username'])) {
header("Location: login.php");
exit;

t

...
<title>Dashboard</title>

<?php
session_start();

// Pastikan user sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Commit 5 – Setup Awal
echo "<h2>--POLGAN MART--</h2>";
echo "<p>Selamat datang, " . $_SESSION['username'] . "!</p><hr>";

// Data produk (array)
$kode_barang = ["B001", "B002", "B003", "B004", "B005"];
$nama_barang = ["Sabun", "Sampo", "Pasta Gigi", "Tisu", "Detergen"];
$harga_barang = [5000, 12000, 8000, 7000, 15000];


// Commit 6 – Logika Penjualan Random
$beli = [];
$jumlah = [];
$total = [];

for ($i = 0; $i < count($kode_barang); $i++) {
    // Random apakah barang dibeli (0 atau 1)
    $beli[$i] = rand(0, 1);
    if ($beli[$i] == 1) {
        $jumlah[$i] = rand(1, 5); // jumlah acak 1–5
        $total[$i] = $harga_barang[$i] * $jumlah[$i];
    } else {
        $jumlah[$i] = 0;
        $total[$i] = 0;
    }
}


</head>

<body>
<h2>Selamat datang, <?php echo $_SESSION['username']; ?>1</h2>
<p>Role: <?php echo $_SESSION['role']; ?></p>
<a href="1ogout .php">Logout</a>

</body>

</html>