<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sitehome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('userAuth_model');
    }


    public function index()
    {
        $data['pagetitle'] = "Gestion HR : Sitehome";
        $this->loadview('sitehome/sitehome', $data);
    }

    public function userauth()
    {
        $user = $_POST['user'];
        $password = $_POST['password'];

        $loginStatus = $this->userAuth_model->userCheck($user,$password);

        echo json_encode($loginStatus);
    }
}
