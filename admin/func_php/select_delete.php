<?php
function get_table($name, $conn) {
    $sql = "select * from $name";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    return $stmt-> fetchAll();
}

function delete_row($name, $col, $value,  $conn) {
    $sql = "delete from $name where $col = '$value'";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
     
}