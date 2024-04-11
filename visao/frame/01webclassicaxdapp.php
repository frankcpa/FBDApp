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
            <h1 class="display-4"><strong>Aplicação Web Clássica x DApp</strong></h1>
            <p class="lead"><strong>DApp encontra suas opções substancialmente restritas pela escolha da plataforma descentralizada na qual
                    ela será implantada. A seleção da rede determinará os elementos utilizados na criação desse tipo de aplicação.</strong></p>
            <div class="row mt-5">
                <div class="col col-md-10">
                    <button onclick="location.href = '/frameworkDApp/index.php';" type="button" class="btn btn-dark"><strong>Voltar</strong></button>
                    <button onclick="location.href = '/frameworkDApp/visao/frame/01.1interoperabilidade.php';" type="button" class="btn btn-dark"><strong>Avançar</strong></button>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ExemploModalCentralizado">Mais informações</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <p class="lead"><strong>A tabela abaixo exibe as principais plataformas e suas características essenciais</strong></p>
    </div>
    <div class="row">
        <div class="col col-md-1">

        </div>
        <div class="col col-md-10">
            <img src="/frameworkDApp/recursos/imagens/tabelaPlataformas.png" class="img-fluid" alt="...">
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
                <h5 class="modal-title" id="TituloModalCentralizado">Aplicação Web Clássica x DApp</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="/frameworkDApp/recursos/imagens/dappsestruturaethereum.png" class="img-fluid" alt="...">
                <p class="lead">O exemplo ilustrado pela Figura acima demonstra a arquitetura de aplicações descentralizadas
                    desenvolvidas para a plataforma Ethereum, que e muito semelhante às adotadas por outras redes.
                    A esquerda, na "Ethereum Blockchain", e destacada a composição de um nó (peer). Bytecode do contrato 
                    inteligente, que e gerado após o contrato inteligente ser compilado. Armazenamento, pode ser realizado
                    diretamente na blockchain. A máquina virtual da Ethereum (EVM) ira ler e executar o bytecode do contrato.</p>
                    <p class="lead"> O lado direito da Figura, exibe a aplicação, que pode estar em um servidor ou 
                        distribuída, e a interface do usuario que possibilita a interação com a DApp. A lógica de negócio,
                        ou seja, o back-end da aplicação que no caso de uma DApp é seu contrato inteligente. A biblioteca 
                        JavaScript Web3.js, que oferece funcionalidades para realizar a comunicação dessa aplicação com a 
                        carteira digital, a interface do usuário e a blockchain. E outros mecanismos utilizados para lidar
                        com os dados, estes podem armazenar de forma centralizada ou descentralizada com o uso do IPFS e 
                        outras soluções similares</p>
            </div>
            <div class="modal-footer">
                <a href="https://pt.w3d.community/lorenzobattistela/a-arquitetura-de-um-aplicativo-da-web-30-33bp" target="_blank" class="btn btn-secondary" role="button">Link externo para mais informações</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
</body>

</html>