<?php
require_once("../connect.php");
require_once("../func_php//select_delete.php");

$id = $_GET["id"];
delete_row('baiviet', 'ma_tgia', $id, $conn);
delete_row("tacgia", "ma_tgia", $id, $conn);
header("location: ./author.php");