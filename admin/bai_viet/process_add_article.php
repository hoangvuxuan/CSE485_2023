<?php
require_once("../connect.php");
require_once("../func_php//select_delete.php");

$name = get_post("name");
$title = get_post("title");

$noi_dung = get_post("noi_dung");
$tom_tat = get_post("tom_tat");
$the_loai = get_post("id_the_loai");
$tac_gia = get_post("id_tac_gia");

$d = date("d/m/Y");



if($name != "") {
   
    $sql = "insert into baiviet(tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, ngayviet) 
            values (:title, :name, :id_tl, :tomtat, :noidung, :id_tg, :d)";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute(["title" => $title, "name" => $name, "id_tl" => $the_loai,
                     "tomtat" => $tom_tat, "noidung" => $noi_dung, "id_tg" => $tac_gia, "d" => $d]); 

    header('location: ./article.php');
}
else {
    header("location: ./add_article.php");
}





