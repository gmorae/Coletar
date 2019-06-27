                     <div class="md-form">
                        <i class="far fa-envelope prefix grey-text"></i>
                        <input type="text" id="cep" value="" name="cep" class="form-control" onblur="pesquisacep(this.value);" >
                        <label for="cep" class="font-weight-light" >C.E.P</label>
                    </div>

                    <div class="md-form">
                        <i class="fas fa-map-marker prefix grey-text"></i>
                        <input type="text" id="rua" value="" name="rua" class="form-control" >
                        <label for="rua" class="font-weight-light"></label>
                    </div>
                    
                    <div class="md-form">
                        <i class="fas fa-map-marker prefix grey-text"></i>
                        <input type="text" id="bairro" value="" name="bairro" class="form-control" >
                        <label for="bairro" class="font-weight-light"></label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-map-marker prefix grey-text"></i>
                        <input type="text" id="cidade" value="" name="cidade" class="form-control" >
                        <label for="cidade" class="font-weight-light"></label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-map-marker prefix grey-text"></i>
                        <input type="text" id="uf" value="" name="uf" class="form-control" >
                        <label for="uf" class="font-weight-light"></label>
                    </div>

                    <div class="md-form">
                        <i class="fas fa-list-ol prefix grey-text"></i>
                        <input type="text" id="numero" value="<?= set_value('') ?>" name="numero" class="form-control">
                        <label for="numero" class="font-weight-light">Número</label>
                    </div>
                    <div class="md-form">
                        <i class="far fa-building prefix grey-text"></i>
                        <input type="text" id="complemento" value="<?= set_value('') ?>" name="complemento" class="form-control">
                        <label for="complemento" class="font-weight-light">Complemento</label>
                    </div>

                    <div class="text-center py-4 mt-3">
                        <button class="btn btn-green" type="submit" onclick="alert('Obrigado por se cadastrar na nossa página!!  ');">Cadastrar</button>
                    </div>
                    </form>

            </div>
        </div>
    </div>
</div>

    