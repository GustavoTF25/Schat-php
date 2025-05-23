<?php
session_start();

// Usuário e senha definidos
define('ADMIN_USER', 'admin');
define('ADMIN_PASS', 'administrador');

// Verificação de login
if (!isset($_SESSION['logado'])) {
    if ($_POST['usuario'] === ADMIN_USER && $_POST['password'] === ADMIN_PASS) {
        $_SESSION['logado'] = true;
    } else {
        echo "<script>alert('Reveja seu login e sua senha.'); window.location.href = 'admin/';</script>";
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de Administração</title>
    <style>
        body {
            background-color: #303c6d;
            color: white;
            font-family: Verdana, sans-serif;
            margin: 0;
            padding: 2rem;
        }
        h1 {
            text-align: center;
            margin-bottom: 1rem;
        }
        iframe {
            border: none;
            margin-bottom: 1rem;
        }
        .controls {
            margin-top: 1rem;
            text-align: center;
        }
        input[type="text"], input[type="submit"], input[type="button"] {
            padding: 0.5rem;
            margin: 0.25rem;
            font-size: 1rem;
            border: none;
            border-radius: 4px;
        }
        input[type="submit"], input[type="button"] {
            background-color: #4b5fa8;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover, input[type="button"]:hover {
            background-color: #667bdc;
        }
    </style>
    <script>
        function reinic() {
            if (confirm("Deseja realmente reinicializar o chat? Todas as mensagens serão apagadas.")) {
                const janela = window.open('sjdofijwerflisdfjsdfijefmclsdkjvodiujvfsofisdfjweofljsdnfksdfuh.php', '_blank', 'width=10,height=10');
                setTimeout(() => janela.close(), 1000);
            }
        }

        function sairadmin() {
            if (confirm("Deseja realmente sair? Os usuários do chat NÃO ficarão sabendo.")) {
                window.location.href = 'logout.php';
            }
        }
    </script>
</head>
<body>
    <h1>Área de Administração</h1>

    <iframe src="chat.php" name="chat" width="100%" height="400">Seu navegador não suporta iframes.</iframe>
    <iframe src="ultima.php" name="ultimo" width="300" height="20">Atualize seu navegador.</iframe>

    <form action="gravar.php" method="post" target="chat" class="controls">
        <input type="hidden" name="nick" value="<b style='color:red;'>Moderador</b>">
        <input type="text" name="texto" placeholder="Mensagem para o chat">
        <input type="submit" value="Dizer">
    </form>

    <form action="gravar.php" method="post" target="chat" class="controls">
        <input type="hidden" name="nick" value="<b style='color:red;'>Moderador</b>">
        <input type="hidden" name="texto" value="<a href='#' onclick='window.open(\"termo.htm\", \"Termo\", \"width=300,height=300\")'><b style='color:red;'>Favor ler nosso termo de uso.</b></a>">
        <input type="submit" value="Enviar link para termo de uso">
    </form>

    <div class="controls">
        <input type="button" value="Reinicializar chat" onclick="reinic()">
        <input type="button" value="Sair" onclick="sairadmin()">
    </div>
</body>
</html>
