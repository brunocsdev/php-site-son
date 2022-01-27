<h3 class="mb-5">Editar Usuário</h3>

<div>
    <dl class="row">
        <dt class="col-sm-3">Email</dt>
        <dd class="col-sm-9"><?php echo $data['user']['email']; ?></dd>

        <dt class="col-sm-3">Criado em</dt>
        <dd class="col-sm-9"><?php echo $data['user']['created']; ?></dd>

        <dt class="col-sm-3">Atualizado em</dt>
        <dd class="col-sm-9"><?php echo $data['user']['updated']; ?></dd>
    </dl>

    <p>
        <a href="/admin/users/<?php echo $data['user']['id']; ?>/edit" class="btn btn-primary">Editar</a>
        <a href="/admin/users/<?php echo $data['user']['id']; ?>/delete" class="btn btn-danger confirm">Remover</a>
    </p>

    <hr>
    <br><a href="/admin/users" class="btn btn-secondary mb-5">Voltar</a>
</div>