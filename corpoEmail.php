<?php 
function corpoEmail($nome, $email, $mensagem) {
    $body = '
    <html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f9f9f9;
                max-width: 70%;
            }
            h1 {
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
        <h1>Informações do formulário<h1>
        <h2>Nome do cliente: ' . $nome . '</h2>
        <h2>Email: ' . $email . '</h2>
        <p>' . $mensagem . '</p>
    </body>
    </html>';

    return $body;
}
?>