<?php $user = $this->ion_auth->user()->row()->first_name; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5 mx-auto">
            <div class="jumbotron text-center blue-grey lighten-5">
                <h2 class="card-title h2">Olá, <?= $user ?></h2>
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-7 pb-2 neon">
                        <h5 class="card-text mt-3">Data atual: <?= date('d/m/Y') ?></h5>
                        <h5 class="card-text mt-5">Coletamos até agora: <?= $totalColetado['sum(oleo)'] ? $totalColetado['sum(oleo)'] : '0' ?> litros</h5><br>
                        <h5 class="card-text ">Temos que coletar: <?= $totalBuscar['sum(oleo)'] ? $totalBuscar['sum(oleo)'] : '0' ?> litros</h5>
                        <a href="<?= base_url('index.php/adm/listaBuscar') ?>">
                            <button type="button" class="btn btn-outline-grey btn-sm waves-effect">
                                Vizualizar 
                            </button>
                        </a>
                    </div>
                </div>
                <hr class="my-4 pb-2 row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <button type="button" class="btn btn-outline-success waves-effect" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Meses </button>
                            <div class="dropdown-menu dropdown-primary">
                                <a class="dropdown-item" href="<?= base_url('index.php/calendario/janeiro') ?>">Janeiro</a>
                                <a class="dropdown-item" href="<?= base_url('index.php/calendario/fevereiro') ?>">Fevereiro</a>
                                <a class="dropdown-item" href="<?= base_url('index.php/calendario/marco') ?>">Março</a>
                                <a class="dropdown-item" href="<?= base_url('index.php/calendario/abril') ?>">Abril</a>
                                <a class="dropdown-item" href="<?= base_url('index.php/calendario/maio') ?>">Maio</a>
                                <a class="dropdown-item" href="<?= base_url('index.php/calendario/junho') ?>">Junho</a>
                                <a class="dropdown-item" href="<?= base_url('index.php/calendario/julho') ?>">Julho</a>
                                <a class="dropdown-item" href="<?= base_url('index.php/calendario/agosto') ?>">Agosto</a>
                                <a class="dropdown-item" href="<?= base_url('index.php/calendario/setembro') ?>">Setembro</a>
                                <a class="dropdown-item" href="<?= base_url('index.php/calendario/outubro') ?>">Outubro</a>
                                <a class="dropdown-item" href="<?= base_url('index.php/calendario/novembro') ?>">Novembro</a>
                                <a class="dropdown-item" href="<?= base_url('index.php/calendario/dezembro') ?>">Dezembro</a>
                            </div>


                            <a href="<?= base_url('index.php/adm/listaColetado') ?>">
                                <button type="button" class="btn btn-outline-success waves-effect">
                                    Óleo coletado
                                    <i class="fas fa-tint ml-1"></i>
                                </button>
                            </a>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>