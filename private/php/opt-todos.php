<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../db.php';

// $objStmt = $objBanco->prepare(' INSERT INTO `todos` (idTodos, txtTodo) VALUES ( NULL, :txtTodo ) ');

// $indexEdit = NULL;

switch (TRUE) {
    case (array_key_exists('edit', $_POST)):
        if(array_key_exists('new-txt-todo', $_POST)){
            // $objStmt = $objBanco->prepare(' UPDATE `todos` SET txtTodo = :txt WHERE `todos`.`idTodos` = :index ');
            // echo $_POST['new-txt-todo'];
            $objStmt = $objBanco->prepare(' UPDATE `todos` SET `txtTodo` = :txt WHERE `todos`.`idTodos` =  :index ');
            $objStmt->bindParam(':index', $_POST['edit']); //Só consegui fazendo bind
            $objStmt->bindParam(':txt', $_POST['new-txt-todo']); //Só consegui fazendo bind
            $objStmt->execute();
            unset($indexOpt);
            // echo $_POST['edit'];
        }elseif(array_key_exists('edit', $_POST) && !array_key_exists('new-txt-todo', $_POST)){
            $indexOpt = $_POST['edit'];
        }else{
            echo '<script> alert("Error") </script>';
        }
    case (array_key_exists('delete', $_POST)):
        // echo 'NO MAMAMIA ROLA';
        // $index = $_POST['delete']; //dar um bind para segurança
        $objStmt = $objBanco->prepare(' DELETE FROM `todos` WHERE `todos`.`idTodos` = :index ');
        $objStmt->bindParam(':index', $_POST['delete']); //Só consegui fazendo bind
        $objStmt->execute();
    break;
}

include './todo-list.php';
?>