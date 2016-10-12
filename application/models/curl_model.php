<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
|-----------------------------------------------------------
| Curl Request Model
|-----------------------------------------------------------
|	Author bulelife
|	Email thebulelife@outlook.com
|	Date 2016-10-12
|
|*/

class curl_model extends CI_Model {
	private $curl;
	private $request;
	private $http;
	public function __construct() {
		parent::__construct();
		$this->curl = curl_init();
	}

	/**
	 * 获取参数
	 * @param  [type] $name [description]
	 * @return [type]       [description]
	 * @author junmei
	 * @email thebuleilfe@outlook.com
	 * @date 2016-10-12
	 */
	public function __get($name) {
		return isset($this->$name) ? $this->$name : null;
	}

	/**
	 * 设置参数
	 * @param [type] $key   [description]
	 * @param [type] $value [description]
	 * @author junmei
	 * @email thebuleilfe@outlook.com
	 * @date 2016-10-12
	 */
	public function __set($key, $value) {
		$this->$key = $value;
	}

	/**
	 * GET请求
	 * @return [type] [description]
	 * @author junmei
	 * @email thebuleilfe@outlook.com
	 * @date 2016-10-12
	 */
	public function get() {
		curl_setopt($this->curl, CURLOPT_URL, $this->http);
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($this->ch, CURLOPT_HEADER, 0);
		$result = curl_exec($this->ch);
		curl_close($this->curl);
		return isset($result) || !empty($result) || $result != '' ? $result : '';
	}

	/**
	 * POST请求
	 * @return [type] [description]
	 * @author junmei
	 * @email thebuleilfe@outlook.com
	 * @date 2016-10-12
	 */
	public function post() {
		curl_setopt($this->curl, CURLOPT_URL, $this->http);
		$header = array('Content-Type: application/json');
		curl_setopt($this->curl, CURLOPT_HTTPHEADER, $header);
		curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($this->curl, CURLOPT_POST, 1);
		curl_setopt($this->curl, CURLOPT_POSTFIELDS, $this->request);
		$result = curl_exec($this->curl);
		curl_close($this->curl);
		return isset($result) || !empty($result) || $result != '' ? $result : '';
	}
}