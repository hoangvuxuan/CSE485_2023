<?php
require_once("../connect.php");


$name = trim($_POST["name"]);

if($name != "") {
   
    $sql = "insert into theloai(ten_tloai) values (:name)";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute(["name" => $name]); 

    header('location: ./category.php');
}
else {
    header("location: ./add_category.php");
}





