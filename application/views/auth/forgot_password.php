<div class="container">
      <div class="row">
            <div class="mt-5 mx-auto col-md-5">
                  <h1 class="text-center"><?php echo lang('forgot_password_heading'); ?></h1><br>
                  <p class="text-center"><?php echo sprintf(lang('forgot_password_subheading'), $identity_label); ?></p>

                  <div id="infoMessage" class="text-center alert-danger"><?php echo $message; ?></div>

                  <?php echo form_open("auth/forgot_password"); ?>

                  <p class="text-center">
                        <div class="md-form">
                              <i class="fas fa-envelope prefix grey-text"></i>
                              <label for="identity"><?php echo (($type == 'email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label)); ?></label> <br />
                              <?php echo form_input($identity); ?>
                        </div>
                  </p>

                  <div class="text-center py-4 mt-3">
                        <button class="btn btn-green" type="submit"><?= lang('forgot_password_submit_btn'); ?></button>
                  </div>
                  <?php echo form_close(); ?>
            </div>
      </div>
</div>