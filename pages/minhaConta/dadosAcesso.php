<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Viasat - Dados de Acessos</title>
    
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/dadosAcesso.css">
    <!-- Font Awesome JS -->
    <script defer src="../solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="../fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <!--<h3>Bootstrap Sidebar</h3>-->
                <img class="logomenu" src="../imagens/logo.png" height="105" width="130"/>
            </div>
            <!--Inicio menu lateral--> 
            <ul class="list-unstyled components">
                <li id="menuInicialBox">
                    <a href="../painel.php">Inicio</a>
                </li>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Minha Conta</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="dadosAcesso.php">Meus Dados</a>
                        </li>
                        <li>
                            <a href="meuServicos.php">Meu Serviço</a>
                        </li>
                        <li>
                            <a href="../Fatura.pdf">Contrato</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Finaneiro</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Faturas</a>
                        </li>
                        <li>
                            <a href="#">Comprovantes</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Suporte</a>
                </li>
            </ul>
            <!--termino do menu lateral-->
        </nav>
        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu Principal</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                               <p class="nav-link">Oi, Jefferson Sabino Brito</p>
                            </li>
                            <li class="nav-item">
                                <p class="nav-link"><a href="#">Sair</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id="dados1">
                <div id="tituloMeusDados">
                    <h5 id="tituloMeusDados2">Meus Dados</h5>
                </div>
                <div class="container-fluid">
                    <div id="tituloDadosGeral">
                        <div class="tituloDados">
                            <h6 class="DadosA2">Dados de Acesso</h6>
                            <hr style="background-color:#ddd;"/>
                        </div>
                        <form action="">
                            <p style="float:right; font-size:13px;">(*) campos obrigatórios</p>
                            <div class="form-group">
                                <label for="txtEmail" id="lblEmail">* Email:</label>
                                <input type="text" class="form-control"  name="txtEmail" id="txtEmail" value="jeffersoncbmtt@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="txtSenha" id="lblSenha">* Senha:</label>
                                <input type="password" class="form-control"  name="txtSenhaC" id="txtSenha" value="123456">
                            </div>
                            <div class="form-group">
                                <label for="txtSenhaC" id="lblSenhC">* Confirmar Senha:</label>
                                <input type="password" class="form-control" name="txtSenhaC" id="txtSenhaC" value="123456">
                            </div>
                            <a href="#"><button type="button" class="btn btn-danger" name="btnAlterar" id="btnAlterar" >Salvar Alterações</button></a>
                        </form>
                    </div>
                    <div id="tituloEnderecoGeral" >
                        <div class="tituloDados">
                            <h6 class="DadosA2">Endereço</h6>
                            <hr style="background-color:#ddd;"/>
                        </div>
                        <form>
                            <div class="form-group">
                                <label for="txtCEP" id="lblCEP">CEP:</label>
                                <input type="text" class="form-control"  name="txtCEP" id="txtCEP" value="21361-132" disabled>
                            </div>
                            <div class="form-group">
                                <label for="txtCidade" id="lblCidade">Cidade:</label>
                                <input type="text" class="form-control"  name="txtCidade" id="txtCidade" value="Rio de Janeiro"  disabled>
                            </div>
                            <div class="form-group">
                                <label for="txtUF" id="lblUF">UF:</label>
                                <input type="text" class="form-control" name="txtUF" id="txtUF" value="RJ"  disabled>
                            </div>
                            <div class="form-group">
                                <label for="txtBairro" id="lblBairro">Bairro:</label>
                                <input type="text" class="form-control"  name="txtBairro" id="txtBairro" value="Vaz Lobo"  disabled>
                            </div>
                            <div class="form-group">
                                <label for="txtComplemento" id="lblComplemento">Complemento:</label>
                                <input type="text" class="form-control"  name="txtComplemento" id="txtComplemento" value="Casa"  disabled>
                            </div>
                            <div class="form-group">
                                <label for="txtEndereco" id="lblEndereco">Endereço:</label>
                                <input type="text" class="form-control"  name="txtEndereco" id="txtEndereco" value="Av.Monsenhor Felix"  disabled>
                            </div>
                            <div class="form-group">
                                <label for="txtNumero" id="lblNumero">Número:</label>
                                <input type="text" class="form-control"  name="txtNumero" id="txtNumero" value="142"  disabled>
                            </div>
                        </form>
                    </div>
                    <div id="tituloDadosCad" >
                        <div class="tituloDados">
                            <h6 class="DadosA2">Dados Cadastrais</h6>
                            <hr style="background-color:#ddd;"/>
                        </div>
                        <form>
                            <div class="form-group">
                                <label for="txtNome" id="lblNome">Nome Completo:</label>
                                <input type="text" class="form-control"  name="txtNome" id="txtNome" value="Jefferson Sabino Brito" disabled>
                            </div>
                            <div class="form-group">
                                <label for="txtCPF" id="lblCPF">CPF ou CNPJ:</label>
                                <input type="text" class="form-control"  name="txtCPF" id="txtCPF" value="157.856.837-41"  disabled>
                            </div>
                            <div class="form-group">
                                <label for="txtRg" id="lblRg">RG:</label>
                                <input type="text" class="form-control"  name="txtRg" id="txtRg" value="21212121" disabled>
                            </div>
                            <div class="form-group">
                                <label for="txtDtNasc" id="lblDtNasc">Data de Nascimento:</label>
                                <input type="text" class="form-control"  name="txtDtnasc" id="txtDtNasc" value="01/01/1973" disabled>
                            </div>
                            <div class="form-group">
                                <label for="txtCel" id="lblCel">Celular:</label>
                                <input type="text" class="form-control" name="txtCel" id="txtCel" value="(21) 92764-0566">
                            </div>
                            <div class="form-group">
                                <label for="txtTel" id="lblTel">Telefone:</label>
                                <input type="text" class="form-control"  name="txtTel" id="txtTel" value="(21) 2764-0566">
                            </div>
                            <a href="#"><button type="button" class="btn btn-danger" name="btnAlterar" id="btnAlterarDados" >Salvar Alterações</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <p id="copyRight" class="lead">© Copyright 2018 Jefferson Sabino e Gabriel Martins (GM7 Design)</p>
    </div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>