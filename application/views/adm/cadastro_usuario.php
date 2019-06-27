
<div class="container">
      <div class="row">
            <div class="mx-auto col-md-7 mt-5">
                  <div class="card-body">
                        <form method="POST">
                              <?php echo form_open(uri_string()); ?>
                              <p class="h4 text-center py-4"><?= lang('edit_user_heading'); ?></p>
                              <div class="text-center" style="font-family:sans-serif" id="infoMessage"><?= lang('edit_user_subheading'); ?></div>
                              <div class="text-center" style="font-family:sans-serif" id="infoMessage"><?php echo $message; ?></div>
                              <div class="md-form">
                                    <i class="fa fa-user prefix grey-text"></i>
                                    <input type="text" id="nome" name="first_name" value="<?= isset($usuario['first_name']) ? $usuario['first_name'] : '' ?>" class="form-control">
                                    <label for="nome" class="font-weight-light">Nome Completo</label>
                              </div>
                              <div class="md-form">
                                    <i class="fas fa-mobile-alt prefix grey-text"></i>
                                    <input type="text" id="celular" name="phone" value="<?= isset($usuario['phone']) ? $usuario['phone'] : '' ?>" class="form-control">
                                    <label for="celular" class="font-weight-light">Celular</label>
                              </div>
                              <div class="md-form">
                                    <i class="fa fa-envelope prefix grey-text"></i>
                                    <input type="email" id="email" name="email" value="<?= isset($usuario['email']) ? $usuario['email'] : '' ?>" class="form-control">
                                    <label for="email" class="font-weight-light">E-mail</label>
                              </div>
                              <div class="md-form">
                                    <i class="far fa-envelope prefix grey-text"></i>
                                    <input type="text" id="cep" value="<?= isset($usuario['cep']) ? $usuario['cep'] : '' ?>" name="cep" class="form-control">
                                    <label for="cep" class="font-weight-light">C.E.P</label>
                              </div>

                              <div class="md-form">
                                    <i class="fas fa-map-marker prefix grey-text"></i>
                                    <input type="text" id="rua" value="<?= isset($usuario['endereco']) ? $usuario['endereco'] : '' ?>" name="rua" class="form-control">
                                    <label for="rua" class="font-weight-light"></label>
                              </div>

                              <div class="md-form">
                                    <i class="fas fa-map-marker prefix grey-text"></i>
                                    <input type="text" id="bairro" value="<?= isset($usuario['bairro']) ? $usuario['bairro'] : '' ?>" name="bairro" class="form-control">
                                    <label for="bairro" class="font-weight-light"></label>
                              </div>
                              <div class="md-form">
                                    <i class="fas fa-map-marker prefix grey-text"></i>
                                    <input type="text" id="cidade" value="<?= isset($usuario['cidade']) ? $usuario['cidade'] : '' ?>" name="cidade" class="form-control">
                                    <label for="cidade" class="font-weight-light"></label>
                              </div>
                              <div class="md-form">
                                    <i class="fas fa-map-marker prefix grey-text"></i>
                                    <input type="text" id="uf" value="<?= isset($usuario['estado']) ? $usuario['estado'] : '' ?>" name="uf" class="form-control">
                                    <label for="uf" class="font-weight-light"></label>
                              </div>

                              <div class="md-form">
                                    <i class="fas fa-list-ol prefix grey-text"></i>
                                    <input type="text" id="numero"value="<?= isset($usuario['numero']) ? $usuario['numero'] : '' ?>" name="numero" class="form-control">
                                    <label for="numero" class="font-weight-light">Número</label>
                              </div>
                              <div class="md-form">
                                    <i class="far fa-building prefix grey-text"></i>
                                    <input type="text" id="complemento"value="<?= isset($usuario['completo']) ? $usuario['completo'] : '' ?>" name="complemento" class="form-control">
                                    <label for="complemento" class="font-weight-light">Complemento</label>
                              </div>
                              <?php if ($this->ion_auth->is_admin()) : ?>

                                    <h3><?php echo lang('edit_user_groups_heading'); ?></h3>
                                    <?php foreach ($groups as $group) : ?>
                                          <label class="checkbox">
                                                <?php
                                                $gID = $group['id'];
                                                $checked = null;
                                                $item = null;
                                                foreach ($currentGroups as $grp) {
                                                      if ($gID == $grp->id) {
                                                            $checked = ' checked="checked"';
                                                            break;
                                                      }
                                                }
                                                ?>
                                                <input type="checkbox" name="groups[]" value="<?php echo $group['id']; ?>" <?php echo $checked; ?>>
                                                <?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?>
                                          </label>
                                    <?php endforeach ?>

                              <?php endif ?>
                              <div class="text-center py-4 mt-3">
                                    <button class="btn btn-green" type="submit"><?= lang('edit_user_submit_btn'); ?></button>
                              </div>
                        </form>

                  </div>
            </div>
      </div>
</div>
<?php echo form_close(); ?>