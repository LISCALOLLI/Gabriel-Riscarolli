<?php
$username = 'root';
$password = '';
try {
    $conn = new PDO('mysql:host=localhost;dbname=sei lá', $username, $password);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}