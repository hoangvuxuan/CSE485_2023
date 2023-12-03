<?php
require_once("../connect.php");


$name = trim($_POST["name"]);
$id = $_POST["id"];

if($name != "") {
   
    $sql = "update theloai set ten_tloai = :name where ma_tloai = :id";
    
    $stmt = $conn -> prepare($sql);
    $stmt -> execute(["name" => $name, "id" => $id]); 

    header('location: ./category.php');
}
else {
    header("location: ./edit_category.php?id=$id&name=");
}
