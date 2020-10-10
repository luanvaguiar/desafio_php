<?php

namespace App\Entidade;

use App\Dao\Database;

class Funcionario{

        /**
         * Identificador único do funcionario
         * @var integer
         */
        private $id;

        /**
         * Nome do funcionário
         * @var string
         */
        private $nome;

        /**
         * Data de nascimento do funcionario
         * @var date
         */
        private $data_nascimento;

        /**
         * Situacao do funcionario
         * @var integer
         */
        private $status;

        /**
         * Metodo para obter o valor do id do funcionario
         * @var integer
         */
        public function getId_Funcionario(){
            return $this->id;
        }

        /**
         * Metodo para obter o valor do nome do funcionario
         * @var integer
         */
        public function getNome(){
            return $this->nome;
        }

        /**
         * Metodo para obter o valor da data de nascimento do funcionario
         * @var integer
         */
        public function getData(){
            return $this->data_nascimento;
        }

        /**
         * Metodo para obter o valor do id do status do funcionario
         * @var integer
         */
        public function getStatus(){
            return $this->status;
        }

        /**
         * Metodo para settar o valor do id do funcionario
         * @var integer
         */
        public function setId($id_funcionario){
            $this->data_nascimento = $id_funcionario;
        }

        /**
         * Metodo para settar o valor do nome do funcionario
         * @var string
         */
        public function setNome($nome){
            $this->nome = $nome;
        }

        /**
         * Metodo para settar o valor da data de nascimento do funcionario
         * @var date
         */
        public function setData($data){
            $this->data = $data;
        }

        /**
         * Metodo para settar o valor do id do status do funcionario
         * @var integer
         */
        public function setStatus($id_status){
            $this->status = $id_status;
        }

        /**
         * Metodo responsavel por cadastrar funcionarios
         * @var integer
         */
        public function cadastrar(){
            
            // Inserindo Funcionario no Banco
            $Database = new Database('tb_funcionarios');
            
            echo '<pre>'; print_r($Database); echo '</pre>'; exit;
            // Atribuir ID para a instancia

            // Retorno de Sucesso da persistencia

        }
    }

?>