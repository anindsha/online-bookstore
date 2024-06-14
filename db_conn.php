<?php


$sName = "localhost";

$uName = "root";

$pass = "";

$db_name = "online_book_store_db";


try{
    $coon = new PDO("mysql:host=$sName;dbname=$db_name",
                    $uName, $pass);
    $coon->setAttribute(PDO::ATTR_ERRMODE, PDO::
        ERRMODE_EXCEPTION);          
}catch(PDOException $e){
    echo "Connection failed : ". $e->getMessage();
}