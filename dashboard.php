<?php
session_start();

// Cek apakah user sudah login

if (Jisset($_SESSION['username'])) {
header("Location: login.php");
exit;

t

...
<title>Dashboard</title>

</head>

<body>
<h2>Selamat datang, <?php echo $_SESSION['username']; ?>1</h2>
<p>Role: <?php echo $_SESSION['role']; ?></p>
<a href="1ogout .php">Logout</a>

</body>

</html>