<?php
require_once('../database/connection.php');
$name = $_POST['name'];
$codigo = $_POST['codigo'];
$act = isset($_POST['estado']) ? 1 : 0;


$sql = "INSERT INTO subject VALUES (null, '$codigo', '$name' , '$act')";

if(isset($db_conn) == false){

}else{
    $db_conn->exec($sql);
    HEADER("Location: ../../student/list.php");
}
?>
