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
		$this->load->model('Users_model', 'um');
	}

	public function test() {
		$this->checkPassword('test伊家的铺子', 'serfgsdrvserv');
	}

	public function login() {
		$this->load->view('users/login.html');
	}

	public function register() {
		$this->load->view('users/register.html');
	}

	private function checkPassword($name, $password) {
		$aaa = $this->um->get($name, $password);
		var_dump($aaa);
	}
}