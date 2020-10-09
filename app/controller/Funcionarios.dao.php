<?php

    require_once '../models/Conexao.class.php';

    class FuncionariosDao {
        public static function listarDados(){
            $con = new Conexao();

            $container = $con->executarSQL("SELECT * FROM funcionarios");

            $con->encerrarConexao();

            return $container;
        }
    }

?>