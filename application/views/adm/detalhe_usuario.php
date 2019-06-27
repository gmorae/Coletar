<div class="container mt-5">
    <div class="card mx-auto col-md-6">
        <div class="card-header mt-3">
            <h4 class="card-title text-center"><a><?= $usuario['first_name'] ?></a></h4>
        </div>
        <div class="card-body">
            <p class="card-title"><a><b>Email:</b> <?= $usuario['email']  ?></a></p>
            <p class="card-title"><a><b>C.E.P:</b> <?= $usuario['cep']  ?></a></p>
            <p class="card-title"><a><b>Endereço:</b> <?= $usuario['endereco'] . ', ' . $usuario['numero'] . ', ' . $usuario['bairro']  ?></a></p>
            <p class="card-title"><a><b>Complemento:</b> <?= $usuario['complemento'] ? $usuario['complemento'] : 'Sem complemento' ?></a></p>
            <p class="card-title"><a><b>Cidade:</b> <?= $usuario['cidade']  ?></a></p>
            <p class="card-title"><a><b>Estado:</b> <?= $usuario['estado']  ?></a></p>
            <p class="card-title"><a><b>Celular:</b> <?= $usuario['phone']  ?></a></p>
            <?php $data = date('d/m/Y', strtotime($usuario['cadastro'])); ?>
            <p class="card-title"><a><b>Dia cadastrado:</b> <?= $data ?></a></p>
            <p class="card-title"><a><b>Total de óleo coletado:</b> <?= $usuario['sum(oleo)'] ? $usuario['sum(oleo)'] : '0' ?> litros</a></p>
            <p class="card-title"><a><b>Total de óleo para coletar:</b> <?= $somaOleo['sum(oleo)'] ? $somaOleo['sum(oleo)'] : '0' ?> litros</a></p>
        </div>
    </div>
</div>