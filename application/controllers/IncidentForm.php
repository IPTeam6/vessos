<?php

class IncidentForm extends CI_Controller {

        public function index()
        {
                $this->load->library('form_validation');

                $this->form_validation->set_rules('rank', 'Rank', 'required');
                $this->form_validation->set_rules('location', 'Incident Location', 'required');
                $this->form_validation->set_rules('agencies', 'Agency', 'required',array('required' => 'Please select at least one %s.'));                

                if ($this->form_validation->run() == FALSE)
                {				
												$data['title'] = "Incident Detail Form";
			
												$this->parser->parse('header', $data);
                        $this->load->view('Incident-contactForm');
                }
                else
                {
                        $this->load->view('formsuccess');
                }
        }
}