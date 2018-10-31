<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ViaSat - Cadastro</title>
    <link type="text/css" rel="stylesheet" href="../bootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="../css/cadastro.css"/>
    <script type="text/javascript" src="bootstrap.js"></script>
</head>
<body>
    <div id="panelPrincipal">
        <div id="panelLogin">
           <img src="../imagens/login.png" id="imgBack" alt="login" height="85" width="85"/> 
           <p id="lblMsgLogin" class="lead">ViaSat | Registra-se</p>
           <form action="" method="post">
                <div class="form-group">
                    <label for="txtCpf" id="lblCpf">CPF ou CNPJ:</label>
                    <input type="text" name="txtCpf" class="form-control" id="txtCpf">
                </div>
                <div class="form-group">
                    <label for="txtlogin" id="lblLogin">Login:</label>
                    <input type="text" name="txtLogin" class="form-control" id="txtLogin" placeholder="ex. joaocarlos">
                </div>
                <div class="form-group">
                    <label for="txtSenha" id="lblSenha">Senha:</label>
                    <input type="password" name="txtSenha" class="form-control" id="txtSenha" placeholder="">
                    <small class="form-text text-muted">* Senha deve conter no mínimo 8 dígitos</small>
                </div>
                <div class="form-group">
                    <label for="txtConfSenha" id="lblConfSenha">Confirmar Senha:</label>
                    <input type="password" name="txtCpnfSenha" class="form-control" id="txtConfSenha" placeholder="">
                </div>
                <a href="./pages/painel.php"><button type="button" name="btnLogar" id="btnLogar" class="btn btn-info">Logar</button></a>
            </form>
        </div>   
    </div>    
</body>

</html>