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
            <h1 class="display-4"><strong>Aplicação de propósito geral ou voltada para moeda digital?</strong></h1>
            <p class="lead"><strong>Plataformas consideradas para DApps de propósito geral:</strong></p>
            <ul>
                <li class="lead"><strong>Ethereum, Hyperledger, Neo, EOS, RSK, Tendermint e Quorum.</strong></li>
            </ul>
            <p class="lead"><strong>Plataformas consideradas para DApps voltadas para moeda digital:</strong></p>
            <ul>
                <li class="lead"><strong>Nem, Stellar, Corda e Cardano.</strong></li>
            </ul>
            <button onclick="" type="button" disabled class="btn btn-dark"><strong>Moeda Digital</strong></button>
            <button onclick="location.href = '/frameworkDApp/visao/frame/03per01bft.php';" type="button" class="btn btn-dark"><strong>Propósito Geral</strong></button>
        </div>
    </div>

    <div class="row">
        <div class="col col-md-2">
        </div>
        <div class="col col-md-4">
            <img src="/frameworkDApp/recursos/imagens/dappGeral.jpg" class="img-fluid" alt="...">
        </div>

        <div class="col col-md-4">
            <img src="/frameworkDApp/recursos/imagens/dappMoeda.png" class="img-fluid" alt="...">
        </div>
        <div class="col col-md-2">
        </div>
    </div>
    <div class="row">
        <div class="col col-md-12">
            <button onclick="location.href = '/frameworkDApp/visao/frame/01.1interoperabilidade.php';" type="button" class="btn btn-primary">Voltar</button>
        </div>
    </div>
</div>
</body>

</html>