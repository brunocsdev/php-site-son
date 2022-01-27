<!--<div class="card bg-dark text-white">
    <div class="card-body">
        <h5 class="card-title text-center">Autenticação</h5>

        <form method="post">
            <div class="form-group">
                <label for="authLogin">Email</label>
                <input type="email" class="form-control" name="email" id="authLogin" placeholder="Seu email">
            </div>
            <div class="form-group">
                <label for="authPassword">Senha</label>
                <input type="password" class="form-control" name="password" id="authLogin" placeholder="Sua senha">
            </div>
            <input type="submit" value="Acessar" class="btn btn-primary btn-lg">
        </form>
    </div>
</div>-->

<!--<div class="login-page">
    <div class="form">
        <form class="login-form" method="post" action="#">
            <input type="text" placeholder="Email"/>
            <input type="password" placeholder="Senha"/>
            <button type="submit"> Entrar</button>
        </form>
    </div>
</div>-->

<form method="post">
    <h1>Autenticação</h1>
    <div class="inset">
        <p>
            <label for="authLogin">Email</label>
            <input type="text" name="email" id="authLogin">
        </p>
        <p>
            <label for="authPassword">Senha</label>
            <input type="password" name="password" id="authPassword ">
        </p>
        <p>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Lembar-me</label>
        </p>
    </div>
    <p class="p-container">
        <span> <a href="#"> Recuperar senha? </a></span>
        <input type="submit" name="go" id="go" value="Entrar">
    </p>
</form>