<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('gpcmodel');
        
        //Erreur 1 & 1
        date_default_timezone_set ("Europe/Berlin");
        setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
    }

	public function index($formationid=null)
	{

        $data['formation']=$this->gpcmodel->formation_getitem($formationid);

		 // load view
        $data['content']='detail';
        $this->load->view('template/content',$data);
	}

      public function verifier_inscrit()
      {

        $res=$this->gpcmodel->check_ins($this->input->get('formationid'), $this->input->get('email'));
        //var_dump($res);
        
          //s'il s'agit d'une requete de type ajax
          if($this->input->is_ajax_request()){
              $response = array(
                  'success'=>true,//état de la requete
                  'result'=>$res,
              );
              //encodage du tableau response au format json et sortie de code
              echo json_encode($response);exit;
          }else{//si la requete n'est pas de type ajax
                 $this->index(); // redirect();exit;//redirection et sortie de code
          }

      }

}
