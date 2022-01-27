<h3 class="mb-5">Editar Usuário</h3>

<form method="post">
    <div class="form-group">
        <label for="usersEmail">Email</label>
        <input name="email" id="usersEmail" type="email" class="form-control" placeholder="Seu email" value="<?php echo $data['user']['email']; ?>">
    </div>
    <div class="form-group">
        <label for="usersPass">Email</label>
        <input name="password" id="usersPass" type="password" class="form-control" placeholder="Sua senha" value="">
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

<hr>

<br><a href="/admin/users/<?php echo $data['user']['id']; ?>" class="btn btn-secondary mb-5">Voltar</a>