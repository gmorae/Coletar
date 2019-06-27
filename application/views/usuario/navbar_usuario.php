<?php $user = $this->ion_auth->user()->row()->first_name; ?>
<nav class="mb-1 navbar navbar-expand-lg navbar-dark black" style="background: linear-gradient(to right, #ffffff 20%, #8bc34a 100%);">
  <a class="navbar-brand mb-2 mt-2 ml-md-5" style="width: 70pt" href="<?= base_url('index.php/usuario'); ?>"><img class="img-fluid  ml-md-3" src="<?= base_url('imagens/logo.png') ?>" alt="Sample image"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fas fa-bars black-text"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto mt-2 ml-md-2">
      <li class="nav-item">
        <a class="nav-link ml-md-2 black-text" style="font-size: 20px;" href="<?= base_url('index.php/usuario'); ?>">Home
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <p class="nav-link ml-md-2 black-text" style="font-size: 15px;">Olá, <?= $user ?>
          </p>
        </li>
        <div class="md-form my-0">
          <li class="nav-item dropdown black-text">
            <a class="nav-link dropdown-toggle black-text" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user black-text"></i>
            </a>
            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
              <a class="dropdown-item" href="<?= base_url('index.php/usuario/tabela'); ?>">Tabela de depósitos</a>
              <a class="dropdown-item" href="<?= base_url('index.php/auth/change_password'); ?>">Editar senha </a>
              <a class="dropdown-item" href="<?= base_url('index.php/usuario/editar'); ?>">Editar dados </a>
              <a class="dropdown-item" href="<?= base_url('index.php/auth/logout'); ?>">Sair</a>
            </div>
          </li>
        </div>
        <li class="nav-item">
          <a class="nav-link waves-effect waves-light">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect waves-light">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect waves-light">
          </a>
        </li>
      </ul>
    </ul>
  </div>
</nav>