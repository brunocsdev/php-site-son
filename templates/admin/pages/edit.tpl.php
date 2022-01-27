<h3>Edição de páginas</h3>

<form action="" method="post">

    <div class="form-group">
        <label for="pagesTitle">Título</label>
        <input name="title" id="pagesTitle" type="text" class="form-control"
               placeholder="informe o título" required value="<?php echo $data['page']['title']; ?>">
    </div>

    <div class="form-group">
        <label for="pagesURL">URL</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">/</span>
            </div>
            <input name="url" id="pagesUrl" type="text" class="form-control"
                   value="<?php echo $data['page']['url']; ?>">
        </div>
    </div>

    <div class="form-group">
        //funcao htmlentities util para evitar erros na exibição do html
        <input id="pagesBody" type="hidden" name="body" value="<?php echo htmlentities($data['page']['body']);?>">
        <trix-editor input="pagesBody"></trix-editor>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
<hr>

<br><a href="/admin/pages/<?php echo $data['page']['id']; ?>" class="btn btn-secondary mb-5">Voltar</a>