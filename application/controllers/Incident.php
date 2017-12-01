<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Incident extends CI_Controller {
	/**	
	 *	
	 */		
	function __construct(){
		parent::__construct();
		// Security helper included for xss_clean on parameters to prevent 
		// forbidden characters reaching DB level.
		$this->load->helper('html');
		$this->load->helper('security');	
		$this->load->helper('cookie');
		
		$this->load->library('parser');		
		
		$this->load->model('Incidents_model','');						
	}
	
	// 
	public function index()
	{			
	}	
	
	public function raise_incident(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('incident_name', 'Incident Name', 'required');
		$this->form_validation->set_rules('incident_location', 'Incident Location', 'required');
		
		//$this->form_validation->set_rules('incident_ty_cde','Incident Type','required|callback_check_select_default');
		//$this->form_validation->set_message('check_select_default', 'Please select valid incident type.');

		if ($this->form_validation->run() == FALSE)
		{			
			$data['incident_ty_cdes'] = $this->Incidents_model->get_incident_types();											
			$headerData['title'] = "Incident Detail Form";
			
			$nightCookie = $this->input->cookie('nightCookie');
			
			$headerData['dayNight'] = $nightCookie=="" ? "day" : "night";
			$data['dayNight'] = $nightCookie=="" ? "day" : "night";
			
			$this->parser->parse('header', $headerData);
			$this->parser->parse('raise_incident',$data);
			$this->parser->parse('footer', $headerData);
		}
		else
		{	
			$DBdata = array(
				"incident_name" => $this->input->post('incident_name'),
				"incident_location" => $this->input->post('incident_location'),
				"incident_gps_coords" => $this->input->post('incident_gps_coords'),
				"incident_hazards" => $this->input->post('incident_hazards'),
				"incident_access_routes" => $this->input->post('incident_access_routes'),
				"incident_casualties" => $this->input->post('incident_casualties'),
				"incident_ty_cde" => $this->input->post('incident_ty_cde')
				);
			$incidentId = $this->Incidents_model->create_incident($DBdata);
			redirect("detail_incident/".$incidentId);			
		}		
	}
	
	public function detail_incident($incidentId){		
		$nightCookie = $this->input->cookie('nightCookie');
		
		$data['details'] = $this->Incidents_model->get_incident_by_id($incidentId);							
		$data['incident_id']=$incidentId;		
		$headerData['title'] = "Choose an Action";
		
		$headerData['dayNight'] = $nightCookie=="" ? "day" : "night";
		$data['dayNight'] = $nightCookie=="" ? "day" : "night";
		
		$this->parser->parse('header', $headerData);
		$this->parser->parse('detail_incident',$data);
		$this->parser->parse('footer', $headerData);
	}
	
	public function message_incident($incidentId){		
		$nightCookie = $this->input->cookie('nightCookie');
		
		$data['details'] = $this->Incidents_model->get_incident_by_id($incidentId);							
		$data['incident_id'] = $incidentId;				
		$headerData['title'] = "Message Incident";
				
		$headerData['dayNight'] = $nightCookie=="" ? "day" : "night";
		$data['dayNight'] = $nightCookie=="" ? "day" : "night";
			
		$this->parser->parse('header', $headerData);
		$this->parser->parse('message_incident',$data);		
		$this->parser->parse('footer', $headerData);

	}
	
	public function resource_incident(){
		$nightCookie = $this->input->cookie('nightCookie');
		
		$headerData['title'] = "Resources";						
		$headerData['dayNight'] = $nightCookie=="" ? "day" : "night";
		$data['dayNight'] = $nightCookie=="" ? "day" : "night";
		
		$this->parser->parse('header', $headerData);
		$this->parser->parse('resources_incident',$headerData);
		$this->parser->parse('footer', $headerData);
	}
	
}