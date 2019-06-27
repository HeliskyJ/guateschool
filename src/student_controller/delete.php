<?php
require_once('../database/connection.php');
$id = $_GET['id'];

$sql = "UPDATE student SET is_active=0 WHERE id=$id";

if(isset($db_conn) == false){

}else{
    $db_conn->exec($sql);
    HEADER("Location: ../../student/list.php");
}
?>
