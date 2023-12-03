<?php
require_once("../connect.php");


$name = trim($_POST["name"]);

if($name != "") {
   
    $sql = "insert into tacgia(ten_tgia) values (:name)";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute(["name" => $name]); 

    header('location: ./author.php');
}
else {
    header("location: ./add_author.php");
}





