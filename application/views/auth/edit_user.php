<?php $id = $this->ion_auth->user()->row()->id?>
<div class="container">
      <div class="row">
            <div class="mx-auto col-md-7 mt-5">
                  <div class="card-body">
                        <?= form_open(uri_string()); ?>

                        <div class="text-center alert-danger" style="font-family:sans-serif" id="infoMessage"><?= $message; ?></div>
                        <p class="h4 text-center py-4"><?= lang('edit_user_heading'); ?></p>
                        <div class="text-center" style="font-family:sans-serif" id="infoMessage"><?= lang('edit_user_subheading'); ?></div>
                        <div class="md-form">
                              <i class="fa fa-user prefix grey-text"></i>
                              <?= lang('edit_user_fname_label', 'first_name'); ?> <br />
                              <?= form_input($first_name); ?>
                        </div>
                        <div class="md-form">
                              <i class="fas fa-mobile-alt prefix grey-text"></i>
                              <?= lang('edit_user_phone_label', 'phone'); ?> <br />
                              <?= form_input($phone); ?>
                        </div>
                        <div class="md-form">
                              <i class="fa fa-envelope prefix grey-text"></i>
                              <?= lang('edit_user_email_label', 'email'); ?> <br />
                              <?= form_input($email); ?>
                        </div>
                        <div class="md-form">
                              <i class="far fa-envelope prefix grey-text"></i>
                              <?= lang('edit_user_company_label', 'cep'); ?> <br />
                              <?= form_input($cep); ?>
                        </div>
                        <div class="md-form">
                              <i class="fas fa-map-marker prefix grey-text"></i>
                              <?= lang('edit_user_endereco_label', 'endereco'); ?> <br />
                              <?= form_input($endereco); ?>
                        </div>
                        <div class="md-form">
                              <i class="fas fa-map-marker prefix grey-text"></i>
                              <?= lang('edit_user_bairro_label', 'bairro'); ?> <br />
                              <?= form_input($bairro); ?>
                        </div>
                        <div class="md-form">
                              <i class="fas fa-map-marker prefix grey-text"></i>
                              <?= lang('edit_user_cidade_label', 'cidade'); ?> <br />
                              <?= form_input($cidade); ?>
                        </div>
                        <div class="md-form">
                              <i class="fas fa-map-marker prefix grey-text"></i>
                              <?= lang('edit_user_estado_label', 'estado'); ?> <br />
                              <?= form_input($estado); ?>
                        </div>
                        <div class="md-form">
                              <i class="fas fa-list-ol prefix grey-text"></i>
                              <?= lang('edit_user_numero_label', 'numero'); ?> <br />
                              <?= form_input($numero); ?>
                        </div>
                        <div class="md-form">
                              <i class="far fa-building prefix grey-text"></i>
                              <?= lang('edit_user_complemento_label', 'complemento'); ?> <br />
                              <?= form_input($complemento); ?>
                        </div>



                        <div class="mx-auto col-md-7 mt-3">
                              <?php if ($this->ion_auth->is_admin()) : ?>
                                    <h3 class="text-center"><?= lang('edit_user_groups_heading'); ?></h3>
                                    <?php foreach ($groups as $group) : ?>
                                          <div class="text-center">
                                                <label class="checkbox text-center col-md-7">
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
                                                      <input type="checkbox" name="groups[]" value="<?= $group['id']; ?>" <?= $checked; ?>>
                                                      <?= htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?>
                                                </label>
                                          </div>
                                    <?php endforeach ?>

                              <?php endif ?>
                        </div>

                        <div class="text-center py-4 mt-3">
                              <button class="btn btn-green" data-toggle="modal" data-target="#modalConfirmEdit" type="button"><?= lang('edit_user_submit_btn'); ?></button>
                              <button class="btn btn-danger" data-toggle="modal" data-target="#modalConfirmDelete" type="button">Excluir usuário</button>
                        </div>

                        <div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
                                    <div class="modal-content text-center">
                                          <div class="modal-header d-flex justify-content-center">
                                                <p class="heading">Excluir usuário <i class="fas fa-user-times fa-1x animated rotateIn white-text"></i></p>
                                          </div>
                                          <div class="modal-body">

                                                <i class="fas fa-times fa-4x animated rotateIn"></i>
                                                <p class="text-center"> Você realmente deseja excluir <br></p>
                                          </div>

                                          <div class="modal-footer flex-center">

                                                <a href="<?= base_url('index.php/adm/removerUsuario/' . $id . '') ?>" class="btn btn-outline-danger">Sim</a>
                                                <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">Não</a>


                                          </div>
                                    </div>
                                    <!--/.Content-->
                              </div>
                        </div>

                        <div class="modal fade" id="modalConfirmEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-sm modal-notify modal-success" role="document">
                                    <div class="modal-content text-center">
                                          <div class="modal-header d-flex justify-content-center">
                                                <p class="heading">Alterar usuário</p>
                                          </div>
                                          <div class="modal-body">

                                                <i class="fas fa-user-edit fa-4x animated rotateIn"></i><br><br>
                                                <p class="text-center"> Você realmente deseja <br>alterar os dados<br></p>
                                          </div>

                                          <!--Footer-->
                                          <div class="modal-footer flex-center">
                                                <button type="submit" class="btn  btn-outline-success">Sim</button>
                                                <a type="button" class="btn  btn-success waves-effect" data-dismiss="modal">Não</a>
                                          </div>
                                    </div>
                                    <!--/.Content-->
                              </div>
                        </div>
                        <?= form_hidden('id', $user->id); ?>
                        <?= form_hidden($csrf); ?>
                        <?= form_close(); ?>
                  </div>
            </div>
      </div>
</div>