<?php
// Define os caminhos dos arquivos
$chatFile = "chat.txt";
$ultimaFile = "ultima.txt";

// Tenta limpar os arquivos com segurança
file_put_contents($chatFile, "") or die("Erro ao limpar o chat.");
file_put_contents($ultimaFile, "-") or die("Erro ao reiniciar o horário da última mensagem.");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Área de Administração</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        function reinicia() {
            alert("O bate-papo foi reinicializado com sucesso.");
            window.close();
        }
    </script>
    <style>
        body {
            background-color: #303c6d;
            color: white;
            font-family: Verdana, sans-serif;
            font-size: 14px;
            text-align: center;
            padding-top: 50px;
        }

        hr {
            border-color: white;
        }
    </style>
</head>
<body onload="reinicia()">
    <hr>
    <p>Feche esta janela.</p>
    <hr>
</body>
</html>
