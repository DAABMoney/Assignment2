<?php
    $host='127.0.0.1';
    $db='registration_db';
    $user='root';
    $password='';
    $charset='utf8mb4';
    $dsn="mysql:host=$host;dbname=$db;charset=$charset";
    
    try{
        $pdo = new PDO($dsn, $user, $password);
        $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
    } catch(PDOException $e){
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);
    $user->insertUser("admin","password");
?>
