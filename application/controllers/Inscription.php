<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        
        //$this->load->library('pagination');
        //$this->load->model('pagination_model');

        //Erreur 1 & 1
        date_default_timezone_set ("Europe/Berlin");
        setlocale (LC_TIME, 'fr_FR.utf8','fra');
        
    }

	public function index()
	{


		 // load view
        $data['content']='inscription';
        $this->load->view('template/content',$data);
	}
}
