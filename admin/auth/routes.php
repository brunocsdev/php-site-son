<?php

require __DIR__.'/db.php';

if(resolve('/admin/auth/login')){

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        if($login()){
            flash('Autenticado com Sucesso', 'success');
            return header('location: /admin');
        }

        flash('Dados Inválidos', 'error');

    }

    render('admin/auth/login', 'admin/login');

}elseif(resolve('/admin/auth/logout')){

    logout();

}else{
    http_response_code(404);
    echo 'Erro 404: página não encontrada';
}