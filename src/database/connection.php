<?php
$username = 'root';
$password = 'hely12345';
$database = 'schooldb';
$host = 'localhost';

try{
    $db_conn = new PDO("mysql:host={$host};dbname={$database};charsert=utf8",
    $username, $password);

    $db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (PDOException $e) {
    echo $e->getMessage();
}
?>
