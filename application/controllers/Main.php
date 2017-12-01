<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
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
	
	// Generic end point 
	public function index()
	{			

		$data['dbItems'] = $this->Incidents_model->get_incident_AAG();						
		$data['title'] = "Incidents";
		$nightCookie = $this->input->cookie('nightCookie');		
		
		$headerData['dayNight'] = $nightCookie=="" ? "day" : "night";
		$data['dayNight'] = $nightCookie=="" ? "day" : "night";
		
		$this->parser->parse('header', $headerData);
		$this->parser->parse('index', $data);
		$this->parser->parse('footer', $data);
       
		/*
		foreach($data['dbItems'] as $row){
			var_dump($row);
			echo "<br><br>";
		}		
		$data['AAG_Table'] = $this->table->generate($results);
		$this->load->view('index',$data);			*/
	}	
}

