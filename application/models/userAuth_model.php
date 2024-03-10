<?php
defined('BASEPATH') or exit('No direct script access allowed');

class userAuth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->helper('url');
    }

    public function userCheck($user,$password)
    {
        
    }
}