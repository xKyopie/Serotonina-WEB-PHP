
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Feedback</title>

    <!-- CSS -->
   <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>

        <article class="faleconosco">
        <!-- IMAGEM -->
        <section class="paragrafo-fale-c">
        <img id="celular" src="celular.png"/>
        </section>

        <!-- BLOCO -->
        <section class="paragrafo-fale-c">
            <div>
            <h1 id="titulo3">Nos mande uma mensagem !</h1>
            <h4>Escreva sua opinião, sentimento, feedback e muito mais.</h4>
            </div>

            <!-- CAIXA TEXTO -->
            <form class="form" method="POST" action="recebe-feedback.php" name="feedback" onsubmit="return validar()">
                <div class="bloco">
                    <input type="text" value="" placeholder="Nome" class="mensagem"/>
                    <input type="email" value="" placeholder="E-mail" class="mensagem"/>
                    <input type="text" value="" placeholder="Escreva aqui " class="mensagem" />
                </div>

                <input type="submit" value="Enviar" class="enviar"/>
            </form>
            
        </section>

        </article>

         <!-- RODAPÉ -->
  <footer>
      <div class="rodape">
        <img id="google" src="googlePlay.jpg" />
     </div>
   
      <div  class="rodape">
        <p>SEROTONINA </p>
      </div>
  
   
    <div class="rodape">
      <img class="icone" src="insta.png"/>
      <img class="icone" src="tt.png"/>
    </div>
    
  
    <div  id="rodape-direitos">
      <p> © 2022 - Todos os direitos reservados. Desenvolvedores Equipe Serotonina</p>
    </div>
  
  </footer>

        <script src="script.js" ></script>
</body>
</html>
   