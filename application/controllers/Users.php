<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
|-----------------------------------------------------------
| Users Controller
|-----------------------------------------------------------
|	Author bulelife
|	Email thebulelife@outlook.com
|	Date 2016-10-12
|
|*/
class Users extends CI_Controller {
	public function __construct() {
		parent::__construct();
		// $this->config->load('bes_config');
	}

	public function login() {
		echo 'login';
		$bes_config = $this->config->item('bes_api');
		var_dump($bes_config);
		// $this->load->view();
	}

	public function register() {
		$this->load->view();
	}

	private function checkPassword() {

	}
}