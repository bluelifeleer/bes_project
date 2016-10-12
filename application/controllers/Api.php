<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
|-----------------------------------------------------------
| Bes Api Controller
|-----------------------------------------------------------
|	Author bulelife
|	Email thebulelife@outlook.com
|	Date 2016-10-12
|
|*/
class Api extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('api_model', 'api');
	}

	public function baidu_bes() {
		$type = trim($this->uri->segment(3));
		$action = trim($this->uri->segment(4));
		$data = $this->input->post();
		$this->api->request($type, $action, $data = array());
	}
}