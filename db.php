<?php
$host = 'server3.ahost.uz';
$dbname = 'phpdeve1_lara308';
$username = 'phpdeve1_lara308';
$password = '2008Ozodbek!@#$';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die(json_encode(['error' => $e->getMessage()]));
}
