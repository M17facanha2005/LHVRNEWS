<?php
$db = new SQLite3('banco.db');

$time = $_POST['time'];
$pontos = $_POST['pontos'];
$jogos = $_POST['jogos'];
$vitorias = $_POST['vitorias'];
$empates = $_POST['empates'];
$derrotas = $_POST['derrotas'];
$gols_pro = $_POST['gols_pro'];
$gols_sofridos = $_POST['gols_sofridos'];
$saldo = $_POST['saldo'];

$stmt = $db->prepare("INSERT INTO classificacao (time, pontos, jogos, vitorias, empates, derrotas, gols_pro, gols_sofridos, saldo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bindValue(1, $time);
$stmt->bindValue(2, $pontos);
$stmt->bindValue(3, $jogos);
$stmt->bindValue(4, $vitorias);
$stmt->bindValue(5, $empates);
$stmt->bindValue(6, $derrotas);
$stmt->bindValue(7, $gols_pro);
$stmt->bindValue(8, $gols_sofridos);
$stmt->bindValue(9, $saldo);

$stmt->execute();
header("Location: /pages/tabela.html"); // Redireciona de volta para a tabela
?>
