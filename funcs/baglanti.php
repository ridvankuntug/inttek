<?php
$host = "localhost";
$dbname = "inttek";
$kullanici = "root";
$sifre = "";

try{
    $db = new PDO("mysql:host=$host;dbname=$dbname; charset=utf8", "$kullanici", "$sifre");
}
catch (PDOException $e){
    print $e->getMessage();
}