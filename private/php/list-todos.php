<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../db.php';

$tabela = array();

$lista_sql = ' SELECT idTodos, txtTodo FROM todos ORDER BY idTodos';

foreach ( $objBanco->query( $lista_sql ) as $elemento ) {

    $tabela[$elemento['idTodos']] = [ 'idTodos' => $elemento['idTodos'], 'txtTodo' => $elemento['txtTodo'] ];
}

function listTodos($array, $indexOpt = NULL) {
    foreach($array as $reg) {
        // echo $reg["idTodos"];
        if($indexOpt !== NULL && $indexOpt === $reg['idTodos']){
            // $txtChange = $reg["txtTodo"];
            echo "
            <form class='col-8 my-2 p-1 d-flex justify-content-between align-items-center bg-darkness text-light mx-auto rounded' action='opt-todos.php' method='post'>
            <input class='mx-1 my-1 p-1 col-9 rounded bg-dark input-todo' name='new-txt-todo' value='${reg["txtTodo"]}' type='text'>
              <div class='btn-group'>
                  <button class='btn-success btn btn-secondary' value='${reg["idTodos"]}' name='edit' type='submit'>Enviar</button>
                  <button class='btn-danger btn btn-secondary' value='${reg["idTodos"]}' name='delete' type='submit'>Limpar</button>
              </div>
            </form>
            ";
        }else{
            echo "
            <form class='col-8 my-2 p-1 d-flex justify-content-between align-items-center bg-darkness text-light mx-auto rounded'  action='opt-todos.php' method='post'>
            <p class='mx-1 my-1 p-1 rounded' type='text'>${reg["txtTodo"]}</p>
            <div class='btn-group'>
                <button class='btn-warning btn btn-secondary' value='${reg["idTodos"]}' name='edit' type='submit'>Editar</button>
                <button class='btn-danger btn btn-secondary' value='${reg["idTodos"]}' name='delete' type='submit'>Delete</button>
            </div>
            </form>
            ";
        }
      }
}
// include 'todo-list.php';
