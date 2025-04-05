<?php
$db = new SQLite3('banco.db');

$db->exec("CREATE TABLE IF NOT EXISTS classificacao (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    time TEXT,
    pontos INTEGER,
    jogos INTEGER,
    vitorias INTEGER,
    empates INTEGER,
    derrotas INTEGER,
    gols_pro INTEGER,
    gols_sofridos INTEGER,
    saldo INTEGER
)");

echo "Banco de dados criado com sucesso!";
?>
