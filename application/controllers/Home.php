<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
|-----------------------------------------------------------
| Home Controller
|-----------------------------------------------------------
|	Author bulelife
|	Email thebulelife@outlook.com
|	Date 2016-10-12
|
|*/
class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		// var_dump(password('12312312', $this->config->item('encrypt')));
		$this->load->view('home/index.html');
	}
}