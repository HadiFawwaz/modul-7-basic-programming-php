<?php

$users = [
    ['nama' => 'Alice', 'email' => 'alice@example.com'],
    ['nama' => 'Bob', 'email' => 'bob@example.com'],
    // Tambahkan lebih banyak pengguna jika perlu
];

echo '<table border="1">';
echo '<tr><th>Nama</th><th>Email</th></tr>';

foreach ($users as $user) {
    echo "<tr><td>{$user['nama']}</td><td>{$user['email']}</td></tr>";
}

echo '</table>';





