<div class="container">
    <div class="row">
        <div class="col-md-9 mx-auto mt-5">
            <div class="row">
                <div class="mx-auto">
                    <h2 class="h1-responsive font-weight text-center my-4"><?= $titulo ?></h2>
                    <!-- <a href="">
                        <button type="button" class="btn btn-outline-warning btn-sm waves-effect">Vizualizar melhor rota</button>
                    </a> -->
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <!--Table-->
                <table class="table table-striped text-center">
                    <thead class="table table-striped">
                        <tr class="text-center">
                            <th scope="col-md-4">Nome completo</th>
                            <th scope="col-md-4">Quatidades de óleo</th>
                            <th scope="col">Dia </th>
                            <th scope="col">Hora </th>
                            <th scope="col-md-4">Bairro</th>
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