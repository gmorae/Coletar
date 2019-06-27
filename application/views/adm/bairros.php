<div class="container">
    <div class="row ">
        <div class="col-md-6 mb-4 mt-2">
            <div class="card ">
                <div class="btn btn-outline-success waves-effect">
                    <a href="<?= $url ?>">
                        <div class=" h-100 ">
                            <div class="first-content align-self-center p-3">
                                <h3 class="card-title black-text"><?= $nome ?></h3>
                                <p class="lead mb-0 black-text">Total neste bairro: <?= $total['sum(oleo)'] ? $total['sum(oleo)'] : '0' ?> Litros</p>
                            </div>

                        </div>
                    </a>
                </div>
            </div>
        </div>