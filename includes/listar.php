<?php
    date_default_timezone_set('America/Sao_Paulo');
    
    $mensagem = '';

    if(isset($_GET['status'])){

        switch ($_GET['status']){
            case 'error';
                $mensagem = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Erro! Não foi possível executar determinada ação!</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
                        break;
            case 'success';
                $mensagem = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Ação executada com sucesso!</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
                        break;
        }

    }
    
    $resultados = '';
   
    foreach($funcionarios as $f){
        $resultados .= '<tr>
                            <td>'.$f->getId_Funcionario().'</td>
                            <td>'.$f->getNome().'</td>
                            <td>'.date('d/m/Y', strtotime($f->getData())).'</td>
                            <td>'.$f->getArea_Atoacao().'</td>
                            <td>'.($f->getStatus() == 's' ? 'Ativo(a)' : 'Inativo(a)').'</td>
                            <td>
                                <a href="editar.php?id_funcionarios='.$f->getId_Funcionario().'">
                                    <button type="button" class="btn btn-warning">Editar</button>
                                </a>
                                <a href="excluir.php?id_funcionarios='.$f->getId_Funcionario().'">
                                    <button type="button" class="btn btn-danger">Excluir</button>
                                </a>
                            </td>
                        </tr>';
    }

    $resultados = strlen($resultados) ? $resultados : '<tr>
                                                            <td colspan="6" class="text-center">
                                                                Nenhum Funcionário encontrado.
                                                            </td>
                                                        </tr>';
    
?>

<main class="container">

    <?=$mensagem?>
    <?=$mensagem = '';?>
    

    <section>
        <a href="cadastrar.php">
            <button class="btn btn-success">Novo Funcionário</button>
        </a>
    </section>

    <div class="container bg-light mt-3">
        <section>
            <table class="table">
                <thead>
                    <tf>
                        <th>ID</th>
                        <th>Nome Funcionário</th>
                        <th>Data de Nascimento</th>
                        <th>Área de Atoação</th>
                        <th>Situação</th>
                    </tf>
                </thead>
                <tbody>
                    <?=$resultados?>
                </tbody>
            </table>
        </section>
    </div>
    

</main>