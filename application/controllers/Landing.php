<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function index()
	{
		$data = [
            'title' => 'Home | WebGIS'
        ];
		$this->load->view('landing/index');
	}

	public function map()
	{
		$data = [
            'title' => 'WebGIS'
        ];
		$this->load->view('landing/webgis');
	}
}
