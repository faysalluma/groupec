<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        
        //$this->load->library('pagination');
        //$this->load->model('pagination_model');
    }

	public function index()
	{


		 // load view
        $data['content']='login';
        $this->load->view('template/content',$data);
	}
}
