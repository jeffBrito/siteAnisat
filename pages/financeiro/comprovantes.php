<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Viasat - Faturas</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/comprovantes.css">
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
            <p>Inicio</p>
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
            <div id="comprovantes1">
                <div id="meusComprovantes">
                    <h5 id="tituloMeusComprovantes">Meus Comprovantes</h5>
                </div>
                <div id="tabelaMeuComprovantes">
                    <div id="tituloMeusComprovantes2">
                        <button id="btnNovoComprovante" class="btn btn-dark" onclick="window.location.href='../novoComprovante.php'">Novo Comprovante</button>
                    </div>
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Data de Envio</th>
                                <th scope="col">Observação</th>
                                <th scope="col">Comprovante</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                            <tbody>
                                <tr>
                                    <td class="comprovantes2">1</td>
                                    <td class="comprovantes2">10/10/2018 18:05:24</td>
                                    <td class="comprovantes2">Motivo do mes referente ao boleto do mês 10/10 favor verificar</td>
                                    <td class="comprovantes2"><button id="btnComprovante" class="btn btn-warning" disable>Comprovante</button></td>
                                    <td><button id="btnStatus" class="btn btn-success" disable>Confirmado</button></td>
                                </tr>
                                <tr>
                                    <td class="comprovantes2">2</td>
                                    <td class="comprovantes2">10/10/2018 18:05:24</td>
                                    <td class="comprovantes2">Motivo do mes referente ao boleto do mês 10/10 favor verificar</td>
                                    <td class="comprovantes2"><button id="btnComprovante" class="btn btn-warning" disable>Comprovante</button></td>
                                    <td><button id="btnStatus" class="btn btn-info" disable>Em Análise</button></td>
                                </tr>
                                <tr>
                                    <td class="comprovantes2">2</td>
                                    <td class="comprovantes2">10/10/2018 18:05:24</td>
                                    <td class="comprovantes2">Motivo do mes referente ao boleto do mês 10/10 favor verificar</td>
                                    <td class="comprovantes2"><button id="btnComprovante" class="btn btn-warning" disable>Comprovante</button></td>
                                    <td><button id="btnStatus" class="btn btn-info" disable>Em Análise</button></td>
                                </tr>
                                <tr>
                                    <td class="comprovantes2">2</td>
                                    <td class="comprovantes2">10/10/2018 18:05:24</td>
                                    <td class="comprovantes2">Motivo do mes referente ao boleto do mês 10/10 favor verificar</td>
                                    <td class="comprovantes2"><button id="btnComprovante" class="btn btn-warning" disable>Comprovante</button></td>
                                    <td><button id="btnStatus" class="btn btn-info" disable>Em Análise</button></td>
                                </tr>
                            </tbody>
                    </table>
                </div>
                <div id="pageFaturas">
                    <nav id="pagefaturas2" aria-label="Navegação de todas as Faturas">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
                        </ul>
                    </nav>
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