<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('gpcmodel');
        $this->load->library('pagination');

        /* PaginationAjax */
        $this->load->library('Ajax_pagination');
        $this->perPage = 8;
    }

	public function index()
	{

          /* AJAX PAGINATION CODE */

          //total rows count
          $totalRec = count($this->gpcmodel->getCours());

          //pagination configuration
           $config['target']      = '#postList';
          $config['base_url']    = site_url('Pdf/ajaxPaginationData');
          $config['total_rows']  = $totalRec;
          $config['per_page']    = $this->perPage;
          $config['link_func']   = 'searchFilter';
          $this->ajax_pagination->initialize($config);
          
          //get the posts data
          $data['total_rows'] =  $totalRec;
          $data['posts'] = $this->gpcmodel->getCours(array('limit'=>$this->perPage));

        /* FIN AJAX PAGINATION CODE */

        $data['categoriecours']=$this->gpcmodel->categoriecours_get();
        $data['cours']=$this->gpcmodel->cours_get("pdf");

		 // load view
        $data['content']='pdf';
        $this->load->view('template/content',$data);
	}

    /* Ajax Pagination  code */
      function ajaxPaginationData(){

        $conditions = array();
        
        //calc offset number
        $page = $this->input->post('page');
        if(!$page){
            $offset = 0;
        }else{
            $offset = $page;
        }
        
        //set conditions for search
        $categorie = $this->input->post('categorie');
        $motcle = $this->input->post('motcle');
        if(!empty($categorie)){
            $conditions['search']['categorie'] = $categorie;
        }
        if(!empty($motcle)){
            $conditions['search']['motcle'] = $motcle;
        }
        
        //total rows count
        $totalRec = count($this->gpcmodel->getCours($conditions));


        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = site_url('Pdf/ajaxPaginationData');
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $config['link_func']   = 'searchFilter';
        $this->ajax_pagination->initialize($config);
        
        //set start and limit
        $conditions['start'] = $offset;
        $conditions['limit'] = $this->perPage;
        
        //get posts data
        $data['total_rows'] =  $totalRec;
        $data['posts'] = $this->gpcmodel->getCours($conditions);
        

        $data['categoriecours']=$this->gpcmodel->categoriecours_get();
        $data['cours']=$this->gpcmodel->cours_get("pdf");


        // load view
        $this->load->view('ajax-pagination-data',$data);
      }

    /* Fin Ajax pagination code */


}
