<?php
require_once("../connect.php");
require_once("../func_php//select_delete.php");

$id = $_GET["id"];
delete_row('baiviet', 'ma_bviet', $id, $conn);
 
header("location: ./article.php");