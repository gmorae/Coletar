<div class="container">
<?= validation_errors('<div class="alert alert-danger">', '</div>'); ?>

    <div class="row">
        <div class="mx-auto col-md-7 mt-5">
            <div class="card-body">
                <form method="POST">
                    <p class="h4 text-center py-4">Cadastre-se</p>

                    <div class="md-form">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" id="nome" name="first_name" value="<?= set_value(''); ?>" class="form-control">
                        <label for="nome" class="font-weight-light">Nome Completo</label>
                    </div>
                    
                    <div class="md-form">
                        <i class="fas fa-mobile-alt prefix grey-text"></i>
                        <input type="text" id="celular" name="phone" value="<?= set_value(''); ?>" class="form-control">
                        <label for="celular" class="font-weight-light">Celular</label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="email" id="email" name="email" value="<?= set_value(''); ?>" class="form-control">
                        <label for="email" class="font-weight-light">E-mail</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-lock prefix grey-text"></i>
                        <input type="password" id="senha" name="password" value="<?= set_value(''); ?>" class="form-control">
                        <label for="senha" class="font-weight-light">Senha</label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-lock prefix grey-text"></i>
                        <input type="password" id="senha" name="password_confirm" value="<?= set_value(''); ?>" class="form-control">
                        <label for="senha" class="font-weight-light">Senha</label>
                    </div>
