<?php
// File ini hanya untuk development, hapus setelah digunakan!

$passwordAsli = 'admin123';

$hash = password_hash($passwordAsli, PASSWORD_DEFAULT);

echo "<h1>Pembuat Hash Password</h1>";
echo "<p>Gunakan hash di bawah ini untuk mengupdate database.</p>";
echo "<hr>";
echo "<b>Password Asli:</b> " . htmlspecialchars($passwordAsli);
echo "<br>";
echo "<b>Hasil Hash (untuk di-copy):</b><br>";
echo '<input type="text" value="' . htmlspecialchars($hash) . '" size="70" readonly onclick="this.select()">';
echo "<br><br><em>Klik pada kolom di atas untuk menyeleksi semua, lalu copy (Ctrl+C).</em>";

// UPDATE `users` SET `password` = 'PASTE_HASH_BARU_ANDA_DI_SINI' WHERE `username` = 'admin';
?>