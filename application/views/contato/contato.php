<div class="container">
    <?= validation_errors('<div class="alert alert-danger">', '</div>'); ?>
    <div class="row">
        <div class="mx-auto">
            <section class="mb-4 mt-5">
                <h2 class="h1-responsive font-weight text-center my-4">Contato</h2>
                <div col-md-12>
                    <p class="text-center w-responsive mx-auto mb-5">Qualquer duvidas entre em contato. <br>Entramos em contato dentro de 24 horas!</p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 mb-md-0 mb-5">
                            <form method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="nome" name="nome" value="<?= set_value('nome'); ?>" class="form-control">
                                            <label for="nome" class="">Nome</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="email" name="email" value="<?= set_value('email'); ?>" class="form-control">
                                            <label for="email" class="">Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <input type="text" id="assunto" name="assunto" value="<?= set_value('assunto'); ?>" class="form-control">
                                            <label for="assunto" class="">Assunto</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form">
                                            <textarea type="text" id="mensagem" name="mensagem" value="<?= set_value('mensagem'); ?>" rows="2" class="form-control md-textarea"></textarea>
                                            <label for="mensagem">Mensagem</label>
                                        </div>
                                    </div>
                                </div>
                                <?php function envia()
                                {
                                    echo '<p class="alert-success"> Mensagem enviada </p>';
                                } ?>

                                <a href="<?= base_url();?>" >
                                    <button type="submit" class="btn btn-green" onclick="alert('Obrigado por entrar em contato, retornaremos em breve ')">Enviar</button>
                                </a>
                            </form>
                        </div>
                        <div class="col-md-3 text-center">
                            <ul class="list-unstyled mb-0 mt-5">
                                <!-- <li>
                                    <a href="https://www.google.com/maps/place/R.+Uhland,+991+-+Vila+Ema,+S%C3%A3o+Paulo+-+SP,+03283-000/@-23.5927239,-46.5353019,3a,75y,62.38h,86.16t/data=!3m6!1e1!3m4!1sdMN1UrttUajjCSSnW8r1Sg!2e0!7i13312!8i6656!4m5!3m4!1s0x94ce5d74d15adc05:0x3a8cbde0c9677b95!8m2!3d-23.5926936!4d-46.5351906" style="color: black" target="_blanck">
                                        <i class="fas fa-map-marker-alt fa-2x"></i>
                                        <p>R. Uhland, 991  Vila Ema</p>
                                    </a>
                                </li> -->
                                <li>
                                    <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5511954938916&text=Gostaria de mais informações" style="color: black" target="_blanck">
                                        <i class="fab fa-whatsapp fa-2x"></i>
                                        <p>(11) 95493-8916</p>
                                    </a>
                                </li>
                                <li>
                                    <a style="color: black" target="_blanck">
                                        <i class="fas fa-phone mt-4 fa-2x"></i>
                                        <p>(11) 94997-0853</p>
                                    </a>
                                </li>
                                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                    <p>coletar@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>