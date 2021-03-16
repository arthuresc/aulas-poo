<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../db.php';

$objStmt = $objBanco->prepare(' INSERT INTO `todos` (idTodos, txtTodo) VALUES ( NULL, :txtTodo ) ');
$objStmt->bindParam(':txtTodo', $_POST['txt-todo']);


if($_POST['txt-todo']){


    if ( $objStmt->execute() ) {
        $msg = "<script>alert('Afazer inserido!')</script>";
    }else{
        $msg = "<script>alert('Erro ao inserir!')</script>";
    }

    // include './todo-list.php';
    include './todo-list.php';
}else{
    include './todo-list.php';
    echo "<script>alert('Insira texto no seu afazer')</script>";
}