<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Data Norte Sistemas - Atendemos órgãos públicos. Se você tem a necessidade, nós temos a solução." />
    <title>Data Norte Sistemas</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <header>
        <nav class="nav-bar">
            <div class="logo">
                <a href="/"><img class="logo-imagem" src="../img/logo_datanorth.png"></a>
            </div>
            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="/" class="nav-link">Início</a></li>
                    <li class="nav-item"><a href="#conteudo-solucoes-titulo" class="nav-link">Soluções</a></li>
                    <li class="nav-item"><a href="#conteudo-empresa-titulo" class="nav-link">Empresa</a></li>
                    <li class="nav-item"><a href="#conteudo-clientes-titulo" class="nav-link">Clientes</a></li>
                    <li class="nav-item"><a href="#conteudo-formulariowpp-titulo" class="nav-link">Contato</a></li>
                    <li class="nav-item"><a href="#conteudo-representante-titulo" class="nav-link">Representantes</a>
                    </li>
                    <li class="nav-item"><a href="#conteudo-parceiros-titulo" class="nav-link"> Parceiros</a></li>
                    <li class="nav-item"><a href="#conteudo-areacliente-titulo" class="nav-link">Área do Cliente</a>
                    </li>
                </ul>
            </div>

            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img class="icon" src="../img/menu_white_36dp.svg"
                        alt=""></button>
            </div>
        </nav>
        <div class="mobile-menu">
            <ul>
                <li class="nav-item"><a href="/" class="nav-link">Início</a></li>
                <li class="nav-item"><a href="#conteudo-solucoes-titulo" class="nav-link">Soluções</a></li>
                <li class="nav-item"><a href="#conteudo-empresa-titulo" class="nav-link">Empresa</a></li>
                <li class="nav-item"><a href="#conteudo-clientes-titulo" class="nav-link">Clientes</a></li>
                <li class="nav-item"><a href="#conteudo-formulariowpp-titulo" class="nav-link">Contato</a></li>
                <li class="nav-item"><a href="#conteudo-representante-titulo" class="nav-link">Representantes</a></li>
                <li class="nav-item"><a href="#conteudo-parceiros-titulo" class="nav-link"> Parceiros</a></li>
                <li class="nav-item"><a href="#conteudo-areacliente-titulo" class="nav-link">Área do Cliente</a></li>
            </ul>
        </div>
    </header>

    <main class="conteudo">

        <!-- APRESENTAÇÃO -->
        <section class="conteudo-apresentacao">
            <div class="conteudo-apresentacao-escrito">
                <h1 class="conteudo-apresentacao-escrito-titulo">Data Norte Sistemas</h1>
                <h2 class="conteudo-apresentacao-escrito-subtitulo">Atendemos órgãos públicos. Se você tem a
                    necessidade,
                    nós temos a solução.</h2>
                <button type="button" class="conteudo-apresentacao-escrito-botao"
                    onClick="javascript:window.open('https://api.whatsapp.com/send?phone=556699916539&text=Ol%C3%A1%2C%20vim%20pelo%20site%20Data%20Norte%20Sistemas!', '_blank');">Fale
                    Conosco!</button>
            </div>
            <img class="conteudo-apresentacao-escrito-imagem" src="img/faleconosco.png">
        </section>

        <!-- SOLUCOES -->
        <section class="conteudo-solucoes-escrito-div">
            <h3 class="conteudo-solucoes-escrito-titulo-div" id="conteudo-solucoes-titulo">Soluções</h3>
        </section>
        <section class="conteudo-solucoes">
            <div class="conteudo-solucoes-bloco">
                <svg fill="white" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    class="conteudo-solucoes-imagem" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1.475 9C2.702 10.84 4.779 12.871 8 15c3.221-2.129 5.298-4.16 6.525-6H12a.5.5 0 0 1-.464-.314l-1.457-3.642-1.598 5.593a.5.5 0 0 1-.945.049L5.889 6.568l-1.473 2.21A.5.5 0 0 1 4 9H1.475ZM.879 8C-2.426 1.68 4.41-2 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C11.59-2 18.426 1.68 15.12 8h-2.783l-1.874-4.686a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8H.88Z" />
                </svg>
                <!-- <img class="conteudo-solucoes-imagem" src="img/heart-pulse-fill.svg"
                    style="background: white; fill: red;">-->
                <h3 class="conteudo-solucoes-subtitulo">Nêmesis Saúde</h3>
                <p class="conteudo-solucoes-paragrafo">Saúde pública com gestão e prestação de serviço de qualidade.</p>
            </div>

            <div class="conteudo-solucoes-bloco">
                <svg fill="white" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    class="conteudo-solucoes-imagem" viewBox="0 0 16 16">

                    <path
                        d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                </svg>
                <h3 class="conteudo-solucoes-subtitulo">Nemesis Educação</h3>
                <p class="conteudo-solucoes-paragrafo">Controle completo da educação pública: diário de classe, CENSO,
                    histórico, entre outros.</p>
            </div>

            <div class="conteudo-solucoes-bloco">
                <svg fill="white" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    class="conteudo-solucoes-imagem" viewBox="0 0 16 16">
                    <path
                        d="M8.06 6.5a.5.5 0 0 1 .5.5v.776a11.5 11.5 0 0 1-.552 3.519l-1.331 4.14a.5.5 0 0 1-.952-.305l1.33-4.141a10.5 10.5 0 0 0 .504-3.213V7a.5.5 0 0 1 .5-.5Z" />
                    <path
                        d="M6.06 7a2 2 0 1 1 4 0 .5.5 0 1 1-1 0 1 1 0 1 0-2 0v.332c0 .409-.022.816-.066 1.221A.5.5 0 0 1 6 8.447c.04-.37.06-.742.06-1.115V7Zm3.509 1a.5.5 0 0 1 .487.513 11.5 11.5 0 0 1-.587 3.339l-1.266 3.8a.5.5 0 0 1-.949-.317l1.267-3.8a10.5 10.5 0 0 0 .535-3.048A.5.5 0 0 1 9.569 8Zm-3.356 2.115a.5.5 0 0 1 .33.626L5.24 14.939a.5.5 0 1 1-.955-.296l1.303-4.199a.5.5 0 0 1 .625-.329Z" />
                    <path
                        d="M4.759 5.833A3.501 3.501 0 0 1 11.559 7a.5.5 0 0 1-1 0 2.5 2.5 0 0 0-4.857-.833.5.5 0 1 1-.943-.334Zm.3 1.67a.5.5 0 0 1 .449.546 10.72 10.72 0 0 1-.4 2.031l-1.222 4.072a.5.5 0 1 1-.958-.287L4.15 9.793a9.72 9.72 0 0 0 .363-1.842.5.5 0 0 1 .546-.449Zm6 .647a.5.5 0 0 1 .5.5c0 1.28-.213 2.552-.632 3.762l-1.09 3.145a.5.5 0 0 1-.944-.327l1.089-3.145c.382-1.105.578-2.266.578-3.435a.5.5 0 0 1 .5-.5Z" />
                    <path
                        d="M3.902 4.222a4.996 4.996 0 0 1 5.202-2.113.5.5 0 0 1-.208.979 3.996 3.996 0 0 0-4.163 1.69.5.5 0 0 1-.831-.556Zm6.72-.955a.5.5 0 0 1 .705-.052A4.99 4.99 0 0 1 13.059 7v1.5a.5.5 0 1 1-1 0V7a3.99 3.99 0 0 0-1.386-3.028.5.5 0 0 1-.051-.705ZM3.68 5.842a.5.5 0 0 1 .422.568c-.029.192-.044.39-.044.59 0 .71-.1 1.417-.298 2.1l-1.14 3.923a.5.5 0 1 1-.96-.279L2.8 8.821A6.531 6.531 0 0 0 3.058 7c0-.25.019-.496.054-.736a.5.5 0 0 1 .568-.422Zm8.882 3.66a.5.5 0 0 1 .456.54c-.084 1-.298 1.986-.64 2.934l-.744 2.068a.5.5 0 0 1-.941-.338l.745-2.07a10.51 10.51 0 0 0 .584-2.678.5.5 0 0 1 .54-.456Z" />
                    <path
                        d="M4.81 1.37A6.5 6.5 0 0 1 14.56 7a.5.5 0 1 1-1 0 5.5 5.5 0 0 0-8.25-4.765.5.5 0 0 1-.5-.865Zm-.89 1.257a.5.5 0 0 1 .04.706A5.478 5.478 0 0 0 2.56 7a.5.5 0 0 1-1 0c0-1.664.626-3.184 1.655-4.333a.5.5 0 0 1 .706-.04ZM1.915 8.02a.5.5 0 0 1 .346.616l-.779 2.767a.5.5 0 1 1-.962-.27l.778-2.767a.5.5 0 0 1 .617-.346Zm12.15.481a.5.5 0 0 1 .49.51c-.03 1.499-.161 3.025-.727 4.533l-.07.187a.5.5 0 0 1-.936-.351l.07-.187c.506-1.35.634-2.74.663-4.202a.5.5 0 0 1 .51-.49Z" />
                </svg>
                <h3 class="conteudo-solucoes-subtitulo">Scad Bioponto</h3>
                <p class="conteudo-solucoes-paragrafo">Controle de frequência completo com solução web para
                    acompanhamento em tempo real.</p>
            </div>
        </section>

        <!-- NOSSOS SERVIÇOS -->
        <section class="conteudo-nossosservicos-escrito-div">
            <h3 class="conteudo-nossosservicos-escrito-titulo-div" id="conteudo-nossosservicos-titulo">Nossos Serviços</h3>
        </section>
        <section class="conteudo-nossosservicos">
            <div class="conteudo-nossosservicos-bloco">
                <img class="conteudo-nossosservicos-imagem" src="img/nossosservicos/gestao-hospitalar.png">
                <h3 class="conteudo-nossosservicos-subtitulo">Gestão Hospitalar</h3>
            </div>
            <div class="conteudo-nossosservicos-bloco">
                <img class="conteudo-nossosservicos-imagem" src="img/nossosservicos/gestao-publica.png">
                <h3 class="conteudo-nossosservicos-subtitulo">Gestão Pública</h3>
            </div>
            <div class="conteudo-nossosservicos-bloco">
                <img class="conteudo-nossosservicos-imagem" src="img/nossosservicos/bioponto.png">
                <h3 class="conteudo-nossosservicos-subtitulo">Ponto Biométrico - Sistema de Controle para Ponto Biométrico</h3>
            </div>
            <div class="conteudo-nossosservicos-bloco">
                <img class="conteudo-nossosservicos-imagem" src="img/nossosservicos/regulacao.png">
                <h3 class="conteudo-nossosservicos-subtitulo">Central de Regulação - Central de Regulação</h3>
            </div>
            <div class="conteudo-nossosservicos-bloco">
                <img class="conteudo-nossosservicos-imagem" src="img/nossosservicos/reabilitação.png">
                <h3 class="conteudo-nossosservicos-subtitulo">Reabilitação</h3>
            </div>
            <div class="conteudo-nossosservicos-bloco">
                <img class="conteudo-nossosservicos-imagem" src="img/nossosservicos/Laboratorio.png">
                <h3 class="conteudo-nossosservicos-subtitulo">Laboratório</h3>
            </div>
            <div class="conteudo-nossosservicos-bloco">
                <img class="conteudo-nossosservicos-imagem" src="img/nossosservicos/controle-temperatura-1.png">
                <h3 class="conteudo-nossosservicos-subtitulo">Controle de Temperatura</h3>
            </div>
            <div class="conteudo-nossosservicos-bloco">
                <img class="conteudo-nossosservicos-imagem" src="img/nossosservicos/AIH.png">
                <h3 class="conteudo-nossosservicos-subtitulo">AIH - Faturamento AIH</h3>
            </div>
            <div class="conteudo-nossosservicos-bloco">
                <img class="conteudo-nossosservicos-imagem" src="img/nossosservicos/BPA.png">
                <h3 class="conteudo-nossosservicos-subtitulo">BPa- Faturamento BPa</h3>
            </div>
            <div class="conteudo-nossosservicos-bloco">
                <img class="conteudo-nossosservicos-imagem" src="img/nossosservicos/EsusLogo.png">
                <h3 class="conteudo-nossosservicos-subtitulo">E-SUS - Integração E-SUS</h3>
            </div>
            <div class="conteudo-nossosservicos-bloco">
                <img class="conteudo-nossosservicos-imagem" src="img/nossosservicos/horus.png">
                <h3 class="conteudo-nossosservicos-subtitulo">Hórus - Integração com Hórus</h3>
            </div>
            <div class="conteudo-nossosservicos-bloco">
                <img class="conteudo-nossosservicos-imagem" src="img/nossosservicos/tfd.png">
                <h3 class="conteudo-nossosservicos-subtitulo">TFD - Tratamento Fora do Domicílio</h3>
            </div>
            <div class="conteudo-nossosservicos-bloco">
                <img class="conteudo-nossosservicos-imagem" src="img/nossosservicos/odontograma.png">
                <h3 class="conteudo-nossosservicos-subtitulo">Odontograma</h3>
            </div>
            <div class="conteudo-nossosservicos-bloco">
                <img class="conteudo-nossosservicos-imagem" src="img/nossosservicos/prescricao-medica.png">
                <h3 class="conteudo-nossosservicos-subtitulo">Painel de Prescição</h3>
            </div>
            <div class="conteudo-nossosservicos-bloco">
                <img class="conteudo-nossosservicos-imagem" src="img/nossosservicos/pep-1024x539.png">
                <h3 class="conteudo-nossosservicos-subtitulo">PEP - Prontuário Eletrônico do Paciente</h3>
            </div>
            <div class="conteudo-nossosservicos-bloco">
                <img class="conteudo-nossosservicos-imagem" src="img/nossosservicos/aprazamento.png">
                <h3 class="conteudo-nossosservicos-subtitulo">Painel de Aprazamento</h3>
            </div>
            <div class="conteudo-nossosservicos-bloco">
                <img class="conteudo-nossosservicos-imagem" src="img/nossosservicos/senhas-removebg.png">
                <h3 class="conteudo-nossosservicos-subtitulo">Painel eletrônico de senhas</h3>
            </div>
            <div class="conteudo-nossosservicos-bloco">
                <img class="conteudo-nossosservicos-imagem" src="img/nossosservicos/bi.png">
                <h3 class="conteudo-nossosservicos-subtitulo">BI - Business Inteligence para gestão</h3>
            </div>
        </section>



        <!-- EMPRESA -->
        <section class="conteudo-empresa">
            <h3 class="conteudo-clientes-escrito-titulo-div" id="conteudo-empresa-titulo">Sobre a Empresa</h3>
            <p class="conteudo-empresa-paragrafo">Procuramos citar aqui algumas das maiores vantagens que você tem em
                escolher a <strong>Data Norte Sistemas</strong>, para utilizar de nossos <strong>Softwares</strong>.</p>
            <p class="conteudo-empresa-paragrafo">Buscamos suprir sua <strong>necessidade de informações
                    técnicas</strong> e muito
                mais, porém o mais importante e talvez o nosso maior diferencial seja que nossa equipe é formada por
                profissionais apaixonados pela profissão e isto transparece em nosso atendimento e estrutura que
                oferecemos a você. Junte-se a nós.</p>
            <p class="conteudo-empresa-paragrafo">Somos uma empresa relativamente jovem fundada em 1990, e que
                superou grandes obstáculos e aprendemos muito, nós continuamos a manter os investimentos e o
                crescimento. Apesar de existirem inúmeras empresas do mesmo segmento, a Data Norte é especial, vendemos
                qualidade de serviços e cada dia estamos aumentando nossa capacidade de atendê-los de maneira séria e
                planejada, por isso estamos aqui oferecendo nossos serviços por muitos anos e queremos você ao nosso
                lado nessa história de sucesso!</p>
            </div>
        </section>

        <!-- CLIENTES -->
        <section class="conteudo-clientes-escrito-div">
            <h3 class="conteudo-clientes-escrito-titulo-div" id="conteudo-clientes-titulo">Clientes</h3>
        </section>
        <section class="conteudo-clientes">
            <div class="conteudo-clientes-bloco">
                <img class="conteudo-clientes-imagem" src="img/logonovamonteverde.png">
                <h3 class="conteudo-clientes-subtitulo">Prefeitura Municipal de Nova Monte Verde</h3>
            </div>
            <div class="conteudo-clientes-bloco">
                <img class="conteudo-clientes-imagem" src="img/logoportoalegredonorte.png">
                <h3 class="conteudo-clientes-subtitulo">Prefeitura Municipal de Porto Alegre do Norte</h3>
            </div>
            <div class="conteudo-clientes-bloco">
                <img class="conteudo-clientes-imagem" src="img/logotesouro.png">
                <h3 class="conteudo-clientes-subtitulo">Prefeitura Municipal de Tesouro</h3>
            </div>
            <div class="conteudo-clientes-bloco">
                <img class="conteudo-clientes-imagem" src="img/logoconfresa.png">
                <h3 class="conteudo-clientes-subtitulo">Prefeitura Municipal de Confresa</h3>
            </div>
            <div class="conteudo-clientes-bloco">
                <img class="conteudo-clientes-imagem" src="img/logocisvp.png">
                <h3 class="conteudo-clientes-subtitulo">Consórcio Intermunicipal de Saúde da Região do Vale do Peixoto
                </h3>
            </div>
            <div class="conteudo-clientes-bloco">
                <img class="conteudo-clientes-imagem" src="img/logoconselhodacomunidadedesinop.png">
                <h3 class="conteudo-clientes-subtitulo">Conselho da Comunidade de Sinop</h3>
            </div>
            <div class="conteudo-clientes-bloco">
                <img class="conteudo-clientes-imagem" src="img/logosurgerymt.png">
                <h3 class="conteudo-clientes-subtitulo">Surgery MT</h3>
            </div>
            <div class="conteudo-clientes-bloco">
                <img class="conteudo-clientes-imagem" src="img/logoapiacas.png">
                <h3 class="conteudo-clientes-subtitulo">Prefeitura Municipal de Apiacás</h3>
            </div>
            <div class="conteudo-clientes-bloco">
                <img class="conteudo-clientes-imagem" src="img/logocanarana.png">
                <h3 class="conteudo-clientes-subtitulo">Prefeitura Municipal de Canarana</h3>
            </div>
            <div class="conteudo-clientes-bloco">
                <img class="conteudo-clientes-imagem" src="img/logocarlinda.png">
                <h3 class="conteudo-clientes-subtitulo">Prefeitura Municipal de Carlinda </h3>
            </div>
            <div class="conteudo-clientes-bloco">
                <img class="conteudo-clientes-imagem" src="img/logocolniza.png">
                <h3 class="conteudo-clientes-subtitulo">Prefeitura Municipal de Colniza</h3>
            </div>
            <div class="conteudo-clientes-bloco">
                <img class="conteudo-clientes-imagem" src="img/logogauchadonorte.png">
                <h3 class="conteudo-clientes-subtitulo">Prefeitura Municipal de Gaúcha do Norte</h3>
            </div>
            <div class="conteudo-clientes-bloco">
                <img class="conteudo-clientes-imagem" src="img/logohospitalregional.png">
                <h3 class="conteudo-clientes-subtitulo">Hospital Regional de Colíder</h3>
            </div>
            <div class="conteudo-clientes-bloco">
                <img class="conteudo-clientes-imagem" src="img/logohospitalregional.png">
                <h3 class="conteudo-clientes-subtitulo">Hospital Regional Saúde <br>Rondonópolis</h3>
            </div>
            <div class="conteudo-clientes-bloco">
                <img class="conteudo-clientes-imagem" src="img/logohospitalregional.png">
                <h3 class="conteudo-clientes-subtitulo">Hospital Regional de Sinop </h3>
            </div>
            <div class="conteudo-clientes-bloco">
                <img class="conteudo-clientes-imagem" src="img/logoitanhanga.png">
                <h3 class="conteudo-clientes-subtitulo">Prefeitura Municipal de Itanhangá</h3>
            </div>
            <div class="conteudo-clientes-bloco">
                <img class="conteudo-clientes-imagem" src="img/logocaceres.png">
                <h3 class="conteudo-clientes-subtitulo">Prefeitura Municipal de Cáceres</h3>
            </div>
            <div class="conteudo-clientes-bloco">
                <img class="conteudo-clientes-imagem" src="img/logopeixotodeazevedo.png">
                <h3 class="conteudo-clientes-subtitulo">Prefeitura Municipal de Peixoto de Azevedo</h3>
            </div>
            <div class="conteudo-clientes-bloco">
                <img class="conteudo-clientes-imagem" src="img/logopoxoreu.png">
                <h3 class="conteudo-clientes-subtitulo">Prefeitura Municipal de Poxoréu</h3>
            </div>
            <div class="conteudo-clientes-bloco">
                <img class="conteudo-clientes-imagem" src="img/logoquerencia.png">
                <h3 class="conteudo-clientes-subtitulo">Prefeitura Municipal de Querência</h3>
            </div>
            <div class="conteudo-clientes-bloco">
                <img class="conteudo-clientes-imagem" src="img/logotabapora.png">
                <h3 class="conteudo-clientes-subtitulo">Prefeitura Municipal de Tabaporã</h3>
            </div>
            <div class="conteudo-clientes-bloco">
                <img class="conteudo-clientes-imagem" src="img/logoterranovadonorte.png">
                <h3 class="conteudo-clientes-subtitulo">Prefeitura Municipal de Terra Nova do Norte</h3>
            </div>
            <div class="conteudo-clientes-bloco">
                <img class="conteudo-clientes-imagem" src="img/logosantaterezinha.png">
                <h3 class="conteudo-clientes-subtitulo">Prefeitura Municipal de Santa Terezinha</h3>
            </div>
            <div class="conteudo-clientes-bloco">
                <img class="conteudo-clientes-imagem" src="img/logosinop.png">
                <h3 class="conteudo-clientes-subtitulo">Prefeitura Municipal de Sinop</h3>
            </div>
            <div class="conteudo-clientes-bloco">
                <img class="conteudo-clientes-imagem" src="img/logoitauba.png">
                <h3 class="conteudo-clientes-subtitulo">Prefeitura Municipal de Itaúba</h3>
            </div>
            <div class="conteudo-clientes-bloco">
                <img class="conteudo-clientes-imagem" src="img/logocameradenossasenhoradolivramento.png">
                <h3 class="conteudo-clientes-subtitulo">Câmara Municipal de Nossa Senhora do Livramento</h3>
            </div>
        </section>

        <!-- FORMULÁRIO WHATSAPP -->
        <section>
            <div class="conteudo-formulariowpp">
                <h3 class="conteudo-formulariowpp-titulo" id="conteudo-formulariowpp-titulo">Formulário de Contato
                </h3>
                <form action="#" method="get" onsubmit="abrirWhatsapp()" id="whatsapp">
                    <input type="text" name="nome" id="nome" placeholder="Digite seu Nome" required><br>
                    <input type="text" name="telefone" id="telefone" placeholder="Seu Telefone" required><br>
                    <input type="email" name="email" id="email" placeholder="Seu Email" required><br>
                    <input type="text" name="municipio" id="municipio" placeholder="Digite o seu Município"
                        required><br>
                    <input type="text" name="unidade" id="unidade"
                        placeholder="Informe a Unidade (Caso tenha)."><br>
                    <textarea name="msg" id="msg" placeholder="Sua Solicitação" required></textarea><br>
                    <button class="conteudo-formulariowpp-escrito-botao" type="submit"><img
                            src="img/iconwhatsapp.png" width="40px"><span> Enviar para o
                            WhatsApp</span>
                    </button>
                </form>
            </div>
        </section>

        <!-- REPRESENTANTES -->
        <section class="conteudo-representante">
            <h3 class="conteudo-representante-escrito-titulo-div" id="conteudo-representante-titulo">Representantes
            </h3>
        </section>
        <section class="conteudo-representante">
            <img class="conteudo-representante-escrito-imagem" src="img/representante.png">
            <div class="conteudo-representante-escrito">
                <h1 class="conteudo-representante-escrito-titulo">Osvaldo Henrique</h1>
                <h2 class="conteudo-representante-escrito-subtitulo">• Cuiabá - MT (FILIAL)</h2>
                <a href="https://api.whatsapp.com/send?phone=5566996352746&text=Ol%C3%A1%2C%20vim%20pelo%20site%20Data%20Norte%20Sistemas!"
                    target="_blank">
                    <h2 class="conteudo-representante-escrito-subtitulo"><img src="img/iconwhatsapp.png"
                            width="40px"> (66) 99635-2746</h2>
                </a>
                <h2 class="conteudo-representante-escrito-subtitulo">• comercial@datanorte.com.br</h2>
            </div>
            <div class="conteudo-representante-escrito">
                <h1 class="conteudo-representante-escrito-titulo">Milton Nolasco</h1>
                <h2 class="conteudo-representante-escrito-subtitulo">• Colatina - ES (FILIAL)</h2>
                <a href="https://api.whatsapp.com/send?phone=5527999690821&text=Ol%C3%A1%2C%20vim%20pelo%20site%20Data%20Norte%20Sistemas!"
                    target="_blank">
                    <h2 class="conteudo-representante-escrito-subtitulo"><img src="img/iconwhatsapp.png"
                            width="40px"> (27) 99669-0821</h2>
                </a>
                <h2 class="conteudo-representante-escrito-subtitulo">• escolha1500@hotmail.com</h2>


            </div>
            <img class="conteudo-representante-escrito-imagem" src="img/representante.png">
        </section>

        <!-- PARCEIROS -->
        <section class="conteudo-parceiros-escrito-div">
            <h3 class="conteudo-parceiros-escrito-titulo-div" id="conteudo-parceiros-titulo">Parceiros</h3>
        </section>
        <section class="conteudo-parceiros">
            <div class="conteudo-parceiros-bloco">
                <img class="conteudo-parceiros-imagem" src="img/logosoft42.png">
                <h3 class="conteudo-parceiros-subtitulo">Soft42 - Sites e Sistemas para Corretores e Imobiliárias!
                </h3>
            </div>
            <div class="conteudo-parceiros-bloco">
                <img class="conteudo-parceiros-imagem" src="img/logoroxinhocorretagemdecafecolatina.png">
                <h3 class="conteudo-parceiros-subtitulo">Roxinho Corretagem de Café Colatina</h3>
            </div>
        </section>

        <!-- AREA DO CLIENTE -->
        <section class="conteudo-areadocliente-escrito-div">
            <h3 class="conteudo-areadocliente-titulo" id="conteudo-areacliente-titulo">Área do Cliente</h3>
        </section>
        <section class="conteudo-areadocliente">
            <div class="conteudo-areadocliente-bloco">
                <a href="https://www.datanortesistemas.com.br/tools/TeamViewerQS-idc6p9aiq2.zip" target="_blank">
                    <img class="conteudo-areadocliente-imagem" src="img/logoteamviewer.png">
                    <h3 class="conteudo-areadocliente-subtitulo">TeamViewer - Acesso Remoto
                    </h3>
                </a>
            </div>
            <div class="conteudo-areadocliente-bloco">
                <a href="https://www.datanortesistemas.com.br/tools/Ammy.zip" target="_blank">
                    <img class="conteudo-areadocliente-imagem" src="img/logoanydesk.png">
                    <h3 class="conteudo-areadocliente-subtitulo">AnyDesk - Acesso Remoto
                    </h3>
                </a>
            </div>
            <div class="conteudo-areadocliente-bloco">
                <a href="https://www.datanortesistemas.com.br/tools/Ammy.zip" target="_blank">
                    <img class="conteudo-areadocliente-imagem" src="img/logoammyyadmin.png">
                    <h3 class="conteudo-areadocliente-subtitulo">Ammyy Admin - Acesso Remoto
                    </h3>
                </a>
            </div>
        </section>

    </main>

    <footer class="rodape">
        <img class="rodape-imagem" src="img/logo_datanorth.png">

        <p class="rodape-paragrafo"><a
                href="https://api.whatsapp.com/send?phone=556699916539&text=Ol%C3%A1%2C%20vim%20pelo%20site%20Data%20Norte%20Sistemas!"
                target="_blank">Avenida das Sibipirunas, nº 3040, 1º Andar, Setor Residencial Sul, Sinop-MT,
                78.550-029.</a></p>
        <h3 class="rodape-titulo"> Horário de Atendimento: 07h00 às 11h05 e 13h00 às 17h10</h3>

    </footer>
</body>

</html>

<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="js/script.js"></script>
