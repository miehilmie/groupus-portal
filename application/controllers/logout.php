<?php

class Logout extends CI_Controller {
    function index() {
        delete_cookie('u');
        delete_cookie('p');
        $this->session->sess_destroy();
        redirect('');
    }
}