<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
|-----------------------------------------------------------
| Bes Api Model
|-----------------------------------------------------------
|	Author bulelife
|	Email thebulelife@outlook.com
|	Date 2016-10-12
|
|*/
class api_model extends CI_Model {
	private $bes_conf;
	public function __construct() {
		parent::__construct();
		$this->load->model('curl_model', 'curl');
		$this->bes_conf = $this->config->item('bes_api');
	}

	public function request($type = '', $action = '', $data = array()) {
		$api_http = $this->bes_conf['http_lists'][$type][$action];
		$req_data = array(
			'authHeader' => array(
				'dspId' => $this->bes_conf['dsp_id'],
				'token' => $this->bes_conf['dsp_token'],
			),
			'request' => array($data),
		);
		$this->curl->http = $api_http;
		$this->curl->request = json_encode((object) $req_data);
		return $this->curl->post();
	}
}