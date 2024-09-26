<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NINIVE</title>
    <style>

        /*imagem de fundo */
        body {
            font-family: Arial, sans-serif;
          margin: 10px;
            padding: 10px;
            background-image: url('assets/fundo.avif');
            background-repeat: no-repeat;
            /*background-attachment: fixed;*/
            background-size: 100% 80%; /* Ajusta a largura para 100% e a altura para 50% */
            height:800px;
            background-position: center top 60px; /* Ajuste a posição da imagem de fundo */
            color: #333;
        }
.menu-container {
    position: absolute; /* Fixa o menu na tela */
    top: 10px; /* Alinha o menu ao topo da página */
    left: 0; /* Alinha o menu à esquerda da página */
    z-index: 1000; /* Garante que o menu fique acima de outros elementos */
    background-color: white; /* Adiciona fundo branco para o menu, se necessário */
}
 /*botão */
/* Estilos para o botão de menu */
.menu-toggle {
    cursor: pointer;
    width: 40px;
    height: 20px;
    position: relative;
    top: 10px; /* Ajuste a posição vertical conforme necessário */
    left: 40px; /* Ajuste a posição horizontal conforme necessário */
}

/* Estilos para as barras do botão */
.bar {
    background-color: #333;
    height: 3px;
    width: 100%;
    position: absolute;
    transition: all 0.3s ease;
    border-radius: 3px; /* Adiciona arredondamento para um estilo mais suave */
}

.bar1 {
    top: 0;
}

.bar2 {
    top: 50%;
    transform: translateY(-50%);
}

.bar3 {
    bottom: 0;
}

/* Estilos para o botão de menu quando ativo (transforma em "X") */
.menu-toggle.active .bar1 {
    transform: rotate(45deg);
    top: 50%;
    transform: translateY(-50%) rotate(45deg);
    background-color: red;
}

.menu-toggle.active .bar2 {
    opacity: 0;
}

.menu-toggle.active .bar3 {
    transform: rotate(-45deg);
    bottom: 50%;
    transform: translateY(50%) rotate(-45deg);
    background-color: red;
}

/* Estilos para o menu de navegação */
.nav-menu {
    display: none;
    height: 500px;
    width: 100%; /* Ajustado para 100% da largura da tela */
    position: absolute; /* Garante que o menu seja posicionado corretamente */
    top: 50px; /* Ajusta a posição abaixo do botão de menu */
    left: 0;
    background-color: white; /* Fundo branco para o menu */
    z-index: 1000; /* Garante que o menu fique acima de outros elementos */
}

/* Exibe o menu quando o botão está ativo */
.menu-toggle.active + .nav-menu {
    display: block;
}

/* Estilos para itens do menu */
.nav-menu ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.nav-menu li {
    background-color: #f0f0f0; /* Cor de fundo */
    height: 80px;
    width:200px;
    font-size: 20px;
    color: black; /* Cor da fonte */
    font-weight: bold; /* Fonte em negrito */
    display: flex;
    align-items: center;
    justify-content: center; /* Centraliza o texto no item */
    position: relative;
}

/* Estilos para submenus */
.submenu {
    display: none; /* Esconde o submenu por padrão */
    position: absolute;
    top: 100%; /* Posiciona o submenu logo abaixo do item do menu principal */
    left: 0;
    background-color: white; /* Fundo branco para o submenu */
    width: 100%; /* Ajusta a largura do submenu para o item principal */
    z-index: 1000; /* Garante que o submenu fique acima de outros elementos */
}

.nav-menu li:hover .submenu {
    display: block; /* Exibe o submenu quando o item do menu principal é hover */
}

.submenu li {
    height: auto; /* Permite que a altura do submenu se ajuste ao conteúdo */
}

.img {
    width: 100%; /* Ajusta as imagens para ocupar a largura total */
    height: auto; /* Mantém a proporção da imagem */
}

.content {
    margin: 10px 0; /* Adiciona margem vertical ao conteúdo */
    padding: 10px;
}

        a{
            color: black; /* Cor da fonte, aqui é vermelho */
    font-weight: bold; /* Para tornar a fonte em negrito */



        }
        h2 {
            margin: 200px 0 0 0; /* Ajuste a margem para posicionar a caixa no local desejado */
            color: white;
            font-size: 40px;
            width: 600px; /* Ajuste o tamanho conforme necessário */
            height: auto; /* Permite que a altura se ajuste ao conteúdo */
            background-color: rgba(0, 0, 0, 0.5); /* Cor de fundo semitransparente */
            border-radius: 10px; /* Bordas arredondadas da caixa */
            box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.5); /* Sombra da caixa */
            
            padding: 20px; /* Espaço interno da caixa */
            text-align: left; /* Alinha o texto à esquerda dentro da caixa */
            /*display: inline-block; /* Garante que o padding e a sombra sejam aplicados corretamente */
        }

        h3 {
            margin-top:50px;
            color: bold;
            font-size: 40px;
            height: auto; /* Permite que a altura se ajuste ao conteúdo */
            text-align: center; /* Alinha o texto à esquerda dentro da caixa */
            text-decoration: underline;
            

        }
        .ferramentas {
            margin-top:150px;
            color: bold;
            font-size: 40px;
            height: auto; /* Permite que a altura se ajuste ao conteúdo */
            text-align: center; /* Alinha o texto à esquerda dentro da caixa */
            text-decoration: underline;
        }
        .container {
  display: grid; /* Usa Grid para alinhar as caixas */
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); /* Define o layout das colunas */
  gap: 90px; /* Espaçamento entre as caixas */
  padding: 58px;
 
}

      
     .caixa {
            color: black;
            font-size: 20px;
            width: 250px; /* Ajuste o tamanho conforme necessário */
            height: 220px; /* Permite que a altura se ajuste ao conteúdo */
            text-align:left; /* Alinha o texto à esquerda dentro da caixa */
            border: 2px solid #000; /* Adiciona uma borda preta ao redor da caixa */
            padding: 10px; /* Adiciona um espaço interno ao redor do texto */
            box-sizing: border-box; /* Inclui o padding e a borda na largura total da caixa */
            margin-bottom:5px; /* Espaçamento abaixo de cada caixa */
            /*display: inline-block; /* Faz com que as caixas fiquem lado a lado */
            margin: 0 auto; /* Espaçamento entre as caixas */
        }
       
        .caixa2 {
    display: flex; /* Exibe a imagem e o texto lado a lado */
    align-items: center; /* Alinha o texto e a imagem no início da linha */
    border-top-right-radius: 25px; /* Aplica o border-radius ao canto superior direito */
    border-bottom-right-radius: 25px; /* Aplica o border-radius ao canto inferior direito */
    margin: 0 auto; /* Centraliza horizontalmente */
    color: blue;
    font-size: 20px;
    width: 1000px; /* Ajuste o tamanho conforme necessário */
    height: auto; /* Permite que a altura se ajuste ao conteúdo */
    text-align: left; /* Alinha o texto à esquerda dentro da caixa */
    border: 2px solid #000; /* Adiciona uma borda preta ao redor da caixa */
    padding: 10px; /* Adiciona um espaço interno ao redor do texto */
    box-sizing: border-box; /* Inclui o padding e a borda na largura total da caixa */
    gap: 20px; /* Espaçamento entre a imagem e o texto */
    margin-bottom: 20px; /* Espaçamento abaixo de cada caixa */
    background-color: #6BE3D8; /* Cor para a primeira caixa */

        }
        .caixa2-cor1 {
    background-color: lightcoral; /* Cor para a primeira caixa */
}
        p{
            color: black;
            font-size:15px;
        }


      
        .button {
            position: fixed; /* Fixa o botão na tela */
            top: 10px; /* Ajuste a posição conforme necessário */
            left: 30px; /* Ajuste a posição conforme necessário */
            width: 60px; /* Ajuste o tamanho conforme necessário */
            height: 50px; /* Ajuste o tamanho conforme necessário */
            background: url('assets/menu.ico') no-repeat center center;
            background-size: contain; /* Ajusta a imagem para caber dentro do botão */
            border: none; /* Remove a borda padrão */
            cursor: pointer; /* Muda o cursor para indicar que é clicável */
            z-index: 1000; /* Garante que o botão esteja acima de outros elementos */
        }

        .button:focus {
            outline: none; /* Remove a borda de foco padrão */
        }

        .img {
            position: absolute; /* Fixa a imagem na tela */
            top: 10px; /* Ajuste a posição vertical conforme necessário */
            left: 130px; /* Ajuste a posição horizontal conforme necessário */
            width: 45px; /* Ajuste o tamanho conforme necessário */
            height: auto; /* Mantém a proporção da imagem */
           /* z-index: 1000; /* Garante que a imagem esteja acima de outros elementos */
        }
        .imgico {
            max-width: 80%;
            height: 90px;
        }
        .img2 {
            max-width: 350px; /* Ajuste o tamanho da imagem conforme necessário */
    height: auto; /* Mantém a proporção da imagem */
    margin-right: 20px; /* Espaçamento entre a imagem e o texto */;
        }
        .caixa2 p {
            padding: 35px;
    margin:0; /* Remove a margem padrão dos parágrafos */
    font-size:20px;
}

.form-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 800px;
            margin: 0 auto; /* Centraliza horizontalmente */
        }

        

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-group textarea {
            resize: vertical; /* Permite redimensionar verticalmente */
            min-height: 100px;
        }

        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }

        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="menu-container">
    <div class="menu-toggle" id="menu-toggle">
        <div class="bar bar1"></div>
        <div class="bar bar2"></div>
        <div class="bar bar3"></div>
    </div>
    <nav class="nav-menu">
        <ul>
            <li>
                <a href="#">Gerenciar livros</a>
                <ul class="submenu">
                    <li><a href="cadastrar.php">Cadastrar </a></li><br>
                    <li><a href="atualizar.php">Atualizar</a></li><br>
                    <li><a href="buscar.php">Buscar</a></li><br>
                    <li><a href="deletar.php">Arquivar</a></li><br>
                </ul>
            </li>
            <li>
                <a href="#">Gerenciar alunos</a>
                <ul class="submenu">
                    <li><a href="cadastrar_aluno.php">Cadastrar</a></li><br>
                    <li><a href="atualizar_aluno.php">Atualizar</a></li><br>
                    <li><a href="buscar_aluno.php">Buscar</a></li><br>
                    <li><a href="bloquear_aluno.php">Bloquear</a></li><br>
                </ul>
            </li>
            <li>
                <a href="#">Acervo</a>
                <ul class="submenu">
                    <li><a href="listar_acervo.php">Listar</a></li><br>
                    <li><a href="reserva.php">Reservar</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Notificações</a>
                <ul class="submenu">
                    <li><a href="#">Visualizar notificações</a></li><br>
                    <li><a href="#">Configurações de notificação</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Relatório</a>
                <ul class="submenu">
                    <li><a href="#">Gerar relatório</a></li>
                    <li><a href="#">Visualizar relatórios</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Anotações</a>
                <ul class="submenu">
                    <li><a href="#">Adicionar anotações</a></li>
                    <li><a href="#">Listar anotações</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Suporte / FAQ</a>
                <ul class="submenu">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Suporte técnico</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>

<img class="img" src="assets/ninive.png" alt="Descrição da Imagem">
<div class="content">            
    <!-- Conteúdo adicional pode ser inserido aqui -->
</div>


    
  <h2> <text> Bem-vindo ao Nínive, sua<br> ferramenta para organizar,<br> acompanhar e otimizar o acervo<br> de livros, facilitando o acesso e <br>a gestão de recursos educacionais.</text></h2>

 
  
  

<h3 class="ferramentas">Ferramentas e recursos</h3>

<div class="container">
<h4 class="caixa"> <img class="imgico" src="assets/livroico.jpg" alt="Descrição da Imagem">Gerenciamento do Acervo<p>Adicione, Altere e delete livros de maneira rapida e simples</p></h4>
    

<h4 class="caixa"> <img class="imgico" src="assets/livroestrelaico.png" alt="Descrição da Imagem">Controle dos livros<p>Tenha um controle e monitoramento dos livros em uso</p></h4>


<h4 class="caixa"> <img class="imgico" src="assets/lendoico.jpeg" alt="Descrição da Imagem">administração dos alunos<p>Mantenha a gestão dos alunos em relação ao tempo, situação e a utilização dos livros</p></h4>

<h4 class="caixa"> <img class="imgico" src="assets/relatorioico.jpg" alt="Descrição da Imagem">Relatorio e anotações <p>Registre e organize as informações dos livros e dos alunos</p></h4>


<h4 class="caixa"> <img class="imgico" src="assets/interacaoico.jpg" alt="Descrição da Imagem">Interação e atualizações<p>Sempre mantenha contato com seus usuarios, alertando eles com novas atualizações</p></h4>

</div>
<h3>Sobre nós</h3>

<h4 class="caixa2"> <img class="img2" src="assets/quemsomos1.jpg" alt="Descrição da Imagem"> <p>Somos a NextByte, e com o projeto Nínive, estamos revolucionando a gestão de bibliotecas. Nosso objetivo é proporcionar sistemas de gerenciamento simples e práticos, que facilitam a administração e aprimoram a experiência dos usuários.</p>

<h4 class="caixa2"> <img class="img2" src="assets/quemsomos2.jpg" alt="Descrição da Imagem"><p>Nosso compromisso é oferecer soluções tecnológicas que sejam intuitivas e acessíveis, permitindo que bibliotecas de todos os tamanhos possam gerenciar suas coleções com eficiência e sem complicações.</p>
    
<h3> Fale conosco </h3>

<div class="form-container">
       
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" placeholder="Seu nome" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Seu e-mail" required>
            </div>
            <div class="form-group">
                <label for="message">Mensagem:</label>
                <textarea id="message" name="message" placeholder="Sua mensagem" required></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
    <script>

        document.addEventListener('DOMContentLoaded', function() {

            const menuToggle = document.getElementById('menu-toggle');
 
            menuToggle.addEventListener('click', function() {

                this.classList.toggle('active');

            });
            document.addEventListener('DOMContentLoaded', function() {
    var menuToggle = document.getElementById('menu-toggle');
    var navMenu = document.querySelector('.nav-menu');
    var menuItems = document.querySelectorAll('.nav-menu > ul > li');

    // Toggle menu visibility
    menuToggle.addEventListener('click', function(event) {
        event.stopPropagation(); // Evita que o clique no botão de menu se propague para o document
        this.classList.toggle('active');
        navMenu.classList.toggle('active');
    });

    // Toggle submenu visibility
    menuItems.forEach(function(item) {
        item.addEventListener('click', function(event) {
            event.stopPropagation(); // Evita que o clique no item de menu se propague para o document
            // Remove a classe 'active' de todos os itens
            menuItems.forEach(function(menuItem) {
                if (menuItem !== item) {
                    menuItem.classList.remove('active');
                }
            });
            // Alterna a classe 'active' do item clicado
            item.classList.toggle('active');
        });
    });

    // Hide menu when clicking outside
    document.addEventListener('click', function() {
        menuToggle.classList.remove('active');
        navMenu.classList.remove('active');
        menuItems.forEach(function(item) {
            item.classList.remove('active');
        });
    });

    // Prevent menu from closing when clicking inside it
    navMenu.addEventListener('click', function(event) {
        event.stopPropagation(); // Evita que o clique no menu se propague para o document
    });
});

    });

         
    </script>
 

</body>

</html>