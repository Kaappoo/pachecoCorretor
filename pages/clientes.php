<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php"); 
    exit();
}

?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/style.css" />
    <title>Clientes</title>

    
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
    <div class="main-clientes">
        <div class="clientes-table">
            <?php
                include '../php/conexao.php';
                $sql = "SELECT * FROM cliente";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        
                        echo "<div class='cliente'>";
                        echo "<span>Nome: <br> " . $row["nome"]. "</span>";
                        echo "<span>Telefone: <br>" . $row["numeroTelefone"]. "</span>";
                        echo "<span>Renda Bruta:<br> " . $row["rendabruta"]. "</span>";
                        echo "<span>Endereço:<br> " . $row["endereco"]. "</span>";
                        echo "</div>";
                        
                    }
                } else {
                    echo "Nenhum registro encontrado na tabela clientes.";
                }

                
                $conn->close();
            ?>
          <a class="logout-btn" href="logout.php">Logout</a>
        </div>
    </div>
    

</body>