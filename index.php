<?php
// Arquivo PHP para incluir cabeçalhos ou outras partes dinâmicas, caso necessário
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo de Matheus Veiga</title>

    <style>
        /* Estilos gerais */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
        }

        /* Menu Lateral */
        #menu-lateral {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100%;
            background-color: #003366; /* Azul Escuro */
            color: white;
            padding-top: 20px;
        }

        #menu-lateral ul {
            list-style-type: none;
            padding: 0;
        }

        #menu-lateral ul li {
            padding: 15px;
            text-align: center;
        }

        #menu-lateral ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            display: block;
        }

        #menu-lateral ul li a:hover {
            background-color: #00599f; /* Azul Médio */
        }

        /* Conteúdo Principal */
        #conteudo-principal {
            margin-left: 250px;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        section {
            margin-bottom: 40px;
        }

        section h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #003366; /* Azul Escuro */
        }

        section p {
            font-size: 18px;
        }

        /* Seção de Introdução */
        #inicio {
            text-align: center;
            background-color: #006bb3; /* Azul Claro */
            color: white;
            padding: 100px 0;
        }

        #inicio h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        #inicio p {
            font-size: 24px;
        }

        /* Estilos de Transição */
        html {
            scroll-behavior: smooth;
        }

        /* Links */
        a {
            color: #006bb3;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- Menu Lateral -->
    <nav id="menu-lateral">
        <ul>
            <li><a href="#sobre-mim">Sobre Mim</a></li>
            <li><a href="#habilidades">Habilidades</a></li>
            <li><a href="#experiencia">Experiência</a></li>
            <li><a href="#contato">Contato</a></li>
        </ul>
    </nav>

    <!-- Conteúdo Principal -->
    <div id="conteudo-principal">
        <!-- Seção de Introdução -->
        <section id="inicio">
            <div class="introducao">
                <h1>Matheus Veiga</h1>
                <p>Desenvolvedor Full Stack | Entusiasta de Tecnologia</p>
            </div>
        </section>

        <!-- Seção Sobre Mim -->
        <section id="sobre-mim">
            <h2>Sobre Mim</h2>
            <p>Paulista vivendo em Florianópolis, apaixonado por tecnologia e inovação. Minha jornada começou na Faculdade de Tecnologia do Estado de São Paulo em 2019, sempre guiado pela curiosidade e pelo desejo de criar soluções que façam a diferença. Gosto de desafios, de resolver problemas e de aprender algo novo a cada dia. Além do trabalho, busco equilíbrio na vida, seja explorando a natureza ou cuidando do bem-estar. Acredito que a tecnologia tem o poder de transformar o mundo, e meu propósito é estar sempre em evolução para contribuir com essa mudança.</p>
        </section>

        <!-- Seção Habilidades -->
        <section id="habilidades">
            <h2>Principais Competências</h2>
            <ul>
                <li>Java, PHP, MySQL</li>
                <li>IT Integration</li>
                <li>Análise de Dados</li>
                <li>Integração de APIs (Telegram, Google, Meta, Bitrix, Rdstation)</li>
                <li>Automação de Processos</li>
                <li>Docker, AWS, Jenkins, Grafana</li>
                <li>Segurança de Dados (LGPD)</li>
                <li>Scrum e Kanban (Metodologias Ágeis)</li>
            </ul>
        </section>

        <!-- Seção de Experiência -->
        <section id="experiencia">
            <h2>Experiência Profissional</h2>
            <h3>SOMMA Investimentos - Software Engineer Mid Level</h3>
            <p><strong>Setembro 2024 - Presente</strong> - Florianópolis, SC (Híbrido)</p>
            <ul>
                <li>Desenvolvimento de microsserviços escaláveis em PHP.</li>
                <li>Consultoria estratégica para regras de negócio no mercado financeiro.</li>
                <li>Integração com APIs externas (Telegram, Google, Meta, etc.).</li>
                <li>Automação de processos e coleta de dados.</li>
            </ul>

            <h3>Evo Sistemas Inteligentes - Full Stack Software Engineer</h3>
            <p><strong>Agosto 2023 - Agosto 2024</strong> - Curitiba, PR (Híbrido)</p>
            <ul>
                <li>Desenvolvimento utilizando Java (Spring Boot), Hibernate, MySQL.</li>
                <li>Utilização de Docker e AWS (EC2, ECS, etc.).</li>
                <li>Automação com Jenkins, Grafana e Prometheus.</li>
            </ul>

            <h3>Veiga Software Development - Desenvolvedor Web Freelancer</h3>
            <p><strong>Maio 2020 - Julho 2023</strong> - São Paulo, SP (Remoto)</p>
            <ul>
                <li>Desenvolvimento de websites responsivos com HTML, CSS e JavaScript.</li>
                <li>Consultoria em SEO e otimização de performance.</li>
            </ul>
        </section>

        <!-- Seção de Contato -->
        <section id="contato">
            <h2>Contato</h2>
            <p>Email: <a href="mailto:matheus.veiga@example.com">matheus.veiga@example.com</a></p>
            <p>LinkedIn: <a href="https://www.linkedin.com/in/matheus-veiga-b1b68b192/" target="_blank">linkedin.com/in/matheus-veiga</a></p>
        </section>
    </div>

    <script>
        // Código JavaScript para navegação suave
        document.querySelectorAll('#menu-lateral a').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
