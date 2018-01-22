<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('gpcmodel');
    }

	public function index()
	{

        // Afficher les éléments de la page
        $data['application']=$this->gpcmodel->application_get();

		 // load view
        $data['content']='application';
        $this->load->view('template/content',$data);
	}
}
