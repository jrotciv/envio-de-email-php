<?php 
function corpoEmail($nome, $email, $mensagem) {
    $body = '
    <html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f9f9f9;
            }
            .container {
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                background-color: #ffffff;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }
            h1 {
                color: #ff0000;
                font-size: 24px;
                margin-bottom: 30px;
            }
            h2 {
                color: #ff0000;
                font-size: 20px;
                margin-bottom: 20px;
            }
            p {
                font-size: 16px;
                line-height: 1.5;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Informações do formulário<h1>
            <h2>Nome do cliente: ' . $nome . '</h2>
            <h2>Email: ' . $email . '</h2>
            <p>Mensagem: ' . $mensagem . '</p>
        </div>
    </body>
    </html>';

    return $body;
}
?>