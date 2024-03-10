<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }


    public function index()
    {
        $data['pagetitle'] = "Gestion HR : Dashboard";
        $this->loadview('common/dashboard', $data);
    }

}