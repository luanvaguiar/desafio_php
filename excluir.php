<?php

include __DIR__.'/vendor/autoload.php';
require __DIR__.'/app/Endentidade/Funcionario.php';

use \App\Entidade\Funcionario;

// validando o id
if(!isset($_GET['id_funcionarios']) or !is_numeric($_GET['id_funcionarios'])){
    header('Location: index.php?status=error');
    exit;
}
// consulta o funcionario
$obFuncionario = Funcionario::getFuncionario($_GET['id_funcionarios']);

if(!$obFuncionario instanceof Funcionario){
    header('Location: index.php?status=error');
    exit;
}

//Validacao do metodo POST
if(isset($_POST['excluir'])){

    $obFuncionario->excluir();

    header('Location: index.php?status=success');
    exit;

}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-excluir.php';
include __DIR__.'/includes/footer.php';

?>