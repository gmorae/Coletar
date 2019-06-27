<div class="container">
      <div class="row">
            <div class="col-md-5 mx-auto mt-5">
                  <h1 class="text-center"><?= lang('create_group_heading'); ?></h1>
                  <p class="text-center"><?= lang('create_group_subheading'); ?></p>

                  <div class="text-center alert-success" id="infoMessage"><?= $message; ?></div>

                  <?= form_open("auth/create_group"); ?>

                  <p class="text-center">
                        <div class="md-form">
                              <i class="fas fa-users prefix grey-text"></i>
                              <?= lang('create_group_name_label', 'group_name'); ?> <br />
                              <?= form_input($group_name); ?>
                        </div>
                  </p>

                  <p class="text-center">
                        <div class="md-form">
                              <i class="far fa-comment prefix grey-text"></i>
                              <?= lang('create_group_desc_label', 'description'); ?> <br />
                              <?= form_input($description); ?>
                        </div>
                  </p>

                  <div class="text-center py-4 mt-3">
                        <button class="btn btn-green" type="submit"><?= lang('create_group_submit_btn'); ?></button>
                  </div>
                  <?= form_close(); ?>
            </div>
      </div>
</div>