<?php

include __DIR__.'/vendor/autoload.php';
require __DIR__.'/app/Endentidade/Funcionario.php';

use \App\Entidade\Funcionario;

$funcionarios = Funcionario::getFuncionarios();

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listar.php';
include __DIR__.'/includes/footer.php';

?>