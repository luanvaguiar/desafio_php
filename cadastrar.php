<?php

include __DIR__.'/vendor/autoload.php';

use \App\Entidade\Funcionario;


//Validacao do metodo POST
if(isset($_POST['nome'], $_POST['data'], $_POST['area_atoacao'])){
    $funcionario = new Funcionario();
    $funcionario->setNome($_POST['nome']);
    $funcionario->setNome($_POST['data']);
    $funcionario->cadastrar();
    echo $funcionario->getNome();

}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/cadastrar.php';
include __DIR__.'/includes/footer.php';

?>