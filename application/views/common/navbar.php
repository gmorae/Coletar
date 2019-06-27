<nav class="mb-1 navbar navbar-expand-lg navbar-dark black" style="background: linear-gradient(to right, #ffffff 20%, #8bc34a 100%);">
  <a class="navbar-brand mb-2 mt-2 ml-md-5" style="width: 90pt" href="<?= base_url(); ?>"><img class="img-fluid  ml-md-3" src="<?= base_url('imagens/logo.png') ?>" alt="Sample image"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fas fa-bars black-text"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto mt-2 ml-md-2">
      <li class="nav-item active">
        <a class="nav-link ml-md-2 black-text" style="font-size: 20px;" href="<?= base_url(); ?>">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link ml-md-2 black-text" style="font-size: 20px" href="<?= base_url('index.php/Home/empresa'); ?>">Empresa
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link ml-md-2 black-text" style="font-size: 20px" href="<?= base_url('index.php/Home/servicos'); ?>">Serviços
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link black-text" style="font-size: 20px" href="<?= base_url('index.php/Home/contatos/'); ?>">Contato
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link black-text" style="font-size: 20px" href="<?= base_url('index.php/auth/create_user'); ?>">Cadastre-se
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link ml-md-2 black-text" style="font-size: 20px" href="<?= base_url('index.php/auth/login'); ?>">Login
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link waves-effect waves-light" href="<?= ('https://www.facebook.com/coletarsp/') ?>" target="_blank" style="font-size: 15pt; ">
            <i class="fab fa-facebook-f black-text"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect waves-light" href="<?= ('https://www.instagram.com/coletarsp/') ?>" target="_blank" style="font-size: 15pt; ">
            <i class="fab fa-instagram black-text"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect waves-light" href="<?= ('https://api.whatsapp.com/send?1=pt_BR&phone=5511954938916&text=Queria uma informação sobre um produto') ?>" target="_blank" style="font-size: 17pt; ">
            <i class="fab fa-whatsapp black-text"></i>
          </a>
        </li>
      </ul>
  </div>
</nav>
<!--/.Navbar -->