<?php
// Lê o conteúdo do arquivo com segurança
$hora = '...';
if (file_exists('ultima.txt')) {
    $hora = htmlspecialchars(trim(file_get_contents('ultima.txt')), ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5; URL=ultima.php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Última Mensagem</title>
    <style>
        body {
            background-color: #303c6d;
            color: white;
            font-family: Verdana, sans-serif;
            font-size: 0.85rem;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            margin: 0;
        }
    </style>
</head>
<body>
    <b>Última mensagem enviada às <?php echo $hora; ?>.</b>
</body>
</html>
