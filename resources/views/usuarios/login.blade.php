<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <form action="/fazer-login" method="post">
        <input type="text" name="login" placeholder="Login" required>
        <input type="text" name="senha" placeholder="Senha" required>
        <button>Entrar</button>
        @csrf
    </form>

</body>
</html>