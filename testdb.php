<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$db = mysqli_connect('localhost', 'root', '', 'hpusers');

if (!$db) {
    die("❌ Connection failed: " . mysqli_connect_error());
} else {
    echo "✅ Database connected successfully!";
}
?>
