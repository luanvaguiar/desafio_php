<?php

namespace App\Dao;

use \PDO;
use PDOException;

class Database{

        /**
         * Host da conexao com o banco de dados
         * @var string
         */
        const HOST = '127.0.0.1';

        /**
         * Nome do banco de dados
         * @var string
         */
        const NAME = 'desafio';

        /**
         * Usuario da conexao com o banco de dados
         * @var string
         */
        const USER = 'root';

        /**
         * Senha de acesso ao banco de dados
         * @var string
         */
        const PASS = '';

        /**
         * Nome da tabela a ser manipulada
         * @var string
         */
        private $table = 'tb_funcionarios';

        /**
         * Instancia da conexao  com o banco de dados
         * @var PDO
         */
        private $connection;


        /**
         * Define a tabela, instancia e a conexao com o banco
         * @param
         */
        public function __construct($table = null){
            $this->table = $table;
            $this->setConnection();
        }

        /**
         * Metodo para criar uma conexao com o bacno de dados
         */
        private function setConnection(){
            
            try {

                $this->connection = new PDO('mysql:host'.self::HOST.';db=name'.self::NAME, self::USER, self::PASS);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            } catch (PDOException $e) {
                die('ERROR: '. $e->getMessage());
            }
        }

    }

?>