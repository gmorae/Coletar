<div class="container">
  <div class="row">
    <div class="mt-5 mx-auto col-md-5">
      <h2 class="h1-responsive font-weight text-center my-4"><?php echo lang('login_heading'); ?></h2>

      <div id="infoMessage" class="text-center alert-danger" style="font-family:sans-serif "><?php echo $message; ?></div>

      <?php echo form_open("auth/login"); ?>
      <form class="text  border-light p-5">
        <div class="md-form">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="identity" name="identity" class="form-control">
          <label for="identity" class="font-weight-light">E-mail</label>
        </div>

        <div class="md-form">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="password" name="password" class="form-control">
          <label for="password" class="font-weight-light">Senha</label>
        </div>
        <p class="text-center"><a class=" black-text" href="<?= base_url('index.php/auth/forgot_password') ?>" ><?php echo lang('login_forgot_password');?></a></p>
        <button class="btn btn-light-green btn-block my-4 col-md-5 text-center mx-auto" type="submit">Entrar</button>

        <?php echo form_close(); ?>

        <p class="text-center">Não é cadastrado?
          <a href="<?= base_url('index.php/auth/create_user') ?>" style="color: #8bc34a;">Registre</a>
        </p>
      </form>
    </div>
  </div>
</div>