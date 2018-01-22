<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gpcmodel extends CI_Model {

	function __construct()
	{
		parent::__construct();//contructeur de la classe
	}

	//#################################################################### 07/08/2016 ##################################################################
	  //FORMATION ZONE

	function formation_get()	{
		$q = $this->db
		->select('*')
		->from('formation')
		->order_by('datemodif','desc')
		->limit(3)
		->get()->result();
		return $q;
		
	}
	 
	 public function formation_getitem($formationid){ //récupère une activité
	 
		$q = $this->db->select('*')
		->from('formation f')
		->join('user u','f.userid = u.userid','left')
		->where('f.formationid',$formationid)
		->get();
		if($q->num_rows()>0){
			return $q->row();
		}	
	 }

	public function formationins_add($params){
			return $this->db->insert('formationins',$params);
	}



	function check_ins($formationid, $email){
		return $q = $this->db
		->select('*')
		->from('formationins f')
		->where('formationid', $formationid)
		->where('email', $email)
		->get()->num_rows();
	}

	function check_in_newsletter($email){
		return $q = $this->db
		->select('*')
		->from('newsletter n')
		->where('email', $email)
		->get()->num_rows();
	}

	/*function document_get()	{
		$q = $this->db
		->select('*')
		->from('document d')
		->join('user u','u.userid = d.userid','left')
		->where('public',1)
		->order_by('d.datecreation','desc')
		->get();

		$q1 = $this->db
		->select('*')
		->from('document d')
		->join('user u','u.userid = d.userid','left')
		->where('public',0)
		->where('d.userid',$this->session->userdata('userid'))
		->order_by('d.datecreation','desc')
		->get();
		//documents public
		if($q->num_rows()>0){
			foreach($q->result() as $row){				
				$data[] = $row;
				$row->datecreation = date('d-m-Y', strtotime($row->datecreation));

			}
		}
		//documents privés de l'utilisateurs
		if($q1->num_rows()>0){
			foreach($q1->result() as $row){				
				$data[] = $row;
				$row->datecreation = date('d-m-Y', strtotime($row->datecreation));

			}
			return $data;
		}
	}
	*/
	function application_get()	{
		$q = $this->db
		->select('*')
		->select('a.titre as titre')
		->select('a.description as description')
		->select('c.titre as categorie')
		->from('applications a')
		->join('categorie c','c.categorieid = a.categorieid','left')
		->join('user u','u.userid = a.userid','left')
		->order_by('datecreationapp','desc')
		->get()->result();
		return $q;	
	}

	function cours_get($type)	{
		$q = $this->db
		->select('*')
		->select('cc.titre as titre')
		->select('cc.description as description')
		->select('c.titre as categorie')
		->from('cours cc')
		->join('categorie c','c.categorieid = cc.categorieid','left')
		->join('user u','u.userid = cc.userid','left')
		->order_by('cc.datecreation','desc')
		->where('cc.type',$type)
		->get()->result();
		return $q;	
	}


	function newsletter_add($params){
			return $this->db->insert('newsletter',$params);
	}


	

	function categoriecours_get()	{
		$q = $this->db
		->select('*')
		->from('categoriecours')
		->get()->result();
		return $q;
		
	}
	
/* Ajax pagination model */

	 function getCours($params = array()){
        $this->db->select('*')
		->from('cours c')
		->join('user u','c.userid = u.userid','left');

		 $this->db->like('type','pdf');

        //filter data by 
        if(!empty($params['search']['motcle'])){
            $this->db->like('titre',$params['search']['motcle']);
        }
        if(!empty($params['search']['categorie'])){
            $this->db->where('categorieid',$params['search']['categorie']);
        }

        /*sort data by ascending or desceding order
        if(!empty($params['search']['sortBy'])){
            $this->db->order_by('title',$params['search']['sortBy']);
        }else{
            $this->db->order_by('id','desc');
        }*/
       
        // Trier 
        $this->db->order_by('c.coursid','desc');

        //set start and limit
        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }
        //get records
        $query = $this->db->get();
        //return fetched data
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
    }

    function getCoursVideo($params = array()){
        $this->db->select('*')
		->from('cours c')
		->join('user u','c.userid = u.userid','left');

		 $this->db->like('type','video');

        //filter data by 
        if(!empty($params['search']['motcle'])){
            $this->db->like('titre',$params['search']['motcle']);
        }
        if(!empty($params['search']['categorie'])){
            $this->db->where('categorieid',$params['search']['categorie']);
        }

        /*sort data by ascending or desceding order
        if(!empty($params['search']['sortBy'])){
            $this->db->order_by('title',$params['search']['sortBy']);
        }else{
            $this->db->order_by('id','desc');
        }*/
       
        // Trier 
        $this->db->order_by('c.coursid','desc');

        //set start and limit
        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }
        //get records
        $query = $this->db->get();
        //return fetched data
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
    }

    /* Fin Ajax pagination model */

	
}



	 
	 