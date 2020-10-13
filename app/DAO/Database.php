<?php

namespace App\Dao;

use \PDO;
use PDOException;

class Database{

        /**
         * Host da conexao com o banco de dados
         * @var string
         */
        const HOST = 'localhost';

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

                $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME, self::USER, self::PASS);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            } catch (PDOException $e) {
                die('ERROR: '. $e->getMessage());
            }
        }

        /**
         * Metodo responsavel por executar querys dentro do banco de dados
         * @param String $query
         * @param Array $parametros
         * @return PDOStatement
         */
        public function executar($query, $parametros = []){

            try {

                $statement = $this->connection->prepare($query);
                $statement->execute($parametros);

                return $statement;
            
            } catch (PDOException $e) {
                die('ERROR: '. $e->getMessage());
            }
        
        }

        /**
         * Metodo responsavel por inserir valores no banco de dados
         * @param Array
         * @return Integer
         */
        public function insert($values){

            //Data da query
            $campos = array_keys($values);
            $binds = array_pad( [] , count($campos), '?' );
            
            // montar a query
            $query = 'INSERT INTO
                    '.$this->table.'
                    ('.implode(',', $campos).') VALUES
                    ('.implode(',', $binds).' )';


            // executa o script
            $this->executar($query, array_values($values));
            
            // retorna o id inserido
            return $this->connection->lastInsertId();
        
        }

        /**
         * Metodo que retorna os funcionarios
         * @param string $where
         * @param string $order
         * @param string $limit
         * @return PDOStatement
         */
        public function select($where = null, $order = null, $limit = null, $campos = '*'){

            $where = strlen($where) ? 'WHERE '.$where : '';
            $order = strlen($order) ? 'ORDER BY'.$order : '';
            $limit = strlen($limit) ? 'LIMIT '.$limit : '';
            
            // monta a query
            $query = 'SELECT '.$campos.' FROM '.$this->table.' '.$where.' '.$order.' '.$limit;
        
            // executa a query
            return $this->executar($query); 
        }

        /**
         * Metodo que atualiza os funcionarios
         * @param string $where
         * @param array $values
         * @return Boolean
         */
        public function update($where, $values){

            // dados da query
            var_dump($values);
            $campos = array_keys($values);

            // montar a query
            $query = 'UPDATE
                        '.$this->table.'
                        SET '.implode('=?,', $campos).'=? WHERE '.$where;
            $this->executar($query, array_values($values));
            
        }

        /**
         * Metodo que deleta o funcionario
         * @param string $where
         * @return Boolean
         */
        public function delete($where){


            // montar a query
            $query = 'DELETE FROM '.$this->table.' WHERE '.$where;

            // executa a query
            $this->executar($query);

            // retorna o sucesso
            return true;
            
        }
        

    }

?>