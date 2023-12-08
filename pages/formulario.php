<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/style.css" />
    <title>Formulario</title>

    
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
    <script src="../index.js"></script>
    <div class="banner"> <h2>Formulário</h2>     </div>
    <div class="main-formulario">
        <form action="../php/cadastro.php" method="post" class="form-cadastro">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
            <label for="telefone">Telefone:</label>
            <input type="number" name="telefone" id="telefone">
            <label for="renda">Renda:</label>
            <input type="text" name="renda" id="renda">
            <label for="endereco">Endereço:</label>
            <textarea name="endereco" id="endereco"  ></textarea>
            <input type="submit" id="envia-cadastro">
        </form>
</body>
</div>