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
    <div class="row">
        <div class="col col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">Plataforma(s) sugerida(s)</h1>
                <hr class="my-4">
                <div class="row mt-5">
                    <div class="col col-md-12">
                        <ul>
                            <?php
                            if ($_GET['figura'] == 'sim' && $_GET['figura2'] == 'sim') {
                                echo '<a target="_blank" href="https://ethereum.org/pt/" class="btn btn-link">';
                                echo '<li><span class="glyphicon glyphicon-th-list"></span> Ethereum</li> </a>';
                            } else if ($_GET['figura'] == 'sim' && $_GET['figura2'] == 'nao'){
                                echo '<a target="_blank" href="https://www.hyperledger.org/" class="btn btn-link">';
                                echo '<li><span class="glyphicon glyphicon-th-list"></span> Hyperledger</li> </a></br>';

                                echo '<a target="_blank" href="https://tendermint.com/" class="btn btn-link">';
                                echo '<li><span class="glyphicon glyphicon-th-list"></span> Tendermint</li> </a></br>';

                                echo '<a target="_blank" href="https://multichain.xyz/" class="btn btn-link">';
                                echo '<li><span class="glyphicon glyphicon-th-list"></span> Multchain</li> </a></br>';

                                echo '<a target="_blank" href="https://www.kaleido.io/blockchain-platform/quorum" class="btn btn-link">';
                                echo '<li><span class="glyphicon glyphicon-th-list"></span> Quorum</li> </a>';
                            }else if ($_GET['figura'] == 'nao' && $_GET['figura2'] == 'sim'){
                                echo '<a target="_blank" href="https://ethereum.org/pt/" class="btn btn-link">';
                                echo '<li><span class="glyphicon glyphicon-th-list"></span> Ethereum</li> </a>';
                            }else if ($_GET['figura'] == 'nao' && $_GET['figura2'] == 'nao'){
                                echo '<a target="_blank" href="https://www.hyperledger.org/" class="btn btn-link">';
                                echo '<li><span class="glyphicon glyphicon-th-list"></span> Hyperledger</li> </a></br>';

                                echo '<a target="_blank" href="https://tendermint.com/" class="btn btn-link">';
                                echo '<li><span class="glyphicon glyphicon-th-list"></span> Tendermint</li> </a></br>';

                                echo '<a target="_blank" href="https://multichain.xyz/" class="btn btn-link">';
                                echo '<li><span class="glyphicon glyphicon-th-list"></span> Multchain</li> </a></br>';

                                echo '<a target="_blank" href="https://www.kaleido.io/blockchain-platform/quorum" class="btn btn-link">';
                                echo '<li><span class="glyphicon glyphicon-th-list"></span> Quorum</li> </a>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col col-md-12">
            <button onclick="location.href = '/frameworkDApp/visao/frame/06per2simper3per4.php?figura=<?php echo $_GET['figura'] ?>&figura2=<?php echo $_GET['figura2'] ?>';" type="button" class="btn btn-primary">Voltar</button>
        </div>
    </div>
</div>

</body>

</html>