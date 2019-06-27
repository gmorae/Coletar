<div class="container" id="comercio">
    <section class="my-5">
        <div class="row">
            <div class="col-lg-7">
                <h4 class="font-weight-bold mb-5" style="color: green"><i class="fas fa-city pr-2"></i><?= $titulo ?></h4>
                <p><?= $texto ?></p>
                <P>Para mais informações entre em contato!</P>
                <p>
                    <i class="fas fa-envelope mr-3"></i> coletar@gmail.com</p>
                <p>
                    <a class="dark-grey-text" href="https://api.whatsapp.com/send?1=pt_BR&phone=5511954938916&text=Gostaria de saber mais informações sobre os serviços oferecidos" target="_blanck">
                        <i class="fab fa-whatsapp mr-3"></i> +55 11 95493-8916
                    </a>
                </p>
                <p>
                    <a class="dark-grey-text" href="<?= base_url('index.php/usuario') ?>">
                    <button type="button" class="btn btn-outline-success btn-md waves-effect">doar</button>
                    </a>
                </p>

            </div>
            <div class="col-lg-5">
                <div class="view overlay rounded z-depth-2">
                    <img class="img-fluid" src="<?= $foto ?>" alt="Imagem">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
            </div>
        </div>
        <hr class="my-5">
        <section>
</div>