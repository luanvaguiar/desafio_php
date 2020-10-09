<?php

    class Conexao {

        private $servidor;
        private $usuario;
        private $password;
        private $data_base;
        private $conexao;

        public function __construct () {
            $this->servidor = "localhost";
            $this->usuario = "root";
            $this->password = "";
            $this->data_base = "desafio";

            $this->conexao = new mysqli(
                $this->servidor,
                $this->usuario,
                $this->password,
                $this->data_base
            );
        }

        public function buscar($sql){
            $conteiner = $this->conexao->query($sql);
            return $conteiner->fetch_all();
        }

        public function executarSQL($sql){
            $this->conexao->query($sql);
        }

        public function encerrarConexao() {
            $this->conexao->close();
        }

    }

?>