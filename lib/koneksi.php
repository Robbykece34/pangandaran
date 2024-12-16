<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'pangandaran_traveling';

$db = mysqli_connect($hostname, $username, $password, $database_name);

if($db->connect_error){
    echo 'error';
}else{
    echo 'berhasil';
}

?>