<?php echo form_open("auth/create_user"); ?>
<div class="container">
      <div class="row">
            <div class="mx-auto col-md-7 mt-5">
                  <div class="card-body">
                        <form method="POST">
                        <h2 class="h1-responsive font-weight text-center mb-5">Para realizar as doações, cadastre-se</h2>
                              <div class="text-center alert-danger" style="font-family:sans-serif" id="infoMessage"><?php echo $message; ?></div>
                              <div class="md-form">
                                    <i class="fa fa-user prefix grey-text"></i>
                                    <input type="text" id="nome" name="first_name" value="<?= set_value('first_name'); ?>" class="form-control" required>
                                    <label for="nome" class="font-weight-light">Nome Completo / Empresa</label>
                              </div>
                              <div class="md-form">
                                    <i class="fas fa-mobile-alt prefix grey-text"></i>
                                    <input type="text" id="celular" name="phone" value="<?= set_value('phone'); ?>" class="form-control" required>
                                    <label for="celular" class="font-weight-light">Celular</label>
                              </div>
                              <div class="md-form">
                                    <i class="fa fa-envelope prefix grey-text"></i>
                                    <input type="email" id="email" name="email" value="<?= set_value('email'); ?>" class="form-control" required>
                                    <label for="email" class="font-weight-light">E-mail</label>
                              </div>

                              <div class="md-form">
                                    <i class="fa fa-lock prefix grey-text"></i>
                                    <input type="password" id="senha" name="password" value="<?= set_value(''); ?>" class="form-control" required>
                                    <label for="senha" class="font-weight-light">Senha (A senha deve ter no minímo 8 caracteres)</label>
                                   
                              </div>
                              <div class="md-form">
                                    <i class="fa fa-lock prefix grey-text"></i>
                                    <input type="password" id="senha" name="password_confirm" value="<?= set_value(''); ?>" class="form-control" required>
                                    <label for="senha" class="font-weight-light">Confirmação da senha</label>
                              </div>
                              <div class="md-form">
                                    <i class="far fa-envelope prefix grey-text"></i>
                                    <input type="text" id="cep" value="<?= set_value('cep'); ?>" name="cep" class="form-control" onblur="pesquisacep(this.value);">
                                    <label for="cep" class="font-weight-light">C.E.P</label>
                              </div>

                              <div class="md-form">
                                    <i class="fas fa-map-marker prefix grey-text"></i>
                                    <input type="text" id="rua" value="<?= set_value('rua'); ?>" name="rua" class="form-control" required>
                                    <label for="rua" class="font-weight-light">Endereço</label>
                              </div>

                              <div class="md-form">
                                    <i class="fas fa-map-marker prefix grey-text"></i>
                                    <input type="text" id="bairro" value="<?= set_value('bairro'); ?>" name="bairro" class="form-control" required>
                                    <label for="bairro" class="font-weight-light">Bairro</label>
                              </div>
                              <div class="md-form">
                                    <i class="fas fa-map-marker prefix grey-text"></i>
                                    <input type="text" id="cidade" value="<?= set_value('cidade'); ?>" name="cidade" class="form-control" required>
                                    <label for="cidade" class="font-weight-light">Cidade</label>
                              </div>
                              <div class="md-form">
                                    <i class="fas fa-map-marker prefix grey-text"></i>
                                    <input type="text" id="uf" value="<?= set_value('uf'); ?>" name="uf" class="form-control" required>
                                    <label for="uf" class="font-weight-light">Estado</label>
                              </div>

                              <div class="md-form">
                                    <i class="fas fa-list-ol prefix grey-text"></i>
                                    <input type="text" id="numero" value="<?= set_value('numero') ?>" name="numero" class="form-control" required>
                                    <label for="numero" class="font-weight-light">Número</label>
                              </div>
                              <div class="md-form">
                                    <i class="far fa-building prefix grey-text"></i>
                                    <input type="text" id="complemento" value="<?= set_value('complemento') ?>" name="complemento" class="form-control">
                                    <label for="complemento" class="font-weight-light">Complemento</label>
                              </div>
                              <div class="text-center py-4 mt-3">
                                    <button class="btn btn-green" type="submit">Cadastrar</button>
                              </div>
                        </form>

                  </div>
            </div>
      </div>
</div>
<?php echo form_close(); ?>