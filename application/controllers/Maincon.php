<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maincon extends CI_Controller {
	

	public function event_list()
	{
		$this->load->model('event_model');
		$data['data'] = $this->event_model->get_event_list();
        $data['title'] = 'Event';
		
		$this->load->view('home', $data);
	}

	public function event_publikasi()
	{
		$this->load->model('event_model');
		$data['data'] = $this->event_model->get_publikasi();		
		$this->load->view('publikasi', $data);
	}
}
