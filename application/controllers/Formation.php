<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formation extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
       // $this->load->model('gpcmodel');
    }

	public function index()
	{


		 // load view
        $data['content']='formation';
        $this->load->view('template/content',$data);
	}
}
