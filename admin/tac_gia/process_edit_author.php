<?php
require_once("../connect.php");


$name = trim($_POST["name"]);
$id = $_POST["id"];

if($name != "") {
   
    $sql = "update tacgia set ten_tgia = :name where ma_tgia = :id";
    
    $stmt = $conn -> prepare($sql);
    $stmt -> execute(["name" => $name, "id" => $id]); 

    header('location: ./author.php');
}
else {
    header("location: ./edit_author.php?id=$id&name=");
}
