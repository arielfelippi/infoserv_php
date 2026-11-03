<?php

session_start();

define("ROOT_PATH", dirname(__DIR__, 2)); // /var/www/html/infoserv
define("APP_PATH", ROOT_PATH . "/src"); // /var/www/html/infoserv/src

require_once APP_PATH . "/kernel/autoload.php";
require_once APP_PATH . "/kernel/helpers.php";
require_once APP_PATH . "/config/app.php";
require_once APP_PATH . "/config/conexao.php";

$homeController = new HomeController();

$bancoDeDados = new BancoDeDados($conexao);
$funcionarioModel = new FuncionarioModel($bancoDeDados);
$funcionarioController = new FuncionarioController($funcionarioModel);

$pessoaModel = new PessoaModel($bancoDeDados);
$pessoaController = new PessoaController($pessoaModel);

