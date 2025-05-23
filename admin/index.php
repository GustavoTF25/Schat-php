<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Área de Administração</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f2f5;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background-color: #fff;
      padding: 2rem;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 360px;
    }

    h1 {
      font-size: 1.5rem;
      margin-bottom: 1.5rem;
      text-align: center;
      color: #303c6d;
    }

    label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: bold;
      font-size: 0.95rem;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 0.5rem;
      margin-bottom: 1rem;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 0.6rem;
      background-color: #303c6d;
      color: #fff;
      border: none;
      border-radius: 4px;
      font-size: 1rem;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #3e4d9c;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h1>Administração do Chat</h1>
    <form action="../admin.php" method="POST">
      <label for="usuario">Nome de usuário:</label>
      <input name="usuario" id="usuario" type="text" required>

      <label for="password">Senha:</label>
      <input name="password" id="password" type="password" required>

      <input type="submit" value="Entrar">
    </form>
  </div>
</body>
</html>
