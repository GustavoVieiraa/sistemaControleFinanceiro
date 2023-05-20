<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../sistemaControleFinanceiro/styles/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>myFinances</title>
</head>
<body>
    <div class="menu-login">
        <div class="esquerda-login">
            <h1>Registre-se<br> E controle suas finanças de uma maneira mais prática e eficaz.</h1>
            <img style="width: 300px;" class="esquerda-login-imagem" src="../sistemaControleFinanceiro/styles/money.svg" alt="dinheiro-dinamico">
            <button class="btn-registrar" onclick="teste()">Registrar</button>
        </div>
        <div class="direita-login">
            <div class="card-login">
                <h1>myFinances</h1>
                <div class="textField">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" id="usuario" placeholder="Usuário">
                </div>
                <div class="textField">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Senha">
                </div>
                <button class="btn-login">Acessar</button>
                <button class="btn-registrar-mobile">Registrar</button>
            </div>
        </div>
    </div>
    <section class="box-registro">
        <div class="fechar">&times;</div>
        <div class="circle">
            <span class="registro-head"></span>
            <span class="registro-body"></span>
        </div>

        <div class="registrar-box">
            <div>
                <input type="email" name="email" id="email" required>
                <label for="email">Email</label>
            </div>

            <div>
                <input type="text" name="primeiro_nome" id="primeiro_nome" required>
                <label for="primeiro_nome">Primeiro nome</label>
            </div>
            <div>
                <input type="text" name="sobrenome" id="sobrenome" required>
                <label for="sobrenome">Sobrenome</label>
            </div>

            <div>
                <input type="password" name="senha" id="senha" required>
                <label for="senha">Senha</label>
            </div>
            <button class="btnEnviar" onclick="teste()">Cadastrar</button>
        </div>
    </section>
    <script src="js/script.js"></script>
</body>
</html>