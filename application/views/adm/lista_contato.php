<div class="container">
    <div class="row">
        <div class="col-md-12 mx-auto mt-5">
            <h2 class="h1-responsive font-weight text-center my-4">Tabela de contato</h2>

            <div class="table-responsive text-nowrap">
                <!--Table-->
                <table class="table table-striped text-center">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Assunto</th>
                            <th scope="col">Mensagem</th>
                            <th scope="col">Excluir</th>
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
                    <tfoot>
                        <tr class="text-center">
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Assunto</th>
                            <th scope="col">Mensagem</th>
                            <th scope="col">Excluir</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            </section>
        </div>
    </div>
</div>