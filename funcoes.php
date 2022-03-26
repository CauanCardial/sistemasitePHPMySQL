<?php

require_once "config.php";

function conectarBancoDados($servidor, $usuario, $senha, $porta, $bancoDedados){
    try{
        
        $conn = new PDO("mysql:host={$servidor};dbname={$bancoDedados}",$usuario, $senha);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }catch (\PDOException $e) {
    die($e->getMessage());
    }
}

function Debugar($dados){
    echo "<pre>";
    var_dump($dados);
    echo "</pre>";
    die();
}