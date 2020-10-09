<?php

namespace App\Entidade;

    class Status{

        /**
         * Identificador único do status
         * @var integer
         */
        private $id_status;

        /**
         * Descricao da situacao do funcionario
         * @var string
         */
        private $situacao;

        /**
         * Metodo para obter o valor do id do status
         * @var integer
         */
        public function getId_Status(){
            return $this->id;
        }

        /**
         * Metodo para obter o valor da descricao do status
         * @var string
         */
        public function getSituacaoStatus(){
            return $this->status;
        }

         /**
         * Metodo para settar o valor do id do status do funcionario
         * @var integer
         */
        public function setId_Status($id_status){
            $this->id_status = $id_status;
        }

         /**
         * Metodo para settar o valor da descricao do status do funcionario
         * @var integer
         */
        public function setSituacao($situacao){
            $this->situacao = $situacao;
        }
    }

?>