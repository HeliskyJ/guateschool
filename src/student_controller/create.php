<?php
require_once('../database/connection.php');
$fullName = $_POST['fullName'];
$birthdate = $_POST['birthdate'];
$act = isset($_GET['active']) ? 1 : 0;


$sql = "INSERT INTO student VALUES (null, null, '$fullName', '$birthdate', '$act')";

if(isset($db_conn) == false){

}else{
    $db_conn->exec($sql);
    HEADER("Location: ../../student/list.php");
}
?>
