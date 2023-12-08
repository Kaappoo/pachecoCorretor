<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css" />
    <title>Login</title>
</head>
<body>
<header>
      <div class="info">
        <a href="../index.php">
            <img src="/img/logo.png" alt="logo" />
        </a>
        <div class="numeros">
          <span> (11)94729-8191</span>
          <span>CRECI 185626</span>
        </div>
        <div class="numeros">
          <span> (11)94729-8188</span>
          <span>CRECI 185626</span>
        </div>
      </div>
      <nav>
        <ul>
          <li></li>
          <li>
            <a href="#unidades">imóveis</a>
          </li>
          <li>
            <a href="#corretores">contatos</a>
          </li>
          <li>
            <a href="#">formulário</a>
          </li>
        </ul>
      </nav>
    </header>
    <div class="main-logout">
        <form class="formulario" action="../php/sessao.php" method="post">
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Login" class="login-submit">
        </form>
    </div>
</body>
</html>