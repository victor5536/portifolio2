<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portifólio</title>

    <link rel="stylesheet" href="tools/fontawesome/css/all.css">
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>

    <div id="interface">

        <header class="cabecalho">

            <nav class="menu">

                <div class="logo">
                    <img src="imagens/logo.png" alt="LOGO" />
                </div>

                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Portifólio</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#">Restrito</a></li>
                </ul>

            </nav>

            <div class="titles">
                <div class="container-titles">
                    <h1 class="titulo">Entregando Serviços de Qualidade</h1>
                    <h1 class="subtitulo">Soluções de TI</h1>
                    <p class="paragrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus culpa, quis nisi blanditiis maiores aspernatur.</p>
                </div>

                <div class="socialIcons">
                    <a href="#" title="Visite nosso Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" title="Visite nosso Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" title="Visite nosso Linkedin"><i class="fab fa-linkedin"></i></a>
                    <a href="#" title="Visite nosso Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

        </header>

        <main id="corpo">
            <section class="servicos">

                <article class="servico">
                    <img src="imagens/service-design.svg" alt="Desenvolvimento WEB">
                    <h3 class="title-servico">Desenvolvimento WEB</h3>
                    <p class="text-servico">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis deleniti doloribus deserunt nam quisquam voluptatibus.</p>
                </article>
                <article class="servico">
                    <img src="imagens/service-hosting.svg" alt="WEB Hosting">
                    <h3 class="title-servico">Web Hosting</h3>
                    <p class="text-servico">Explicabo, soluta ad laudantium nihil tempore officiis doloribus. Quas culpa eaque assumenda maxime dolorum adipisci.</p>
                </article>
                <article class="servico">
                    <img src="imagens/service-social.svg" alt="Midias Sociais">
                    <h3 class="title-servico">Design</h3>
                    <p class="text-servico">Odit nostrum aperiam, vitae veniam architecto ab quas dignissimos, provident saepe rerum omnis, molestiae corporis!</p>
                </article>
                <article class="servico">
                    <img src="imagens/service-seo.svg" alt="Aplicações SEO">
                    <h3 class="title-servico">Aplicações SEO</h3>
                    <p class="text-servico">Labore, alias. Necessitatibus ea officiis quidem, laboriosam delectus, corrupti quia consectetur modi, molestias amet doloremque.</p>
                </article>
                <article class="servico">
                    <img src="imagens/service-cloud.svg" alt="Computação em Nuvem">
                    <h3 class="title-servico">Computação em Nuvem</h3>
                    <p class="text-servico">Nostrum tenetur corporis nobis laudantium laborum quo eius ullam excepturi labore nulla! Modi, itaque numquam?</p>
                </article>
                <article class="servico">
                    <img src="imagens/service-secure.svg" alt="Segurança de Dados">
                    <h3 class="title-servico">Segurança de Dados</h3>
                    <p class="text-servico">Fugiat sequi ducimus consequuntur, necessitatibus voluptatum voluptate excepturi doloribus ullam harum non aperiam recusandae consequatur.</p>
                </article>

            </section>

            <section class="portifolio">

                <h3 class="title-portifolio">Nosso Portifólio</h3>
                <p class="sub-title">Lorem ipsum dolor sit amet.</p>

                <div class="container-imagens">
                    <a href="#" class="img" style="background-image: url('imagens/product-1.jpg');">

                    </a>
                    <a href="#" class="img" style="background-image: url('imagens/product-2.jpg');">

                    </a>
                    <a href="#" class="img" style="background-image: url('imagens/product-3.jpg');">

                    </a>
                    <a href="#" class="img" style="background-image: url('imagens/product-4.jpg');">

                    </a>
                    <a href="#" class="img" style="background-image: url('imagens/product-5.jpg');">

                    </a>
                    <a href="#" class="img" style="background-image: url('imagens/product-6.jpg');">

                    </a>
                </div>

            </section>

            <section class="banner">

                <hgroup class="container-texto">

                    <h4 class="title-banner">Saiba mais sobre nossos Projetos</h4>

                    <p class="txt-banner">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod suscipit, accusamus voluptatem nostrum rerum aliquid fugit ab temporibus vero, corporis autem, dicta dolor! Deleniti, repellendus!</p>

                    <a href="#" class="btn-banner">Saiba mais</a>

                </hgroup>



            </section>

            <section class="sobre">

                

            </section>

            <section class="contato">

                <h3 class="title-contato">Fale conosco</h3>
                <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>

                <div class="container-contato">

                    <aside class="dados-contato">
                        <h4 class="title-aside">Endereço</h4>
                        <p class="txt-aside">Rua das Margaridas, S/Nº <br> Centro Manhuaçu/MG</p>

                        <h4 class="title-aside">Telefone</h4>
                        <p class="txt-aside">33 3331-3333</p>
                        <p class="txt-aside">33 9 8400-9999</p>

                        <h4 class="title-aside">E-Mail</h4>
                        <p class="txt-aside">contato@meusite.com.br</p>
                        <p class="txt-aside">faleconosco@meusite.com.br</p>
                    </aside>

                    <form action="" method="post">

                        <div class="line-form">
                            <input type="text" name="nome" id="nome" placeholder="Nome*" required />
                            <input type="email" name="email" id="email" placeholder="E-Mail" required />
                        </div>

                        <div class="line-form">
                            <input type="text" name="assunto" id="assunto" placeholder="Assunto" />
                        </div>
                        
                        <div class="line-form">
                            <textarea name="mensagem" id="mensagem" rows="7" placeholder="Escreva Sua Mensagem*" required></textarea>
                        </div>
                        
                        <button type="submit">Enviar mensagem</button>

                    </form>

                </div>

            </section>
            
        </main>

        <footer id="rodape">

            <div class="container-rodape">

                <section class="sobre">

                    <img src="imagens/logo.png" alt="logo">

                    <p class="txt-sobre">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti adipisci expedita repellendus voluptatum accusamus nesciunt natus recusandae veritatis ipsum, delectus fugit quo explicabo eius quod.</p>

                    <h4 class="title-sobre">Siga-nos</h4>
                    
                    <div class="social-icons">
                        <a href="#" title="Visite nosso Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" title="Visite nosso Facebook"><i class="fab fa-facebook"></i></a>
                        <a href="#" title="Visite nosso Linkedin"><i class="fab fa-linkedin"></i></a>
                        <a href="#" title="Visite nosso Instagram"><i class="fab fa-instagram"></i></a>
                    </div>

                </section>

                <section class="serviços">

                <h4 class="title-serviços">Serviços</h4>

                <ul>
                    <li><a href="#">Desenvolvimento Web</a></li>
                    <li><a href="#">WEB hosting</a></li>
                    <li><a href="#">Midias Sociais</a></li>
                    <li><a href="#">Aplicações SEO</a></li>
                    <li><a href="#">Computação em Nuvem</a></li>
                    <li><a href="#">Segurança de Dados</a></li>
                <ul>

                </section>

                <section class="contato">

                    <h4 class="title-contato">contatos</h4>

                    <p class="txt-contatos">Rua das Margaridas, S/Nº</p>
                    <p class="txt-contatos">33 9 8400-9999</p>
                    <p class="txt-contatos">contato@meusite.com.br</p>

                    <h4 class="title-contato">newsletter</h4>

                    <form acrion="" method="get">
                        <input type="email" name="news-email" id="news-email" placeholder="e-mail"/>
                        <button type="submit"><i class="fa-brands fa-telegram"></i></button>
                    </form>

                </section>

            </div>

            <p class="txt-creditos">João Victor Nunes &copy; 2025</p>

        </footer>

    </div>
    
</body>
</html>