<?php
require_once("../connect.php");
require_once("../func_php//select_delete.php");

$id = $_GET["id"];
delete_row('baiviet', 'ma_tloai', $id, $conn);
delete_row("theloai", "ma_tloai", $id, $conn);
header("location: ./category.php");