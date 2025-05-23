<?php
$nick = trim($_POST['nick'] ?? '');
$cor = $_POST['cor'] ?? 'black';

if ($nick === '') {
    header('Location: index.php');
    exit;
}

// Sanitização básica
$nick_safe = htmlspecialchars($nick, ENT_QUOTES, 'UTF-8');
$cor_safe = htmlspecialchars($cor, ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MisteriousUnderground</title>
    <style>
        body {
            background-color: #303c6d;
            color: white;
            font-family: Verdana, sans-serif;
            margin: 0;
            padding: 1rem;
        }

        iframe {
            border: none;
            width: 100%;
        }

        .chat-frame {
            height: 60vh;
            margin-bottom: 1rem;
        }

        .ultima-frame {
            width: 300px;
            height: 16px;
        }

        textarea {
            width: 100%;
            padding: 0.5rem;
            resize: vertical;
        }

        input[type="submit"] {
            margin-top: 0.5rem;
            padding: 0.5rem 1rem;
            cursor: pointer;
        }

        .user-label {
            font-weight: bold;
            color: <?= $cor_safe ?>;
        }

        form {
            margin-top: 1rem;
        }

        hr {
            border-color: white;
            margin: 1.5rem 0;
        }
    </style>
</head>
<body>

    <div>
        <iframe name="chat" src="chat.php" class="chat-frame">Seu navegador não suporta iframes.</iframe>
        <iframe name="ultimo" src="ultima.php" class="ultima-frame">Atualize seu navegador.</iframe>
    </div>

    <hr>

    <form action="gravar.php" method="post" target="chat">
        <div class="user-label"><?= $nick_safe ?></div>
        <input type="hidden" name="nick" value="<?= $nick_safe ?>">
        <input type="hidden" name="cor" value="<?= $cor_safe ?>">
        <label for="texto">Mensagem:</label>
        <textarea id="texto" name="texto" rows="4" placeholder="Digite sua mensagem..."></textarea>
        <br>
        <input type="submit" value="Enviar">
    </form>

    <form action="sair.php" method="post">
        <input type="hidden" name="nick" value="<?= $nick_safe ?>">
        <input type="hidden" name="cor" value="<?= $cor_safe ?>">
        <input type="submit" value="Sair">
    </form>

</body>
</html>
