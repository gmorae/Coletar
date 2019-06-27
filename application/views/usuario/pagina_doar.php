<div class="container">
      <div class="mx-auto col-md-12 mt-5">
            <div class="card-body">
                  <form method="POST">
                        <h2 class="h2 text-center py-4">Doação de óleo</h2>
                        <div class="row">

                              <div class="mx-auto col-md-5">
                                    <h2 class="h2 text-center py-4">Nova doação</h2>
                                    <h5 class="card-text mt-3 text-center">Data atual: <?= date('d/m/Y') ?></h5>
                                    <div class="md-form">
                                          <i class="fas fa-tint prefix grey-text"></i>
                                          <input type="text" id="oleo" name="oleo" value="<?= set_value(''); ?>" class="form-control" required>
                                          <label for="oleo" class="font-weight-light">Quantidade de óleo</label>
                                    </div>
                                    <div class="md-form">
                                          <i class="far fa-calendar-check prefix grey-text"></i>
                                          <input type="Date" id="dia" name="dia" value="<?= set_value(''); ?>" min="<?= date('Y-m-d') ?>" class="form-control" required>
                                          <label for="dia" class="font-weight-light">Melhor dia </label>
                                    </div>

                                    <div class="md-form">
                                          <i class="far fa-clock prefix grey-text"></i>
                                          <input type="Time" id="horario" name="horario" value="<?= set_value(''); ?>" min="09:00" max="18:00" class="form-control validacao" required>
                                          <label for="horario" class="font-weight-light"> Melhor horario</label>
                                    </div>

                                    <div class="text-center py-4 mt-3">
                                          <button class="btn btn-green" type="submit">doar</button>
                                    </div>

                              </div>
                              <div class="mx-auto col-md-7">
                                    <h2 class="h2 text-center py-4">Últimos depósitos</h2>
                                    <div class="table-responsive text-nowrap">
                                          <!--Table-->
                                          <table class="table table-striped text-center">
                                                <thead>
                                                      <tr class="text-center">
                                                            <th scope="col-md-4">Data</th>
                                                            <th scope="col-md-4">Quatidades de óleo</th>
                                                            <th scope="col-md-4">Horário</th>
                                                            <th scope="col-md-4">Excluir</th>
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
                  </form>
            </div>
      </div>
</div>