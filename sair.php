<?php
// Função de sanitização
function sanitize_input($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

$nick = sanitize_input($_POST['nick'] ?? '');
$cor  = sanitize_input($_POST['cor'] ?? 'black');
$hora = date("H:i:s");

// Validação mínima
if (empty($nick)) {
    header('Location: index.php');
    exit;
}

// Mensagem de saída
$mensagem = "<b><span style='color:{$cor}'>{$nick}</span><i> saiu do chat às {$hora}.</i></b><br>\n";

// Grava no chat
$arquivoChat = 'chat.txt';
if ($fp = fopen($arquivoChat, 'a')) {
    fwrite($fp, $mensagem);
    fclose($fp);
}

// Redireciona de volta à página inicial
header('Location: index.php');
exit;
?>
