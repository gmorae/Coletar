<?= form_open(current_url()); ?>
<div class="container">
      <div class="row">
            <div class="mx-auto col-md-5 mt-5">
                  <div class="card-body">
                        <h1 class="text-center"><?= lang('edit_group_heading'); ?></h1>
                        <p class="text-center"><?= lang('edit_group_subheading'); ?></p>

                        <div class="text-center alert-success" id="infoMessage"><?= $message; ?></div>
                        <p class="text-center">
                              <div class="md-form">
                                    <i class="fas fa-users prefix grey-text"></i>
                                    <?= lang('edit_group_name_label', 'group_name'); ?> <br />
                                    <?= form_input($group_name); ?>
                              </div>
                        </p>

                        <p class="text-center">
                              <div class="md-form">
                                    <i class="fas fa-users prefix grey-text"></i>
                                    <?= lang('edit_group_desc_label', 'description'); ?> <br />
                                    <?= form_input($group_description); ?>
                              </div>
                        </p>

                        <div class="text-center py-4 mt-3">
                              <button class="btn btn-green" type="submit"><?= lang('edit_group_submit_btn'); ?></button>
                        </div>

                  </div>
            </div>
      </div>
</div>
<?= form_close(); ?>