<!DOCTYPE html>
<html>
<head>
    <title>Contato</title>
    <style>
        /* Definindo estilo global */
        body {
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.6;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        /* Container principal do e-mail */
        .container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Título principal */
        h1 {
            color: #4CAF50;
            text-align: center;
            font-size: 24px;
            margin-bottom: 30px;
        }

        /* Estilo dos parágrafos */
        p {
            margin: 12px 0;
            font-size: 16px;
            color: #555;
        }

        /* Labels em negrito */
        .label {
            font-weight: bold;
            color: #333;
        }

        /* Estilo do conteúdo ao lado do label */
        .content {
            margin-left: 10px;
            color: #333;
        }

        /* Estilo do rodapé */
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 14px;
            color: #777;
        }

        /* Estilo do logo */
        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo img {
            width: 150px; /* Ajusta o tamanho do logo */
            height: auto;
        }

        /* Estilo para o link (se necessário) */
        a {
            color: #4CAF50;
            text-decoration: none;
        }

    </style>
</head>
<body>
    <!-- Logo centralizado -->
    <div class="logo">
        <img src="https://img.freepik.com/vetores-premium/notificacao-de-mensagem-enviando-mensagem-envelope-de-correio-com-nova-mensagem-recebida-com-joaninha-de-plantas-de-flores-comunicacao-de-conceito-de-notificacao-de-boas-noticias-ilustracao-em-vetor-plana-dos-desenhos-animados_653547-243.jpg" alt="Logo">
    </div>

    <!-- Container com os dados de contato -->
    <div class="container">
        <h1>Informações de Contato</h1>

        <p><span class="label">Nome:</span><span class="content">{{ $dados['nome'] }}</span></p>
        <p><span class="label">Número:</span><span class="content">{{ $dados['numero'] }}</span></p>
        <p><span class="label">E-mail:</span><span class="content">{{ $dados['email'] }}</span></p>
        <p><span class="label">Preferência de Retorno:</span><span class="content">{{ $dados['como_prefere_retorno'] }}</span></p>
        <p><span class="label">Mensagem:</span><span class="content">{{ $dados['mensagem'] }}</span></p>

        <div class="footer">
            <p>Obrigado por entrar em contato conosco!</p>
        </div>
    </div>
</body>
</html>
