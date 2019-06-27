<div class="container">
  <div class="row">
    <div class="mx-auto col-md-5 mt-5">
      <div class="card-body">
        <h1 class="text-center"><?= lang('deactivate_heading'); ?></h1>
        <p class="text-center">Você tem certeza que deseja desativar esse usuário<br>'<?=sprintf( $user->first_name); ?>'</p>

        <?= form_open("auth/deactivate/" . $user->id); ?>

        <p class="text-center">
          <?= lang('deactivate_confirm_y_label', 'confirm'); ?>
          <input type="radio" name="confirm" value="yes" checked="checked" /><br>
          <?= lang('deactivate_confirm_n_label', 'confirm'); ?>
          <input type="radio" name="confirm" value="no" />
        </p>

        <?= form_hidden($csrf); ?>
        <?= form_hidden(['id' => $user->id]); ?>

        <div class="text-center py-4 mt-3">
          <button class="btn btn-green" type="submit"><?= lang('deactivate_submit_btn'); ?></button>
        </div>

        <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>