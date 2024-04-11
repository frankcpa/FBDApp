<html>

<head>
    <link rel="stylesheet" href="/frameworkDApp/recursos/bootstrap-4.1/css/bootstrap.min.css">
    <script src="/frameworkDApp/recursos/jquery/jquery-3.3.1.slim.min.js"> </script>
    <script src="/frameworkDApp/recursos/bootstrap-4.1/js/popper.min.js"> </script>
    <script src="/frameworkDApp/recursos/bootstrap-4.1/js/bootstrap.min.js"> </script>
</head>
</body>
<div class="container">
    <?php include("../../menu.php") ?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><strong>Interoperabilidade e Migração de código</strong></h1>
            <p class="lead"><strong>A interoperabilidade e a migração são temas importantes, porém ainda não consolidados
                em uma solução amplamente utilizada. Há diferentes soluções que devem ser investigadas conforme a 
                necessidade da aplicação.</strong></p>
            <div class="row mt-5">
                <div class="col col-md-10">
                    <button onclick="location.href = '/frameworkDApp/visao/frame/01webclassicaxdapp.php';" type="button" class="btn btn-dark"><strong>Voltar</strong></button>
                    <button onclick="location.href = '/frameworkDApp/visao/frame/02plataformas.php';" type="button" class="btn btn-dark"><strong>Avançar</strong></button>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ExemploModalCentralizado">Mais informações</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col col-md-1">

        </div>
        <div class="col col-md-10">
            <img src="/frameworkDApp/recursos/imagens/crosschain.webp" class="img-fluid" alt="...">
        </div>
        <div class="col col-md-1">

        </div>
    </div>
    <div class="row">
        <div class="col col-md-12">

        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Interoperabilidade e Migração de código</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="/frameworkDApp/recursos/imagens/interoperabilidade.png" class="img-fluid" alt="...">
                <p class="lead">[1] Aborda em sua pesquisa a portabilidade de contratos inteligentes. Nela, o pesquisador
                        propõe um conceito a ser seguido para facilitar a migração de um contrato inteligente entre as 
                        plataformas descentralizadas que suportam a máquina virtual da Ethereum. O trabalho 
                        explora diferentes formas de realizar essa migração, adaptando-se ao tamanho da aplicação a ser
                        migrada.</p>
                <p class="lead">[2] Identificaram soluções utilizadas na interoperabilidade de contratos inteligentes entre
                    diferentes plataformas. A pesquisa foi orientada para abordar questões relacionadas à interação entre
                    sistemas legados e uma plataforma Blockchain, entre diferentes plataformas e entre contratos
                    inteligentes.</p>
                <p class="lead">A interoperabilidade e a migração são temas importantes, porém ainda não consolidados em
                    uma solução amplamente utilizada. Há diferentes soluções que devem ser investigadas conforme a 
                    necessidade da aplicação. Portanto, o papel deste artigo em criar um framework para auxiliar
                    desenvolvedores na decisão de qual plataforma utilizar, demonstra-se importante.</p>
                <hr>
                    [1] Khan, S., Amin, M. B., Azar, A. T., and Aslam, S. (2021). Towards interoperable blockchains: A 
                    survey on the role of smart contracts in blockchain interoperability.</br>
                    [2]Fajge, A. M., Thakur, S., Kumar, R., and Halder, R. (2021). An automated framework for migrating
                    java applications to ethereum solidity applications.
            </div>
            <div class="modal-footer">
                <a href="https://panegali.medium.com/a-ado%C3%A7%C3%A3o-da-web3-a-interoperabilidade-da-polkadot-dapps-cross-chain-540e4fb66603" target="_blank" class="btn btn-secondary" role="button">Link externo para mais informações</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
</body>

</html>