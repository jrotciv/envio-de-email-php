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
                    font-size: 18px;
                }
                p {
                    color: #f9f9f9;
                    font-size: 16px;
                    line-height: 1.5;
                }
                .qrcode {
                    display: block;
                    margin: 20px auto;
                }
            </style>
        </head>
        <body>
            <table class="container-email" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="100%"> <!-- Largura fixa de 600px -->
                        <img class="logo" src="cid:logo" alt="logo">
                        <h1>Informações do formulário</h1>
                        <h2>Nome do cliente: ' . $nome . '</h2>
                        <h2>Email: ' . $email . '</h2>
                        <p>Mensagem: ' . $mensagem . '</p>
                        <p>Aqui está mais texto no corpo do e-mail para torná-lo mais longo. Você pode adicionar todo o conteúdo que desejar nesta seção para preencher o corpo do e-mail.</p>
                        <img class="qrcode" src="cid:qrcode" alt="QRcode">
                    </td>
                </tr>
            </table>
        </body>
    </html>
';

    return $body;
}
?>