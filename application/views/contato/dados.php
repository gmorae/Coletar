<div class="container">
    <?= validation_errors('<div class="alert alert-danger mt-3">', '</div>'); ?>
    <div class="col-md-12">
        <section class="my-5">
            <h2 class="h1-responsive font-weight-bold text-center my-5">Contato</h2>
            <div class="row">
                <div class="col-lg-5 mb-lg-0 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST">
                                <p class="dark-grey-text text-center">Entraremos em contato dentro de 24 horas</p>
                                <!-- Body -->
                                <div class="md-form">
                                    <i class="fas fa-user prefix grey-text"></i>
                                    <input type="text" id="nome" value="<?= set_value('nome'); ?>" name="nome" class="form-control">
                                    <label for="nome">Nome completo</label>
                                </div>
                                <div class="md-form">
                                    <i class="fas fa-envelope prefix grey-text"></i>
                                    <input type="text" id="email" value="<?= set_value('email'); ?>" name="email" class="form-control">
                                    <label for="email">Email</label>
                                </div>
                                <div class="md-form">
                                    <i class="fas fa-tag prefix grey-text"></i>
                                    <input type="text" id="assunto" value="<?= set_value('assunto'); ?>" name="assunto" class="form-control">
                                    <label for="assunto">Assunto</label>
                                </div>
                                <div class="md-form">
                                    <i class="fas fa-pencil-alt prefix grey-text"></i>
                                    <textarea id="mensagem" value="<?= set_value('mensagem'); ?>" name="mensagem" class="form-control md-textarea" rows="3"></textarea>
                                    <label for="mensagem">Mensagem</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-light-blue">enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
