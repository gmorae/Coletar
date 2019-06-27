<?php if ($this->ion_auth->is_admin()) { ?>
    <div class="container">
        <div class="row">
            <div class="col-md-9 mx-auto mt-5">
                <h2 class="h1-responsive font-weight text-center my-4"><?= $titulo ?></h2>
                <div class="table-responsive text-nowrap">
                    <!--Table-->
                    <table class="table table-striped text-center">
                        <thead>
                            <tr class="text-center">
                            <tr class="text-center">
                                <th scope="col-md-4">Nome</th>
                                <th scope="col-md-4">Quatidades de óleo</th>
                                <th scope="col-md-4">Dia</th>
                                <th scope="col-md-4">Horario</th>
                                <th scope="col-md-4">Status</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                            <?= $table ?>
                            <tr class='text-center'>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </section>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div class="container">
        <div class="row">
            <div class="col-md-9 mx-auto mt-5">
                <h2 class="h1-responsive font-weight text-center my-4"><?= $titulo ?></h2>

                <div class="table-responsive text-nowrap">
                    <!--Table-->
                    <table class="table table-striped text-center">
                        <thead>
                            <tr class="text-center">
                                <th scope="col-md-4">Dia</th>
                                <th scope="col-md-4">Quatidades de óleo</th>
                                <th scope="col-md-4">Horario</th>
                                <th scope="col-md-4">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?= $table ?>
                            <tr class='text-center'>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </section>
            </div>
        </div>
    </div>
<?php } ?>