<?php

class Message_model extends CI_Model{
	//is_read, intended user, message subject, body 
	
	// Call CI_Model constructor
	function __construct(){
		parent::__construct();
					
		}
		
	//Get incidents At-A-Glance
	public function get_incident_AAG()
	{			
		$this->db->select('i.incident_id incident_id, i.incident_name incident_name, i.incident_location incident_location, i_stat_ldm.lookup_value incident_status');
		$this->db->from('incidents as i');
		$this->db->join('lookup_data_mgmt as i_ty_ldm', 'i_ty_ldm.lookup_id  = i.Incident_ty_cde');		
		$this->db->join('lookup_data_mgmt i_stat_ldm','i_stat_ldm.lookup_id = i.incident_status_cde');
		
		//$query = $this->db->get();
		//return $this->table->generate($query);
		//return $this->db->get();
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function get_agencies_by_incident_id($id){
		$this->db->select('a.agency_id agency_id, a.agency_desc agency_desc, a.contact_email agency_email'); //TODO:JW - don't pass emails back to UI
		$this->db->from('incidents i');
		$this->db->join('incident_agency ia', 'ia.incident_ty_cde=i.incident_ty_cde');		
		$this->db->join('agency a', 'ia.agency_id  = a.agency_id');		
		$this->db->where('i.incident_id',$id); 
		$query = $this->db->get();	
		return $query->result_array();
	}
	public function get_incident_details($id){		
		$this->db->select('i.*, i_ty_ldm.lookup_value type, i_stat_ldm.lookup_value status');
		$this->db->from('incidents as i');
		$this->db->join('lookup_data_mgmt as i_ty_ldm', 'i_ty_ldm.lookup_id  = i.incident_ty_cde');		
		$this->db->join('lookup_data_mgmt i_stat_ldm','i_stat_ldm.lookup_id = i.incident_status_cde');
		$this->db->where('i.incident_id',$id); 

		$query = $this->db->get();	
		return $query->result_array(); //TODO:JW - Should really switch over to defining an incident class and seeding the results with that 
	}
}