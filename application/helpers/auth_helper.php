<?php


//método para bloquear o acesso as páginas
function permission() 
{
    $ci = get_instance();
    $loggedUser = $ci->session->userdata("logged_user");


    //se o usuário não estiver logado, enviar a mensagem no flashdata e redirecionar para login
    if(!$loggedUser) {
        $ci->session->set_flashdata("danger", "Você precisa estar logado para acessar esta página");
        redirect("login");
    }
    return $loggedUser;
}