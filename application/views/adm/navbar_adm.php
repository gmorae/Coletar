
<nav class="mb-1 navbar navbar-expand-lg navbar-dark black" style="background: linear-gradient(to right, #ffffff 20%, #8bc34a 100%);">
  <a class="navbar-brand mb-2 mt-2 ml-md-5" style="width: 90pt" href="<?= base_url('index.php/adm'); ?>"><img class="img-fluid  ml-md-3" src="<?= base_url('imagens/logo.png') ?>" alt="Sample image"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fas fa-ellipsis-v black-text"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav mr-auto mt-2 ml-md-2">
      <li class="nav-item active">
        <a class="nav-link ml-md-2 black-text" style="font-size: 20px;" href="<?= base_url('index.php/Adm'); ?>">Home
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link ml-md-2 black-text" style="font-size: 20px" href="<?= base_url('index.php/auth/'); ?>">Lista de usuários
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link ml-md-2 black-text" style="font-size: 20px"  href="<?= base_url('index.php/adm/listaBuscar'); ?>">Lista de oleo
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link ml-md-2 black-text" style="font-size: 20px"  href="<?= base_url('index.php/adm/listarDuvidas'); ?>">Mensagem de contato
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link ml-md-2 black-text" style="font-size: 20px"  href="<?= base_url('index.php/adm/bairros'); ?>">Bairros
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link black-text" style="font-size: 20px" href="<?= base_url('index.php/auth/logout'); ?>">Sair
        </a>
      </li>
    </ul>   
    </ul>
  </div>
</nav>
