<?php

class Incidents_model extends CI_Model{
	var $incident_id='';
	var $incident_name='';
	var $incident_location='';
	var $incident_gps_coords='';	
	var $incident_eircode='';	
	var $incident_access_routes='';
	var $incident_casualties='';
	var $incident_status_cde='';
	var $incident_ty_cde='';
	var $created_by='';
	var $created_dte='';
	var $updated_by='';
	var $updated_dte='';
	
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
	
	public function create_incident($DBdata){
		$this->incident_name    			= $DBdata['incident_name'];
		$this->incident_location 			= $DBdata['incident_location'];		
		$this->incident_ty_cde				= $DBdata['incident_ty_cde'];
		$this->incident_gps_coords		= $DBdata['incident_gps_coords'];
		$this->incident_hazards    		= $DBdata['incident_hazards'];
		$this->incident_access_routes	= $DBdata['incident_access_routes'];
		$this->incident_casualties    = $DBdata['incident_casualties'];
		
		$this->incident_status_cde		= 200; //active 
		$this->created_dte						= time();

		$this->db->insert('incidents', $this);
		
		return $this->db->insert_id();
	}
	
	public function get_incident_types(){
		$this->db->select('lookup_id, lookup_desc');
		$this->db->from('lookup_data_mgmt');
		$this->db->where('lookup_parent_cde',4); 
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function get_contacts_by_incident($id){
		$this->db->select('a.agency_id agency_id, a.agency_desc agency_desc');
		$this->db->from('incident_agency ia');
		$this->db->join('agency a', 'ia.agency_id  = a.agency_id');		
		$this->db->where('ia.incident_ty_cde',$id); 
		$query = $this->db->get();	
		return $query->result_array();
	}
	
	public function get_incident_by_id($incidentId){
		$this->db->select('i.*, i_ty_ldm.lookup_value type, i_stat_ldm.lookup_value status');
		$this->db->from('incidents as i');
		$this->db->join('lookup_data_mgmt as i_ty_ldm', 'i_ty_ldm.lookup_id  = i.incident_ty_cde');		
		$this->db->join('lookup_data_mgmt i_stat_ldm','i_stat_ldm.lookup_id = i.incident_status_cde');
		$this->db->where('i.incident_id',$incidentId); 

		$query = $this->db->get();	
		return $query->result_array();
							
	}
}

?>