<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Login e Registro com HTML5 e CSS3</title>
    <link rel="stylesheet" type="text/css" href="stylelogin.css" />
</head>
<body>
    <div class="container">
        <a class="links" id="paracadastro"></a>
        <a class="links" id="paralogin"></a>
        <div class="content">
            <!-- FORMULÁRIO DE LOGIN -->
            <div id="login">
                <form method="post" action="login.php">
                    <h1>Login</h1>
                    <p>
                        <label for="email_login">Seu e-mail</label>
                        <input id="email_login" name="email_login" required="required" type="text" placeholder="ex. contato@htmlecsspro.com" />
                    </p>
                    <p>
                        <label for="senha_login">Sua senha</label>
                        <input id="senha_login" name="senha_login" required="required" type="password" placeholder="ex. senha" />
                    </p>
                    <p>
                        <input type="checkbox" name="manterlogado" id="manterlogado" value="" />
                        <label for="manterlogado">Manter-me logado</label>
                    </p>
                    <p>
                        <input type="submit" name="Cadastrar" value="Logar" />
                    </p>
                    <p class="link">
                        Ainda não tem conta?
                        <a href="#paracadastro">Cadastre-se</a>
                    </p>
                </form>
            </div>

            <!-- FORMULÁRIO DE CADASTRO -->
            <div id="cadastro">
                <form method="post" action="cadastro.php">
                    <h1>Cadastro</h1>
                    <p>
                        <label for="nome_cad">Seu nome</label>
                        <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="nome" />
                    </p>
                    <p>
                        <label for="email_cad">Seu e-mail</label>
                        <input id="email_cad" name="email_cad" required="required" type="email" placeholder="contato@htmlecsspro.com" />
                    </p>
                    <p>
                        <label for="senha_cad">Sua senha</label>
                        <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex. 1234" />
                    </p>
                    <p>
                        <input type="submit" name="Cadastrar" value="Cadastrar" />
                    </p>
                    <p class="link">
                        Já tem conta?
                        <a href="#paralogin">Ir para Login</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
