<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Pagina Inicial</title>
    <link type="text/css" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="./pages/css/login.css"/>
    <script type="text/javascript" src="./pages/bootstrap.js"></script>
</head>
<body>
        
    <div class="container-fluid" id="panelPrincipal">
        <div id="panelLogin">
           <img src="./pages/imagens/login.png" id="imgBack" alt="login" height="85" width="85"/> 
           <p id="lblMsgLogin" class="lead">ViaSat | Acessar o Sistema</p>
           <form>
                <div class="form-group">
                    <label for="txtlogin" id="lblLogin">Login:</label>
                    <input type="text" name="txtLogin" class="form-control" id="txtLogin" placeholder="informe o Login">
                </div>
                <div class="form-group">
                    <label for="txtSenha" id="lblSenha">Senha:</label>
                    <input type="password" name="txtSenha" class="form-control" id="txtSenha" placeholder="Informe a Senha">
                    <small class="form-text text-muted"><a class="lblEsqueceu" href="esqueceuSenha.php">Esqueçeu a senha ?</a></small>
                </div>
                <a href="./pages/painel.php"><button type="button" name="btnLogar" id="btnLogar" class="btn btn-info" >Logar</button></a>
            </form>
            <div id="cadastroPainel">
                <a class="lblCadastro" href="./pages/cadastro/cadastro.php">Registrar-se</a>
            </div>
        </div>   
    </div>
    <div id="footer">
        <p id="copyRight" class="lead">Copyright © 2018 Jefferson Sabino e Gabriel Martins (GM7 Design)</p>
    </div>
</body>

</html>