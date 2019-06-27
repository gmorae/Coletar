<?php echo form_open("auth/change_password"); ?>
<div class="container">
      <div class="row">
            <div class="mx-auto col-md-7 mt-5">
                  <div class="card-body">
                        <form method="POST">
                              <p class="h4 text-center py-4">Atualizar senha</p>
                              <div class="text-center" style="font-family:sans-serif" id="infoMessage"><?php echo $message; ?></div>
                              <div class="mx-auto">
                                    <div class="md-form">
                                          <i class="fa fa-lock prefix grey-text"></i>
                                          <?php echo lang('change_password_old_password_label', 'old_password'); ?> <br />
                                          <?php echo form_input($old_password); ?>
                                    </div>
                                    <div class="md-form">
                                          <i class="fa fa-lock prefix grey-text"></i>
                                          <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length); ?></label> <br />
                                          <?php echo form_input($new_password); ?>
                                    </div>

                                    <div class="md-form">
                                          <i class="fa fa-lock prefix grey-text"></i>
                                          <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm'); ?> <br />
                                          <?php echo form_input($new_password_confirm); ?>
                                    </div>


                                    <?php echo form_input($user_id); ?>
                                    <div class="text-center py-4 mt-3">
                                          <button class="btn btn-green" type="submit"><?= lang('change_password_submit_btn');?></button>
                                    </div>
                                    <?php echo form_close(); ?>
                              </div>
                        </form>
                  </div>
            </div>
      </div>
</div>