<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../public/css/style.css">
    <title>Todo's List</title>

</head>

<body class="bg-less-light">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-darkness">
            <a class="navbar-brand" href="#"><h1>Aprendendo</h1></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse text-light" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link text-light" href="../../index.html">Home</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link text-light" href="#">Todo List</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="#">Calculo</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="O que procura?..." aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busca</button>
              </form>
            </div>
          </nav>
    </header>





    <main class="container bg-dark text-light py-4">
        <form class="col-10 form-group input-group d-flex justify-content-center mx-auto" method="post" action="add-todo.php">
            <!-- <label for="todo-txt">Insira um texto legal!</label> -->
            <input class="col-8 my-1 p-2 rounded" type="text" name="txt-todo" placeholder="O que precisamos fazer agora?...">
            <div class="btn-group my-1 ml-2" role="group">
                <button class="btn-success btn btn-secondary" type="submit">Enviar</button>
                <button class="btn-danger btn btn-secondary" type="button">Limpar</button>    
            </div>
        </form>


           <?php 
            // include_once 'opt-todos.php';
            include_once 'list-todos.php';
            
            // $indexOpt = NULL;
            if(!isset($indexOpt)){
              listTodos($tabela);
              // echo $_POST['edit'];
            }else{
              listTodos($tabela, $indexOpt);
              // echo $_POST['edit'];
            }
            // echo $_POST['edit'];
            ?>




    </main>



</body>

</html>


<!-- DELETE FROM `todos` WHERE `todos`.`idTodos` = 3; -->