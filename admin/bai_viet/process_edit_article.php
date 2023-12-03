<?php
require_once("../connect.php");
require_once("../func_php//select_delete.php");

$id = $_POST["id"];
$name = get_post("name");
$title = get_post("title");

$noi_dung = get_post("noi_dung");
$tom_tat = get_post("tom_tat");
$the_loai = get_post("id_the_loai");
$tac_gia = get_post("id_tac_gia");

$d = date("d/m/Y");

 


if($name != "") {
   
    $sql = "update baiviet
            set tieude = :title, ten_bhat= :name, ma_tloai = :id_tl,
             tomtat = :tomtat, noidung = :noidung, ma_tgia = :id_tg
            where ma_bviet = :id";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute(["title" => $title, "name" => $name, "id_tl" => $the_loai,
                     "tomtat" => $tom_tat, "noidung" => $noi_dung, "id_tg" => $tac_gia, "id" => $id]); 

    header('location: ./article.php');
}
else {
    header("location: ./add_article.php");
}