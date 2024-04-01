<?php
    # Caminhos de diretório
    define("BASEDIR", dirname(__FILE__) . "/../");
    define("VIEWS", dirname	(__FILE__) ."/view/modules/");

    # Dados de conexão ao Banco de Dados 
    $_ENV['db']['host'] = 'localhost';
    $_ENV['db']['user'] = 'root';
    $_ENV['db']['pwd'] = '';
    $_ENV['db']['db'] = 'db_mvc';
    $_ENV['db']['port'] = "3306";