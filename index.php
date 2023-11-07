<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Biblioteca</title>

    <link rel="stylesheet" integrity="<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    
    <header id="cabecalho" class="container">
        <div id="logotipo"> 
        <h1><img src="assets/img/logotipo.png" alt="BookMeNow" height="30"></h1>
        </div>
        <nav id="menu">
            <ul>
                <li><a href="#">Categoria</a></li>
                <li><a href="#">Sobre Nós</a></li>
                <li><a href="#">Contato</a></li>
                </ul>
        </nav>
        <div id="botaoTopo">
            <a href="#" class="btn-secundario">Login</a>
            <a href="#" class="btn-secundario">Registrar</a>
        </div>
    </header>

    <div id="banner">
        <div class="container">
            <h2>Explorando Mundos Literários</h2>
            <p>Descubra os tesouros de conhecimentos e Imaginação em nossa Biblioteca</p>

            <div id="formProcurar">
                <form action="pesquisar.php"  method="get">
                    <i class="fa-solid fa-magnifying-glass"></i>

                    <input type="text" name="q" placeholder="O que você está procurando?">

                    <button type="submit">Procurar</button>

                </form>
            </div>
        </div>
    </div>

    <main class="container">
        <section id="LivrosPopulares">
            <div class="bloco-titulo">
                <div class="titulo">
                    <h2>Livros Populares</h2>
                    <a href="#">ver todos ></a>
                </div>

                <p>Descubra nossos livros mais populares</p>
            </div>

            <div class="lista-livro">
                <div class="card-livro">
                    <img src="assets/img/livro-css.png" alt="CSS">
                    <h3>CSS Grid layour: Criando layout Profissionais</h3>
                </div>

                <div class="card-livro">
                    <img src="assets/img/livro-html.png" alt="HTML e CSS">
                    <h3>HTML e CSS: Guia Prático</h3>
                </div>
            </div>

            <div class="lista-livro">
                <div class="card-livro">
                    <img src="assets/img/livro-css.png" alt="CSS">
                    <h3>CSS Grid layour: Criando layout Profissionais</h3>
                </div>

                <div class="card-livro">
                    <img src="assets/img/livro-html.png" alt="HTML e CSS">
                    <h3>HTML e CSS: Guia Prático</h3>
                </div>
            </div>

            <div class="lista-livro">
                <div class="card-livro">
                    <img src="assets/img/livro-css.png" alt="CSS">
                    <h3>CSS Grid layour: Criando layout Profissionais</h3>
                </div>

                <div class="card-livro">
                    <img src="assets/img/livro-html.png" alt="HTML e CSS">
                    <h3>HTML e CSS: Guia Prático</h3>
                </div>
            </div>

            <div class="lista-livro">
                <div class="card-livro">
                    <img src="assets/img/livro-css.png" alt="CSS">
                    <h3>CSS Grid layour: Criando layout Profissionais</h3>
                </div>

                <div class="card-livro">
                    <img src="assets/img/livro-html.png" alt="HTML e CSS">
                    <h3>HTML e CSS: Guia Prático</h3>
                </div>
            </div>

        </section>
    </main>

    <footer id="rodape">
        <div class="container">
            <div class="bloco-rodape">
                <h2>Categorias</h2>
                <ul>
                    <li><a href="#">Sobre Nós</a></li>
                    <li><a href="#">Contatos</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Política de Privacidade</a></li>
                </ul>
            </div>

            <div class="bloco-rodape">
                <h2>Contatos</h2>
                <ul>
                    <li>Paraiba, 125</li>
                    <li>(14) 9999-9999</li>
                    <li>contato@bookmenow.com.br</li>
                </ul>
            </div>

            <div 0class="bloco-rodape">
                <h2>Redes Sociais</h2>
                <ul>
                    <li>Icone Facebook</li>
                    <li>Icone Instagram</li>
                </ul>
            </div>
        </div>

        <div id="copyright">
            &copy; 2023- Todos os direitos são reservados - Desenvolvido por lucas
        </div>
    </footer>
    <script src="assets/js/main.js"> </script>
</body>
</html>