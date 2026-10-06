<?php

require_once "./conexao.php";

$nome = $_POST["nome"] ?? "";
$sobrenome = $_POST["sobrenome"] ?? "";
$cargo = $_POST["cargo"] ?? "";
$setor = $_POST["setor"] ?? "";
$salario = $_POST["salario"] ?? "";
$cracha = $_POST["cracha"] ?? "";

$sql = "INSERT INTO funcionario ";
$campos = "(nome, sobrenome, salario, cargo, setor, cracha) ";
$valores = "VALUES ('$nome', '$sobrenome', '$salario', '$cargo', '$setor', '$cracha');";

$sql .= $campos . $valores;

/**
 * INSERT INTO funcionario
 * ( nome, sobrenome, salario, cargo, setor, cracha, idPessoa)
 * VALUES('', '', 0, '', '', '', NULL);
 */

$resultado = $conexao->query($sql);

header("Location: listar-funcionarios.php");
exit;
 // http://localhost/infoserv_php/listar-funcionarios.php