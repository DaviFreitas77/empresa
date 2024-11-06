<!DOCTYPE html>
<html>
<head>
    <title>Contato</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.6;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #4CAF50;
            text-align: center;
        }
        p {
            margin: 10px 0;
        }
        .label {
            font-weight: bold;
            color: #555;
        }
        .content {
            margin-left: 10px;
            color: #333;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Novo Contato</h1>
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
