<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
|-----------------------------------------------------------
| Users Model
|-----------------------------------------------------------
|	Author bulelife
|	Email thebulelife@outlook.com
|	Date 2016-10-12
|
|*/
class Users_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	public function get($name) {
		$respose = $this->db->select(' * FROM (SELECT * FROM user WHERE username="' . $name . '") AS u', false)->join('store AS st', 'st.own_id=u.uid', 'inner')->group_by('uid')->get();
		$str = $this->db->last_query();
		var_dump($str);
		return $respose;
	}
}