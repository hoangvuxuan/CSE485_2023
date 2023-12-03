<?php
function get_table($name, $conn) {
    $sql = "select * from $name";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    return $stmt-> fetchAll();
}