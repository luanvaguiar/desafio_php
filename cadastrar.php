<?php

include __DIR__.'/vendor/autoload.php';
require __DIR__.'/app/Endentidade/Funcionario.php';

define('TITTLE', 'Cadastrar Funcionário');

use \App\Entidade\Funcionario;

$obFuncionario = new Funcionario;

//Validacao do metodo POST
if(isset($_POST['nome'], $_POST['data'], $_POST['area_atoacao'])){
    
    $obFuncionario->setArea_Atoacao($_POST['area_atoacao']);
    $obFuncionario->setData($_POST['data']);
    $obFuncionario->setStatus($_POST['situacao'] == 's' ? 'Ativo(a)' : 'Inativo(a)');
    $obFuncionario->setNome($_POST['nome']);
    $obFuncionario->cadastrar();

    header('Location: index.php?status=sucess');
    exit;

}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/cadastrar.php';
include __DIR__.'/includes/footer.php';

?>