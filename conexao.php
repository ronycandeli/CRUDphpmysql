<?php
require 'config.php';

try {
    $drive = "$database:dbname=$dbname;port=$port;host=$host";
    $con = new PDO($drive, $username, $senha);


} catch (PDOException $exception) {
    echo $exception->getMessage();
    exit('Ops algum erro ocorreu');
}