<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
|-----------------------------------------------------------
| Advertiser Model
|-----------------------------------------------------------
|	Author bulelife
|	Email thebulelife@outlook.com
|	Date 2016-10-12
|
|*/
class Advertiser_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/**
	 * 添加数据
	 * @param array $data [description]
	 * @author junmei
	 * @email thebuleilfe@outlook.com
	 * @date 2016-10-12
	 */
	public function add($data = array()) {

	}

	/**
	 * [get description]
	 * @param  [type] $where [description]
	 * @return [type]        [description]
	 * @author junmei
	 * @email thebuleilfe@outlook.com
	 * @date 2016-10-12
	 */
	public function get($where) {

	}

	/**
	 * 获取一组数据
	 * @param  [type] $where  [description]
	 * @param  [type] $num    [description]
	 * @param  [type] $offset [description]
	 * @param  [type] $sotr   [description]
	 * @param  [type] $key    [description]
	 * @param  array  $fields [description]
	 * @return [type]         [description]
	 * @author junmei
	 * @email thebuleilfe@outlook.com
	 * @date 2016-10-12
	 */
	public function list($where, $num, $offset, $sotr, $key, $fields = array()) {

	}

	/**
	 * 修改数据
	 * @param  array  $data  [description]
	 * @param  array  $where [description]
	 * @return [type]        [description]
	 * @author junmei
	 * @email thebuleilfe@outlook.com
	 * @date 2016-10-12
	 */
	public function update($data = array(), $where = array()) {

	}

	/**
	 * 删除数据
	 * @param  array  $where [description]
	 * @return [type]        [description]
	 * @author junmei
	 * @email thebuleilfe@outlook.com
	 * @date 2016-10-12
	 */
	public function delete($where = array()) {

	}
}