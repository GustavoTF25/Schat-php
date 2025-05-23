<?php
date_default_timezone_set("America/Sao_Paulo"); // Ajuste se necessário
$hora = date("H:i:s");

// Mensagem padrão de espiada
$mensagem = "<i><span style='color:gray'>[{$hora}] Alguém espiou a conversa.</span></i><br>\n";

// Grava com segurança no chat.txt
$arquivoChat = 'chat.txt';
if ($fp = fopen($arquivoChat, 'a')) {
    fwrite($fp, $mensagem);
    fclose($fp);
}

// Redireciona para o chat
header('Location: chat.php');
exit;
?>
