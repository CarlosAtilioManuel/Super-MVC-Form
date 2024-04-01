<?php

    namespace App\DAO;

    use \PDO;

    abstract class DAO {
        protected $conexao;

        public function __construct() {
            $dsn = "mysql:host=".$_ENV['db']['host'].":".$_ENV['db']['port'].";dbname=".$_ENV['db']['db'].";";
            
            $this->conexao = new PDO($dsn,$_ENV["db"]["user"], $_ENV["db"]["pwd"]);
        }
    }