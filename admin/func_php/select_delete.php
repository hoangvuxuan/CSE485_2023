<?php
function get_table($name, $conn) {
    $sql = "select * from $name";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    return $stmt-> fetchAll();
}

function get_rows($name, $col, $value, $conn) {
    $sql = "select * from $name where $col = '$value'";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    return $stmt -> fetch();
}

function delete_row($name, $col, $value,  $conn) {
    $sql = "delete from $name where $col = '$value'";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
     
}

function get_post($name) {
    if(isset($_POST["$name"])) {
        $a = trim($_POST["$name"]);
        if($a != "") {
            return $a;
        }
        else {
            return "";
        }
    }
    else {
        return "";
    }
}