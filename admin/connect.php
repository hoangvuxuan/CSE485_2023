<?php
$h = "localhost";
$db = "btth01_cse485";
$ch = "utf8mb4";
$dns = "mysql:host=$h;dbname=$db;charset=$ch";
try {
    $conn = new PDO($dns, "root", "");
} catch(PDOException $ex) {
    die($ex);
}