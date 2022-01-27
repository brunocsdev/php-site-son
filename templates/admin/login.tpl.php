<!doctype html>
<html lang="pt_BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Pnotify CSS -->
    <link rel="stylesheet" href="/resource/pnotify/pnotify.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Custom CSS for form login -->
    <link rel="stylesheet" href="/css/form-login.css">

    <title>Painel Administrativo - SoN!</title>
</head>
<body class="d-flex flex-column body-bat">

<div id="header">
    <nav class="navbar navbar-dark bg-dark">

        <span>
            <a href="/admin" class="navbar-brand">AdminSON</a>
            <span class="navbar-text">
                Painel Administrativo da School of Net
            </span>
        </span>

        <a href="/" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Site</a>

    </nav>
</div>
<div id="main">
    <div class="row justify-content-center">
        <div id="content" class="col-4 align-self-center">
            <?php include $content ?>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="/resource/pnotify/pnotify.js"></script>

<script>
    <?php flash() ?>
</script>
</body>
</html>