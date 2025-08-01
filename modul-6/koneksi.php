<?php
$servername = "localhost"; 
$username = "root";      
$password = "";            
$dbname = "db_perusahaan"; 

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    echo "Koneksi berhasil!";
}

// Jangan lupa menutup koneksi jika sudah tidak digunakan
// $conn->close(); // Optional, digunakan jika tidak dilanjutkan query
?>
