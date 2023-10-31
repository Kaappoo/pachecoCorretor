<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/style.css" />
    <title>Document</title>
  </head>
  <body>
    <header>
      <div class="info">
        <img src="img/logo.png" alt="" />
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
            <a href="#">sobre</a>
          </li>
        </ul>
      </nav>
    </header>
    <div class="main">
      <div class="conteudo">
        <div class="card">
          <h2>Apartamentos a partir de 182.242,00!</h2>
          <h4>Venha conhecer nossa variedade de unidades!</h4>
          <a href="#unidades">Vamos!</a>
        </div>
      </div>

      <div class="unidades" id="unidades">
        <h1>Cheque nossas unidades!</h1>

        <div class="imoveis">
          <a href="#">
            <div class="imovel-1">
              <span> térreo com quintal</span>
            </div>
          </a>
          <a href="#">
            <div class="imovel-2">
              <span> modelo padrão</span>
            </div>
          </a>
          <a href="#">
            <div class="imovel-3">
              <span> duplex</span>
            </div>
          </a>
        </div>
      </div>
      <div class="apartamentos">
        <div class="ap1">
          <div class="textodoap">
            <h2>Lazer</h2>
            <h3>lazer para toda a família</h3>
          </div>
          <div class="imgdoap1"></div>
        </div>
        <div class="ap2">
          <div class="textodoap2">
            <h2>venha conhecer</h2>
            <h3>venha conferir o nosso decorado</h3>
          </div>
          <div class="imgdoap2"></div>
        </div>
      </div>

      <div class="video">
        <video width="320" height="240" controls>
          <source
            src="./img/WhatsApp Video 2022-09-21 at 19.41.32.mp4"
            type="video/mp4"
          />
        </video>
      </div>
      <div class="corretores" id="corretores">
        <h1>Interessado(a)?</h1>
        <h2>Fale com um de nossos corretores!</h2>
        <div class="contato">
          <div class="senhores">
            <div class="senhor">
              <a href="https://api.whatsapp.com/send?phone=947298191">
                <img src="./img/WhatsApp-Logo.png" /><span>Pacheco</span></a
              >
            </div>
            <div class="senhor">
              <a href="https://api.whatsapp.com/send?phone=947298188"
                ><img src="./img/WhatsApp-Logo.png" /><span>Luciene</span></a
              >
            </div>
          </div>
          <div class="formulario">
            <label for="nome"> Nome</label>
            <input type="text" name="nome" id="nome">
            <label for="email"> Email</label>
            <input type="email" name="email" id="email">
            <label for="telefone"> Telefone</label>
            <input type="number" name="telefone" id="telefone">
            <label for="mensagem"> Sua mensagem</label>
            <textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
            <button type="submit" class="enviar" id="enviar" onclick="enviar()">Enviar</button>
          </div>
        </div>
      </div>
    </div>
    <script src="index.js"></script>
  </body>
</html>
