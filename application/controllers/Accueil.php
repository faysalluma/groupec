<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('gpcmodel');

        //Erreur 1 & 1
        date_default_timezone_set ("Europe/Berlin");
        setlocale (LC_TIME, 'fr_FR.utf8','fra');
    }

	public function index()
	{

        // Gérer affichage apres inscription a une formation
        $nom=$this->input->post('nom');
        if(isset($nom))
        {
            $params = array('nom' =>$this->input->post('nom') , 'prenoms' =>$this->input->post('prenoms'), 'email' =>$this->input->post('email'), 'sexe' =>$this->input->post('sexe'), 'adresse' =>$this->input->post('adresse'), 'telephone' =>$this->input->post('telephone'), 'dateajout' =>date('Y-m-d H:i:s'), 'formationid' =>$this->input->post('formationid'));
        
           if($this->gpcmodel->formationins_add($params))
           {
             $data['resultat']="formationins";
           }
        }
        
        // Afficher les éléments de la page
        $data['formation']=$this->gpcmodel->formation_get();
        $data['videos']=$this->gpcmodel->cours_get("video");
		 // load view
        $data['content']='index';
        $this->load->view('template/content',$data);
	}

    public function contact()
    {
        extract($_POST); 
        $nom=nl2br(stripslashes($nom));
        $email=nl2br(stripslashes($email));
        $telephone=nl2br(stripslashes($tel));
        $message=nl2br(stripslashes($message));
        
        $destinataire="groupectechnologies@gmail.com";
        $sujet="Contact de : ".$email; /* Formulaire de contact */
        $entete='From : '.$email.'';
        $message='Nom et prénoms : '.$nom.' '."\n".' Email : '.$email.' '."\n".'Message : '.$message.'';
        
        if(mail($destinataire, $sujet, $message, $entete))
        {
             $data['resultat']="contact";
        }
        else
        {
            $data['resultat']="erreur";
        }

         // Afficher les éléments de la page
        $data['formation']=$this->gpcmodel->formation_get();
        $data['videos']=$this->gpcmodel->cours_get("video");
        // load view
        $data['content']='index';
        $this->load->view('template/content',$data);

    }


     public function verifier_newsletter()
      {

        $res=$this->gpcmodel->check_in_newsletter($this->input->get('email'));
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

      public function addnewsletter()
      {

        $params = array('email' => $this->input->get('email'), 'dateajout' => date('Y-m-d'));
        $res=$this->gpcmodel->newsletter_add($params);
        
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
