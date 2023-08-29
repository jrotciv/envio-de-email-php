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
            .container-email {
                /* display: flex;
                flex-direction: column; 
                line-height: 0;*/
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                background-color: #185B32;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }
            .logo {
                width: 200px;
                margin-bottom: 20px;
            }
            h1 {
                color: #f9f9f9;
                font-size: 24px;
            }
            h2 {
                color: #f9f9f9;
                font-size: #f9f9f9;
            }
            p {
                color: #f9f9f9;
                font-size: 16px;
                line-height: 1.5;
            }
            .qrcode{
                align-self: center;
            }
        </style>
    </head>
    <body>
        <div class="container-email">
            <img class="logo" src="cid:logo" alt="logo">
            <h1>Informações do formulário<h1>
            <h2>Nome do cliente: ' . $nome . '</h2>
            <h2>Email: ' . $email . '</h2>
            <p>Mensagem: ' . $mensagem . '</p>
            <img class="qrcode" src="cid:qrcode" alt="QRcode">
        </div>
    </body>
    </html>';

    return $body;
}
?>