<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">


    <!---SCRIPIT PARA ENVAR MENSAGEM PARA O GMAIL-->

</head>

<body>
    <nav class="navbar bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="navbar-content max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{url('assets/img/logo.png')}}" class="h-8" alt="Flowbite Logo">
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button style="background-color: #0B2F78;" type="button" class="text-white bg-orange-500 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-orange-400 dark:hover:bg-orange-600 dark:focus:ring-orange-500"><a href="#contato">Fale Conosco</a></button>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#" class="block py-2 px-3 text-white bg-orange-500 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#sobreNos" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Sobre nós</a>
                    </li>
                    <li>
                        <a href="#clientes" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Clientes</a>
                    </li>
                    <li>
                        <a href="#serviços" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Serviços</a>
                    </li>
                    <li>
                        <a href="#projetos" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Projetos</a>
                    </li>



                </ul>
            </div>
        </div>


    </nav>

    <div class="header-bg">
        <figure>
            <img class="imgHeader" src="{{url('assets/img/header.png')}}" alt="">
        </figure>
    </div>
    <div class="textHeader">
        <div>
            <p style="line-height: 4rem;">Melhor <span style="color: #eb6325;">Solucão</span> e ótimos <span style="color: #eb6325;">Negócios</span></p>

            <div>
                <p style="font-size: 14px;">Somos uma empresa de tecnologia especializada em atender às demandas de empresas de pequeno e médio porte Criamos uma solução de suporte de TI simples e definitiva para atender as empresas.</p>


            </div>
        </div>
    </div>
    <main>
        <section id="sobreNos">
            <div class="txtSobreNos">
                <h1>A melhor empresa de TI</h1>
                <p> A Sunset é composta por uma equipe de mais de 30 colaboradores certificados nas principais tecnologias do mercado, que trabalham utilizando plataformas avançadas de monitoramento, automação e gestão. Essa combinação de expertise e ferramentas de ponta nos permite oferecer soluções personalizadas e de alta qualidade.</p>
                <p>É graças a esse compromisso com a excelência e à nossa abordagem proativa que a Sunset se tornou sinônimo de qualidade e confiabilidade no atendimento ao cliente. Estamos dedicados a ajudar sua empresa a prosperar no ambiente digital, garantindo que suas necessidades de TI sejam atendidas de forma ágil e eficaz.
                </p>

                <button class="btnContato">
                    Entre em Contato
                </button>
            </div>
            <div class="sobreImg">
                <img style="width: 200px;height: 310px;" src="{{url('assets/img/story.png')}}" alt="image">
                <div>
                    <img style="width: 250px;" class="img" src="{{url('assets/img/quadrado1.jfif')}}" alt="image">
                    <img style="width: 250px;" class="img" src="{{url('assets/img/quadrado2.jfif')}}" alt="image">
                </div>

            </div>
        </section>

        <section id="clientes">
            <img src="{{url('assets/img/clientes.png')}}" alt="">

            <div class="containerConfiabilidade">
                <span>CONFIABILIDADE E SEGURANÇA</span>
                <div class="tittle">
                    <h2>Confira o que os nossos clientes dizem!</h2>
                    <p>Separamos alguns dos principais depoimentos que recebemos dos nossos clientes após iniciarmos os
                        trabalhos de <b>suporte em TI!</b></p>
                </div>

                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="cardd">
                                <div>
                                    <p>Rosa Parks-- Analista de sistemas</p>
                                </div>

                                <div>
                                    <p>Essa empresa mudou minha perspectiva sobre o mercado de softwares.</p>
                                </div>



                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cardd">
                                <div>
                                    <p>Rosa Ana-- Analista de sistemas</p>
                                </div>

                                <div>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa adipisci
                                        dignissimos commodi deserunt nisi quam.</p>
                                </div>



                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cardd">
                                <div>
                                    <p>Rosa Parks-- Analista de sistemas</p>
                                </div>

                                <div>
                                    <p>Essa empresa mudou minha perspectiva sobre o mercado de softwares.</p>
                                </div>



                            </div>
                        </div>
                        ...
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>

                <div class="containerBtn">
                    <button class="btnContato">
                        Venha ser um Cliente Sunset!
                    </button>
                </div>
            </div>
        </section>

        <section id="serviços">
            <h1>Nossos Serviços</h1>
            <div class="containerCards">
                <div class="cardServico">
                    <figure><img src="{{url('assets/img/app.png')}}" alt=""></figure>
                    <h2>Desenvolvimento de softwares</h2>
                    <p>Na Sunset, acreditamos que as melhores ideias merecem ganhar vida na palma da mão das pessoas. Especializados no desenvolvimento de aplicativos personalizados, nosso objetivo é entregar soluções tecnológicas que não apenas atendem às necessidades do seu negócio, mas também proporcionam experiências excepcionais aos usuários.</p>
                </div>
                <div class="cardServico">
                    <figure><img src="{{url('assets/img/app.png')}}" alt=""></figure>
                    <h2>Suporte Técnico</h2>
                    <p> Fornecemos assistência imediata através de conexões seguras, permitindo que nossos técnicos diagnostiquem e resolvam problemas sem a necessidade de deslocamento, economizando tempo e recursos.Implementamos um sistema ágil de gestão de problemas, monitorando e priorizando solicitações para garantir que as questões mais críticas sejam tratadas com urgência.</p>
                </div>
                <div class="cardServico">
                    <figure><img src="{{url('assets/img/app.png')}}" alt=""></figure>
                    <h2>Segurança da Informação</h2>
                    <p>No mundo digital de hoje, a segurança da informação se tornou uma prioridade essencial para empresas de todos os tamanhos. Com a crescente quantidade de dados gerados e armazenados, é fundamental proteger informações sensíveis contra ameaças cibernéticas, vazamentos e acessos não autorizados.</p>
                </div>
            </div>
        </section>



        <section id="projetos" class="section-nossos-projetos">

            <h2 class="titulo-nossos-projetos">Projetos da empresa sunset</h2>


            <div class="container-imagens-nossos-projetos">
                <div style="display: flex; flex-direction: column;">
                    <div class="container-duas-primeiras-imagens-nossos-projetos">
                        <img src="{{url('assets/img/projeto1.png')}}" class="imagem-nossos-projetos" />
                    </div>
                    <div class="container-duas-primeiras-imagens-nossos-projetos">
                        <img src="{{url('assets/img/projeto2.png')}}" class="imagem-nossos-projetos" />
                    </div>
                </div>
                <div style="display: flex; flex-direction: column; gap: 10px;">
                    <div class="container-do-meio-imagens-nossos-projetos">
                        <img src="{{url('assets/img/projeto6.jpeg')}}" class="imagem-nossos-projetos" />
                    </div>
                    <div class="container-do-meio-imagens-nossos-projetos">
                        <img src="{{url('assets/img/projeto8.jpg')}}" class="imagem-nossos-projetos" />
                    </div>
                </div>
               
                </div>
            </div>

        </section>
        <section id="parceiros">
            <h1>Empresas que confiam no nosso trabalho</h1>
            <div>
               
                <img src="{{url('assets/img/SevenCode - New Logo ofc .png')}}" alt="">
                <img style="width: 70px;" src="{{url('assets/img/Dynamo logo.png')}}" alt="">
                <img src="{{url('assets/img/chronos.png')}}" alt="">
            </div>
        </section>
        <section id="contato">
            <div class="containerForm">
                <div class="formDiv">
                    <form action="{{ route('enviar.formulario') }}" method="POST">
                    @csrf
                        <div style="display: flex; gap: 20px;">
                            <input type="text" name="nome" placeholder="O seu nome" required>
                            <input type="tel" name="numero" placeholder="Telefone/WhatsApp" required>
                        </div>
                        <input type="email" name="email" placeholder="Seu melhor email" required>

                        <select name="como_podemos_te_ajudar" required>
                            <option value="">Como nós podemos te ajudar?</option>
                            <option value="opcao1">Opção 1</option>
                            <option value="opcao2">Opção 2</option>
                            <option value="opcao3">Opção 3</option>
                        </select>

                        <select name="como_prefere_retorno" required>
                            <option value="">Como prefere nosso retorno?</option>
                            <option value="email">Email</option>
                            <option value="telefone">Telefone</option>
                        </select>

                        <textarea name="mensagem" placeholder="Descreva brevemente sua necessidade" required></textarea>

                        <button class="btnContato" type="submit">Solicitar Orçamento</button>
                    </form>
                </div>
            </div>
            </div>
            <div class="orcamento">
                <h1>Solicite um orçamento pelo formulário</h1>
                <p>Conte com a nossa equipe de especialistas que possui mais de 14 anos de experiência e junte-se a mais de 100 clientes.

                    Sunset, uma Empresa de TI com foco na Proatividade.</p>
                <p><b>Preencha o formulário que nós retornaremos o quanto antes!</b></p>
            </div>
        </section>
    </main>


    <footer style="background-color: #030E26;">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="" class="flex items-center">
                        <img src="{{url('assets/img/logo.png')}}" class="h-8 me-3" alt="FlowBite Logo" />

                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 style="color: #fff;" class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">mapa do site</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a style="color: #Fff;" href="https://flowbite.com/" class="hover:underline">Contato</a>
                            </li>
                            <li>
                                <a style="color: #Fff;" href="https://tailwindcss.com/" class="hover:underline">Clientes</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 style="color: #fff;" class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">siga-nos</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a style="color: #Fff;" href="https://github.com/themesberg/flowbite" class="hover:underline ">Instagram</a>
                            </li>
                            <li>
                                <a style="color: #Fff;" href="https://discord.gg/4eeurUVvTy" class="hover:underline">Linkedin</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 style="color: #fff;" class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a style="color: #Fff;" href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a style="color: #Fff;" href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span style="color: #Fff;" class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com/" class="hover:underline">Sunset</a>. Todos os direitos reservados
                </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>

                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>


                </div>
            </div>
        </div>
    </footer>


    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>