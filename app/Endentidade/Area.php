<?php

namespace App\Entidade;

    class Area{

        /**
         * Identificador único da area de atoacao
         * @var integer
         */
        private $id_area;

        /**
         * Descricao da area de atoacao
         * @var string
         */
        private $area_atoacao;

        /**
         * Metodo para obter o valor do id do status
         * @var integer
         */
        public function getId_Area(){
            return $this->id_area;
        }

        /**
         * Metodo para obter o valor da descricao da area de atoacao
         * @var string
         */
        public function getArea_Atoacao(){
            return $this->area_atoacao;
        }

        /**
         * Metodo para settar o valor do id da area de atoacao
         * @var string
         */
        public function setId_Area($id_area){
            $this->id_area = $id_area;
        }

        /**
         * Metodo para settar o valor do id da area de atoacao
         * @var string
         */
        public function setArea_Atoacao($area_atoacao){
            $this->area_atoacao = $area_atoacao;
        }
    }

?>