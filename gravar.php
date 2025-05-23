<?php
date_default_timezone_set('America/Sao_Paulo');

$nick = $_POST['nick'] ?? '';
$cor = $_POST['cor'] ?? 'black';
$texto = $_POST['texto'] ?? '';
$hora = date("H:i:s");

// Evita entradas vazias
if (trim($nick) === '') {
    header("Location: index.php");
    exit;
}

// Validação mínima
$nick = strip_tags($nick);
$texto = htmlspecialchars(trim($texto), ENT_QUOTES, 'UTF-8');

// Verifica se é um moderador (HTML já inserido no nick)
$isAdmin = stripos($nick, 'Moderador') !== false;

// Abre o arquivo
$abre = fopen("chat.txt", "a");
if ($abre) {
    // Formatando a mensagem
    if ($isAdmin) {
        // Admin já tem o <b> ou <font> no nome, então usamos como está
        fwrite($abre, "{$nick} <i>às {$hora}:</i> {$texto}<br>\n");
    } else {
        fwrite($abre, "<b><span style=\"color:{$cor};\">{$nick}</span></b> <i>às {$hora}:</i> {$texto}<br>\n");
    }
    fclose($abre);
}

// Atualiza hora da última mensagem
file_put_contents("ultima.txt", $hora);

// Redireciona de volta ao chat
header("Location: chat.php");
exit;
?>
