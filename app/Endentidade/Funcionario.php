<?php

namespace App\Entidade;

use App\Dao\Database;
use PDO;

require 'app/Dao/Database.php';

class Funcionario{

        /**
         * Identificador único do funcionario
         * @var Integer
         */
        public $id_funcionarios;

        /**
         * Nome do funcionário
         * @var string
         */
        private $nome;

        /**
         * Data de nascimento do funcionario
         * @var Date
         */
        private $data_nascimento;

        /**
         * Situacao do funcionario
         * @var String
         */
        private $situacao;

        /**
         * Area de atoacao do funcionario
         * @var String
         */
        private $area_atoacao;

        /**
         * Metodo para obter o valor do id do funcionario
         * @var Integer
         */
        public function getId_Funcionario(){
            return $this->id_funcionarios;
        }

        /**
         * Metodo para obter o valor do nome do funcionario
         * @var String
         */
        public function getNome(){
            return $this->nome;
        }

        /**
         * Metodo para obter o valor da data de nascimento do funcionario
         * @var Date
         */
        public function getData(){
            return $this->data_nascimento;
        }

        /**
         * Metodo para obter o valor do id do status do funcionario
         * @var Integer
         */
        public function getStatus(){
            return $this->situacao;
        }

        /**
         * Metodo para obter o valor da area de atoacao do funcionario
         * @var String
         */
        public function getArea_Atoacao(){
            return $this->area_atoacao;
        }

        /**
         * Metodo para settar o valor do id do funcionario
         * @var Integer
         */
        public function setId($id_funcionario){
            $this->id_funcionarios = $id_funcionario;
        }

        /**
         * Metodo para settar o valor do nome do funcionario
         * @var String
         */
        public function setNome($nome){
            $this->nome = $nome;
        }

        /**
         * Metodo para settar o valor da data de nascimento do funcionario
         * @var Date
         */
        public function setData($data){
            $this->data_nascimento = $data;
        }

        /**
         * Metodo para settar o valor do id do status do funcionario
         * @var Integer
         */
        public function setStatus($situacao){
            $this->situacao = $situacao;
        }

        /**
         * Metodo para settar o valor do id do status do funcionario
         * @var String
         */
        public function setArea_Atoacao($area){
            $this->area_atoacao = $area;
        }

        /**
         * Metodo responsavel por cadastrar funcionarios
         * @return Boolean
         */
        public function cadastrar(){
            
            // Inserindo Funcionario no Banco
            $database = new Database('tb_funcionarios');
            $this->id = $database->insert([
                'nome' => $this->nome,
                'data_nascimento' => $this->data_nascimento,
                'area_atoacao' => $this->area_atoacao,
                'situacao' => 'Ativo(a)'
            ]);

            // Retorno de Sucesso da persistencia
            return true;
        }

        /**
         * Metodo que retorna os funcionarios
         * @param string $where
         * @param string $order
         * @param string $limit
         * @return array
         */
        public static function getFuncionarios($where = null, $order = null, $limit = null){
            $db = new Database('tb_funcionarios');
            $result = $db->select($where, $order, $limit);
            return $result->fetchAll(PDO::FETCH_CLASS, self::class);
        }

        /**
         * Metodo que retorna um funcionario especifico
         * @param Integer $id
         * @return Funcionario
         */
        public static function getFuncionario($id){
            return (new Database('tb_funcionarios'))->select('id_funcionarios = '.$id)->fetchObject(self::class);
        }

        /**
         * Metodo que atualiza um funcionario especifico
         * @return Boolean
         */
        public function atualizar(){
            return (new Database('tb_funcionarios'))->update('id_funcionarios = '.$this->id_funcionarios, [
                                                                        'nome' => $this->nome,
                                                                        'data_nascimento' => $this->data_nascimento,
                                                                        'area_atoacao' => $this->area_atoacao,
                                                                        'situacao' => $this->situacao]);
        }

        /**
         * Metodo que exclui funcionário do banco de dados
         * @return Boolean
         */
        public function excluir(){
            return (new Database('tb_funcionarios'))->delete('id_funcionarios = '.$this->id_funcionarios);
        }
    }

?>