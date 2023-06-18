<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="envioEmail.php" method="post" enctype="multipart/form-data">
        <div>
            <input type="text" name="nome" placeholder="Nome" required>
        </div>

        <div>
            <input type="email" name="email" placeholder="E-mail" required>
        </div>

        <div>
            <textarea name="mensagem" required></textarea>
        </div>

        <div>
            <input type="file" name="arquivo" accept="application/pdf" required>   
        </div>

        <input type="submit" name="enviar">
    </form>
</body>
</html>