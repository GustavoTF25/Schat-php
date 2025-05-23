<?php
header('Content-Type: text/html; charset=UTF-8');

// Lê o conteúdo do arquivo de forma segura
$mensagens = '';
$arquivo = 'chat.txt';
if (file_exists($arquivo)) {
    $mensagens = htmlspecialchars(file_get_contents($arquivo), ENT_QUOTES, 'UTF-8');
    // Reverte a codificação apenas de tags específicas de HTML para manter a formatação
    $mensagens = str_replace(['&lt;b&gt;', '&lt;/b&gt;', '&lt;br&gt;', '&lt;i&gt;', '&lt;/i&gt;', '&lt;span', '&lt;/span&gt;'], ['<b>', '</b>', '<br>', '<i>', '</i>', '<span', '</span>'], $mensagens);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bate Papo</title>
    <style>
        body {
            background-color: #ffffff;
            font-family: Verdana, sans-serif;
            font-size: 14px;
            padding: 10px;
        }
        #chat {
            max-height: 80vh;
            overflow-y: auto;
        }
    </style>
    <script>
        // Atualiza o chat a cada 5 segundos com AJAX
        setInterval(() => {
            fetch('chat.txt')
                .then(res => res.text())
                .then(texto => {
                    const container = document.getElementById('chat');
                    container.innerHTML = texto;
                    container.scrollTop = container.scrollHeight;
                });
        }, 5000);
    </script>
</head>
<body>
    <div id="chat"><?= $mensagens ?></div>
</body>
</html>
