<style type="text/css">
/*
** Style Simple Ecommerce Theme for Bootstrap 4
** Created by T-PHP https://t-php.fr/43-theme-ecommerce-bootstrap-4.html
*/
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: 'Poppins', sans-serif;
}
.cabecalho {
  display: grid;
  //justify-content: space-between;
  grid-template-columns: 1fr auto 1fr;
  align-items: center;
  padding: 20px 40px;
  background-color: #333;
  color: #fff;
  position: relative;
}
.logo {
  font-size: 24px;
  font-weight: bold;
  justify-self: start; /*garante que a logo encoste a direita*/
}
.logo img {
  width: 40%;
}
.menu {
  display: flex;
  gap: 20px;
 // width: max-content;
  font-size: 20px;
  justify-self: center; /*Trava exatamente no centro da tela*/
}
.menu a {
  white-space: nowrap;
  color: #fff;
  text-decoration: none;
}
.menu-toggle {
  display: none;
  font-size: 28px;
  background: none;
  border: none;
  cursor: pointer;
}
.menu a:hover {
  color: #00bcd4;
}
.carrinho {
  display: flex;
  align-items: center;
  /*justify-content: flex-end;*/
  /*flex-direction: row-reverse;*/
  /*margin-left: auto;*/
  justify-self: end; /*força o carrinho a ir para o extremo direito*/
  gap: 20px;
}
.carrinho-icone-wrapper img {
  width: 100%;
  height: auto;
  display: block;
}
.carrinho-icone-wrapper {
  position: relative;
  display: flex;
  align-items: center;
  width: 160px;
}
.carrinho-badge {
  position: absolute;
  top: 40px; /* Move a bolinha para cima da imagem */
  right: 80px; /* Move a bolinha para a direita da imagem */
  background-color: #ff3b30; /* Cor vermelha de alerta */
  color: #fff; /* Cor do texto branca */
  font-size: 26px;
  font-weight: bold;
  border-radius: 50%; /* Faz ficar redondo */

  /* Garante que a bolinha seja perfeitamente redonda */
  width: 45px;
  height: 45px;
  display: flex;
  justify-content: center;
  align-items: center;
}

@media (max-width: 768px) {
  .cabecalho {
    padding: 15px 20px;
  }
  .menu-toggle {
    display: block;
  }
  .menu {
    display: none;
    flex-direction: column;
    position: absolute;
    top: 100%;
    left: 0;
    width: 95%;
    background-color: #333;
    padding: 20px;
    gap: 15px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    z-index: 10;
  }
  .menu.ativo {
    display: flex;
  }
}

/*Index*/
.container {
  display: flex;
  flex-direction: row;
  /*flex-wrap: wrap;*/
}
.side {
  flex: 25%;
  background-color: #f1f1f1;
  padding: 20px;
}
.main {
  flex: 75%;
  background-color: #eee;
  padding: 20px;
}
.main img {
  width: 100%;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
}
/*buscar*/
.busca {
  background-color: #bbb;
  padding-top: 20px;
  padding-bottom: 20px;
  border-radius: 5px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
  margin-bottom: 30px;
}
.busca input[type="search"] {
  width: 230px;
  padding: 8px;
  border-radius: 10px;
}
.busca h2,
.busca form {
  margin: 10px;
}
.busca button {
  background-color: #fd9926;
  border: none;
  color: white;
  border-radius: 10px;
  box-shadow: 2px 2px 2px black;
  padding: 10px 15px;
}
.menu-departamentos {
  clear: left;
  margin-top: 10px;
  margin-bottom: 10px;
}
.menu-departamentos h2 {
  background-color: #bbb;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
  margin-bottom: 30px;
}
.menu-departamentos h3 {
  background-color: #ebae64;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
}
.menu-departamentos li {
  background-color: #272727;
  margin-bottom: 1px;
  padding: 5px 10px;
}
.menu-departamentos ul {
 /* margin-left: -10px; // alterar aqui depois da fonte*/
  list-style-type: none;
}
.menu-departamentos a {
  color: white;
  text-decoration: none;
}
.menu-departamentos li ul {
  /*display: none;*/
  max-height: 0;
  opacity: 0;
  visibility: hidden;
  overflow: hidden;
  transform: translateY(-5px);
  transition: all 0.4s ease-in-out;
}
.menu-departamentos li:hover > ul {
  max-height: 500px;
  /*display: block;*/
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
}
@media (max-width: 1413px) {
  .busca input[type="search"] {
    width: 200px;
    padding: 8px;
    border-radius: 10px;
  }
}
.promocoes {
  display: flex;
  flex-wrap: wrap;
  background-color: #ddd;
}
.promocoes div {
  background-color: #000;
  margin: 10px;
  padding: 20px;
  width: 258px;
  height: 300px;
  color: white;
  border-radius: 10px;
}
.promocoes div p {
  background-color: red;
  font-weight: bold;
  padding: 7px;
  border-radius: 6px;
  box-shadow: 0 4px 6px rgba(255, 255, 255, 0.5);
  text-align: center;
}
.promocoes div h3 {
  margin-top: 3px;
  margin-left: 2px;
  background-color: red;
  border-radius: 45%;
  float: left;
  box-shadow: 0 4px 6px rgba(245, 221, 6, 0.75);
  padding: 5px;
  float: left;
}
.promocoes img {
  width: 100%;
  height: 168px;
  object-fit: cover;
  border-radius: 10px;
}
.val {
  background-color: #272727;
  padding: 3px 10px;
  color: #be3d3d;
  text-decoration: none;
  box-shadow: 0 4px 6px rgba(255, 255, 255, 0.5);
  float: right;
  font-weight: bold;
  font-size: 18px;
  margin-top: 7px;
}
footer {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  background-color: #333;
  color: #fff;
  padding: 30px 50px;
}
.logar{
  flex: 1;
  text-align: left;
}

.logar img {
  width: 20%;
  height: auto;
}

.endereco {
  flex: 1;
  text-align: center;
  line-height: 1.6;
}
.direcionamento {
  flex: 1;
  text-align: right;
}
.social {
  /*position: absolute;*/
  top: 12px;
  /*right:0;*/
}
.social a {
  height: 32px;
  width: 32px;
  display: inline-block;
  text-indent: -9999px;
}
.social li {
  float: right;
  margin-left: 25px;
  list-style-type: none;
}
.social a[href*="facebook.com"] {
  background-image: url(../img/facebook.png);
}
.social a[href*="instagram.com"] {
  background-image: url(../img/instagram.png);
}
.social a[href*="whatsapp.com"] {
  background-image: url(../img/whatsapp.png);
}
.maps-link {
    color: #ebae64;
    font-size: 32px;
}

.maps-link:hover {
    color: #fff;
}
footer h3 {
  width: 100%;
  text-align: center;
  font-size: 14px;
  font-weight: normal;
  margin: 25px 0 0;
  padding-top: 20px;
  border-top: 1px solid #555;
}
</style>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro Exemplo</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--<link href="https://jsdelivr.net" rel="stylesheet">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" >

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="cabecalho">
        <div class="logo">
            <img src="{{ asset('img/logo2.png') }}" alt="MeuSite">
        </div>
        <button class="menu-toggle" aria-label="Abrir menu">&#9776;</button>
        <nav class="menu">
            <a href="/">Início</a>
            <a href="#">Cadastre-se</a>
            <a href="#">Produtos</a>
            <a href="#">Sobre</a>
            <a href="#">Contato</a>
            <a href="#">ajuda</a>
        </nav>
        <div class="carrinho">
            <div class="carrinho-icone-wrapper">
                <a href="carrinho.php"><img src="{{ asset('../img/carrinho2.png') }}" alt="carrinho de compras"></a>
                <span class="carrinho-badge">730</span>
            </div>
        </div>
    </header>
    <script>
        const toggleBtn = document.querySelector('.menu-toggle');
        const menu = document.querySelector('.menu');

        toggleBtn.addEventListener('click', () => {
            menu.classList.toggle('ativo');
        });
    </script>

@yield('content')
<!--<script> src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>-->
<footer>
    <div class="logar">
        <img src="../../img/logo.png" alt="logo rodapé">
    </div>
    <div class="endereco">
        Rua: Fulano de Tal, 504, <br>
        Bairro: Ronda,<br>
        Cidade: Ponta Grossa - PR<br>
        <a
            href="https://www.google.com/maps/search/?api=1&query=Rua+Fulano+de+Tal,+504,+Ronda,+Ponta+Grossa+-+PR"
            target="_blank"
            class="maps-link">

            <i class="fa-solid fa-location-dot"></i>

        </a>
    </div>
    <div class="direcionamento">
        <ul class="social">
            <li><a href="https://www.facebook.com/Adoroexclusividadesartesanais"></a></li>
            <li><a href="http://www.instagram.com/adoro"></a></li>
            <li><a href="https://whatsapp.com"></a></li>
        </ul>
    </div>
    <h3>&copy; Copyright 2026 - Todos os direitos reservados.</h3>
</footer>
</body>
<script src="js/jquery-4.0.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>


