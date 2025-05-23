<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MisteriousUnderground</title>
    <style>
        body {
            font-family: Verdana, sans-serif;
            font-size: 14px;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        header {
            background-color: #222;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }

        main {
            padding: 2rem;
            max-width: 600px;
            margin: auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        form {
            margin-bottom: 1rem;
        }

        label {
            display: block;
            margin-top: 1rem;
        }

        input[type="text"], select {
            width: 100%;
            padding: 0.5rem;
            margin-top: 0.3rem;
        }

        input[type="submit"] {
            margin-top: 1rem;
            padding: 0.5rem 1rem;
            cursor: pointer;
        }

        .links {
            margin-top: 1rem;
        }

        .links a {
            display: block;
            margin: 0.5rem 0;
            color: #0066cc;
            text-decoration: none;
        }

        .links a:hover {
            text-decoration: underline;
        }

        hr {
            margin: 1.5rem 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>MisteriousUnderground</h1>
    </header>

    <main>
        <form action="entrar.php" method="post">
            <label for="nick">Apelido:</label>
            <input type="text" id="nick" name="nick" required>

            <label for="cor">Cor do apelido:</label>
            <select id="cor" name="cor">
                <option value="blue">Azul</option>
                <option value="red">Vermelho</option>
                <option value="green">Verde</option>
                <option value="black" selected>Preto</option>
            </select>

            <input type="submit" value="Entrar">
        </form>

        <hr>

        <div class="links">
            <a href="#" onclick="window.open('espiar.php','Janela','width=600,height=300,scrollbars=yes'); return false;">Espiar</a>
            <a href="#" onclick="window.open('termo.htm','Janela','width=600,height=300'); return false;">Regras</a>
        </div>
    </main>
</body>
</html>
