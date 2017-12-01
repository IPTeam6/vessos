<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {
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
		
		$this->load->model('Message_model','');				
	}
	
	public function implodeIncidentDetails($id){
		$details = $this->Message_model->get_incident_details($id)[0];				
		//var_dump($details);
		$message = "Incident ID: ".$details["incident_id"]."<br>";
		$message .= "Incident Name: ".$details["incident_name"]."<br>";
		$message .= "Incident Location: ".$details["incident_location"]."<br>";
		$message .= "GPS Coordinates: ".$details["incident_gps_coords"]."<br>";
		$message .= "Incident EIRCODE: ".$details["incident_eircode"]."<br>";
		$message .= "Incident Acces Routes: ".$details["incident_access_routes"]."<br>";
		$message .= "Incident Casualties: ".$details["incident_casualties"]."<br>";
		$message .= "Incident Status: ".$details["incident_status_cde"]."<br>";
		$message .= "Incident last updated: ".$details["updated_dte"]."<br>";
		return $message;
	}
	
	public function index(){	
		$headerData['title'] = "Messages";			
		$this->parser->parse('header', $headerData);
	}
	
	public function message_inbox(){	
		$headerData['title'] = "Messages Inbox";			
		$nightCookie = $this->input->cookie('nightCookie');
		$headerData['dayNight'] = $nightCookie=="" ? "day" : "night";
		$this->parser->parse('header', $headerData);		
		$this->parser->parse('message_inbox', $headerData);		
		$this->parser->parse('footer', $headerData);				
	}
	
	public function message_content(){	
		$headerData['title'] = "Messages Content";			
		$nightCookie = $this->input->cookie('nightCookie');
		$headerData['dayNight'] = $nightCookie=="" ? "day" : "night";		
		
		$this->parser->parse('header', $headerData);		
		$this->parser->parse('message_content', $headerData);		
		$this->parser->parse('footer', $headerData);		
	}
	
		
	public function message_ves($incident_id){
		$this->load->library('form_validation');		

		$this->form_validation->set_rules('message_subject', 'Message Subject', 'required');
		$this->form_validation->set_rules('message_body', 'Message Body', 'required');
		$this->form_validation->set_rules('agencies[]', 'VES', 'required',array('required' => 'Please select at least one %s.'));                

		
		if ($this->form_validation->run() == FALSE)
		{				
			$headerData['title'] = "Messages VES";	
			$nightCookie = $this->input->cookie('nightCookie');
			$headerData['dayNight'] = $nightCookie=="" ? "day" : "night";
			$data['dayNight'] = $nightCookie=="" ? "day" : "night";

			$this->parser->parse('header', $headerData);	
			$data['agencies'] = $this->Message_model->get_agencies_by_incident_id($incident_id);			
			$data['incident_id'] = $incident_id;
			$this->parser->parse('message_ves', $data);				
			$this->parser->parse('footer', $headerData);				
		}
		else
		{					
			$to = implode(",", $this->input->post('agencies'));
			$cc = "John Walshe <john.walshe@webelevate.ie>";
			$subject = "VES S-O-S Message";

			$message = "<html><head>
				<title><h1>".$this->input->post('message_subject')."</h1></title>
				</head>
				<body>".$this->input->post('message_body')."<br>";			
			
			if( $this->input->post('attach_details')){
				$message.="<hr><h2>Incident Details</h2>".$this->implodeIncidentDetails($incident_id);
			}
			
			$message.= "</body></html>";			

			$this->load->library('email'); //Set in config/email.php
			$this->email->from('test1@fireandrescue.webelevate.net', 'Fire And Rescue App');
			$this->email->to($to);
			$this->email->cc($cc);
			//$this->email->bcc('them@their-example.com');
			$this->email->subject($this->input->post('message_subject'));
			$this->email->message($message);
			if(!$this->email->send()){
				//TODO:JW - Set flashback message, then parse 
				//redirect("message_ves/");			
			} else{
				redirect("detail_incident/".$incident_id);			
			}	
		}		
	}
	
}