<?php include_once 'include/infos.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO Dinâmico -->
    <title><?php echo $site_config['nome_cliente'] . " | " . $site_config['segmento']; ?></title>
    <meta name="description" content="<?php echo $site_config['descricao_seo']; ?>">
    <meta name="keywords" content="<?php echo $site_config['keywords']; ?>">
    <meta name="theme-color" content="<?php echo $site_config['cor_tema']; ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo $site_config['favicon']; ?>">

    <!-- CSS Compilado -->
    <link rel="stylesheet" href="style/css/style.css">
    
    <!-- CDNS -->
    <?php include_once 'include/cdns.php'; ?>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="img/logo-raquel.png" alt="Logo Raquel Valença" class="img-fluid" style="max-height: 36px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#sobre-mim">Sobre mim</a></li>
                        <li class="nav-item"><a class="nav-link" href="#especialidades">Especialidades</a></li>
                        <li class="nav-item"><a class="nav-link" href="#atendimentos">Atendimento</a></li>
                        <?php /* ?>
                        <li class="nav-item"><a class="nav-link" href="#feedbacks">Feedbacks</a></li>
                        <?php */ ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>

        <!-- Seção 1: Hero -->
        <section id="hero">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content" data-aos="fade-right">
                            <div class="infos-raquel">
                                <h1>Raquel Valença</h1>
                                <span class="psicologa-tag">PSICÓLOGA - GESTALT-TERAPEUTA | CRP 19/4302</span>
                            </div>
                            <p>Atendimento humanizado através da Gestalt-terapia com apoio profissional para sua jornada de autoconhecimento, de forma presencial ou online.</p>
                            <a href="<?php echo getWhatsLink($contatos); ?>" target="_blank" class="btn btn-hero">
                                <i class="bi bi-whatsapp"></i> AGENDAR CONSULTA
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-img-container text-center" data-aos="fade-left">
                            <img src="img/galeria/foto-raquel-hero.png" alt="Raquel Valença" class="img-fluid relative">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção 2: Bg-Message -->
        <section id="bg-message">
            <div class="container">
                <div class="glass-card" data-aos="zoom-in">
                    <p> “O terapeuta não é aquele que cura, é aquele que cuida. E quando a pessoa se sente cuidada, ela se cura.” - Jorge Ponciano</p>
                </div>
            </div>
        </section>

        <!-- Seção 3: Sobre Mim -->
        <section id="sobre-mim">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="about-img-container" data-aos="fade-right">
                            <img src="img/galeria/foto-raquel-sobre.png" alt="Sobre Raquel Valença" class="img-fluid relative">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="about-content" data-aos="fade-left">
                            <h2 class="section-title">Sobre mim</h2>
                            <p class="quote">“O florescer através do autoconhecimento”</p>
                            <div class="about-text">
                                <p>Olá, sou Raquel de Souza Valença Oliveira. Minha trajetória na Psicologia começou na Universidade Tiradentes (UNIT), onde me graduei entre 2017 e 2021. Desde cedo, entendi que a clínica é um espaço de acolhimento e transformação, o que me levou a buscar uma especialização em Gestalt-terapia.</p>
                                <p>Com experiência em atendimentos individuais e sociais — passando por instituições como o CRAS e Unidades Básicas de Saúde — hoje atuo como Psicóloga Clínica Particular.</p>
                                <p>Acredito que, assim como os girassóis buscam a luz para crescer, cada pessoa possui uma força interna voltada para o equilíbrio. Meu papel é caminhar ao seu lado no "aqui e agora", utilizando a Gestalt-Terapia para ajudar você a reencontrar sua própria essência e florescer.</p>
                                <ul class="about-list">
                                    <li><strong>Formação:</strong> Pós-graduação em Gestalt-Terapia (2022 - 2024).</li>
                                    <li><strong>Experiência:</strong> Atendimento clínico humanizado focado em questões relacionais e bem-estar emocional.</li>
                                    <li><strong>Localização:</strong> Atendimentos presenciais em Aracaju - SE e suporte online para todo o Brasil.</li>
                                </ul>
                                <a href="<?php echo getWhatsLink($contatos); ?>" target="_blank" class="btn btn-hero mt-4">
                                    <i class="bi bi-whatsapp"></i> AGENDAR CONSULTA
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção 4: Especialidades -->
        <section id="especialidades">
            <div class="container">
                <h2 class="section-title" data-aos="fade-up">Especialidades</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="specialty-card" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-icon">
                                <i class="bi bi-people"></i>
                            </div>
                            <h3>Adolescentes</h3>
                            <p>Suporte especializado para os desafios da adolescência, auxiliando na construção da identidade e regulação emocional.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="specialty-card" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            <h3>Adultos</h3>
                            <p>Acompanhamento focado no desenvolvimento pessoal, lidando com ansiedade, questões profissionais e relacionais.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="specialty-card" data-aos="fade-up" data-aos-delay="300">
                            <div class="card-icon">
                                <i class="bi bi-person-heart"></i>
                            </div>
                            <h3>Idosos</h3>
                            <p>Acolhimento na maturidade, trabalhando a ressignificação de vivências e o bem-estar nesta fase da vida.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção 5: Atendimentos -->
        <section id="atendimentos">
            <div class="container">
                <!-- Abas Online/Presencial conforme o design -->
                <div class="row justify-content-center mb-5">
                    <div class="col-auto">
                        <div class="btn-group-toggle" data-aos="fade-up">
                            <button class="btn btn-toggle active" id="btn-online">Online</button>
                            <button class="btn btn-toggle" id="btn-presencial">Presencial</button>
                        </div>
                    </div>
                </div>

                <div id="content-online" class="atendimento-content" data-aos="fade-up">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h3>Acolhimento e cuidado, onde você estiver.</h3>
                            <p>A psicoterapia online oferece a flexibilidade necessária para o seu dia a dia, sem abrir mão do sigilo e da profundidade do encontro terapêutico. Através de videochamadas seguras, criamos um espaço de fala e escuta focado no seu "aqui e agora".</p>
                            <ul class="about-list">
                                <li><strong>Praticidade:</strong> Economia de tempo e deslocamento.</li>
                                <li><strong>Acessibilidade:</strong> Suporte profissional para brasileiros em qualquer lugar do mundo.</li>
                                <li><strong>Segurança:</strong> Plataformas que garantem o sigilo profissional absoluto.</li>
                            </ul>
                            <a href="<?php echo getWhatsLink($contatos); ?>" target="_blank" class="btn btn-hero mt-4">
                                <i class="bi bi-whatsapp"></i> AGENDAR CONSULTA
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <div class="atendimento-img-container">
                                <img src="img/galeria/foto-raquel-online.png" alt="Atendimento Online" class="img-fluid relative">
                            </div>
                        </div>
                    </div>
                </div>

                <div id="content-presencial" class="atendimento-content d-none" data-aos="fade-up">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="atendimento-img-container">
                                <img src="img/galeria/foto-raquel-presencial.png" alt="Atendimento Presencial" class="img-fluid relative">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3>Acolhimento e presença em Aracaju.</h3>
                            <p>Um espaço seguro para o encontro genuíno e o trabalho terapêutico face a face.</p>
                            <div class="location-card mt-4">
                                <h4><i class="bi bi-geo-alt"></i> Farolandia</h4>
                                <p>Atendimento presencial em Aracaju, em ambiente acolhedor e profissional.</p>
                            </div>
                            <a href="<?php echo getWhatsLink($contatos); ?>" target="_blank" class="btn btn-hero mt-4">
                                <i class="bi bi-whatsapp"></i> AGENDAR CONSULTA
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php /* ?>
        <!-- Seção 6: Feedbacks -->
        <section id="feedbacks">
            <div class="container">
                <h2 class="section-title" data-aos="fade-up">Feedbacks</h2>
                <div class="swiper feedback-carousel" data-aos="fade-up">
                    <div class="swiper-wrapper">
                        <!-- Itens do carrossel -->
                        <div class="swiper-slide">
                            <div class="feedback-item">
                                <p class="feedback-text">"Excelente profissional, muito atenciosa e humana no atendimento."</p>
                                <span class="feedback-author">- Paciente</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="feedback-item">
                                <p class="feedback-text">"Me ajudou muito no meu processo de autoconhecimento."</p>
                                <span class="feedback-author">- Paciente</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <?php */ ?>
    </main>

    <footer id="contato">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- Logo à esquerda -->
                <div class="col-md-auto text-center text-md-start mb-3 mb-md-0">
                    <img src="img/logo-raquel.png" alt="Raquel Valença" style="max-height: 40px; filter: brightness(0) invert(1);">
                </div>
                
                <!-- Copyright centralizado -->
                <div class="col-md text-center mb-3 mb-md-0">
                    <p class="mb-0">&copy; 2026 Raquel Valença Psicóloga. Todos os direitos reservados.</p>
                </div>

                <!-- Redes sociais à direita -->
                <div class="col-md-auto text-center text-md-end">
                    <div class="social-links">
                        <a href="<?php echo $contatos['instagram']; ?>" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="<?php echo getWhatsLink($contatos); ?>" target="_blank"><i class="bi bi-whatsapp"></i></a>
                        <a href="mailto:<?php echo $contatos['email']; ?>"><i class="bi bi-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <?php include_once 'include/scripts.php'; ?>
    <script>
        // Lógica simples para alternar entre Online e Presencial
        document.getElementById('btn-online').addEventListener('click', function() {
            document.getElementById('content-online').classList.remove('d-none');
            document.getElementById('content-presencial').classList.add('d-none');
            this.classList.add('active');
            document.getElementById('btn-presencial').classList.remove('active');
        });
        document.getElementById('btn-presencial').addEventListener('click', function() {
            document.getElementById('content-presencial').classList.remove('d-none');
            document.getElementById('content-online').classList.add('d-none');
            this.classList.add('active');
            document.getElementById('btn-online').classList.remove('active');
        });
    </script>
</body>
</html>
