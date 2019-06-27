<?php
$this->ion_auth->user()->row()->id;
$nome = $this->ion_auth->user()->row()->first_name;
$celular = $this->ion_auth->user()->row()->phone;
$email = $this->ion_auth->user()->row()->email;
$cep = $this->ion_auth->user()->row()->cep;
$endereco = $this->ion_auth->user()->row()->endereco;
$bairro = $this->ion_auth->user()->row()->bairro;
$cidade = $this->ion_auth->user()->row()->cidade;
$estado = $this->ion_auth->user()->row()->estado;
$numero = $this->ion_auth->user()->row()->numero;
$complemento = $this->ion_auth->user()->row()->complemento;

?>
<div class="container">
    <div class="row">
        <div class="mx-auto col-md-7 mt-5">
            <div class="card-body">
                <form method="POST">
                    <div class="md-form">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" id="nome" name="first_name" value="<?= $nome ?>" class="form-control">
                        <label for="nome" class="font-weight-light"></label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-mobile-alt prefix grey-text"></i>
                        <input type="text" id="celular" name="phone" value="<?= $celular ?>" class="form-control">
                        <label for="celular" class="font-weight-light"></label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="email" id="email" name="email" value="<?= $email ?>" class="form-control">
                        <label for="email" class="font-weight-light"></label>
                    </div>

                    <div class="md-form">
                        <i class="far fa-envelope prefix grey-text"></i>
                        <input type="text" id="rua" value="<?= $cep ?>" name="cep" class="form-control" onblur="pesquisacep(this.value);>
                        <label for="rua" class="font-weight-light"></label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-map-marker prefix grey-text"></i>
                        <input type="text" id="rua" value="<?= $endereco ?>" name="endereco" class="form-control">
                        <label for="rua" class="font-weight-light"></label>
                    </div>

                    <div class="md-form">
                        <i class="fas fa-map-marker prefix grey-text"></i>
                        <input type="text" id="bairro" value="<?= $bairro ?>" name="bairro" class="form-control">
                        <label for="bairro" class="font-weight-light"></label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-map-marker prefix grey-text"></i>
                        <input type="text" id="cidade" value="<?= $cidade ?>" name="cidade" class="form-control">
                        <label for="cidade" class="font-weight-light"></label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-map-marker prefix grey-text"></i>
                        <input type="text" id="uf" value="<?= $estado ?>" name="estado" class="form-control">
                        <label for="uf" class="font-weight-light"></label>
                    </div>

                    <div class="md-form">
                        <i class="fas fa-list-ol prefix grey-text"></i>
                        <input type="text" id="numero" value="<?= $numero ?>" name="numero" class="form-control">
                        <label for="numero" class="font-weight-light"></label>
                    </div>
                    <div class="md-form">
                        <i class="far fa-building prefix grey-text"></i>
                        <input type="text" id="complemento" value="<?= $complemento ?>" name="complemento" class="form-control">
                        <label for="complemento" class="font-weight-light"></label>
                    </div>
                    <div class="text-center py-4 mt-3">
                        <button class="btn btn-green" type="submit">Salvar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>