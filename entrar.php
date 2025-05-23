<?php
// Função para limpar entrada do usuário
function sanitize_input($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

$nick = sanitize_input($_POST['nick'] ?? '');
$cor = sanitize_input($_POST['cor'] ?? 'black');

// Verifica se o nick foi fornecido
if (empty($nick)) {
    header('Location: index.php');
    exit;
}

// Formata a mensagem de entrada
$mensagem = "<b><span style='color:{$cor}'>{$nick}</span><i> entrou no chat.</i></b><br>\n";

// Grava no arquivo
$arquivoChat = 'chat.txt';
if ($fp = fopen($arquivoChat, 'a')) {
    fwrite($fp, $mensagem);
    fclose($fp);
}

// Redireciona para batepapo.php com método POST preservado
header('Location: batepapo.php', true, 307);
exit;
?>
