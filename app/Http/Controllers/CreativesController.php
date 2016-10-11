<?php
namespace App\Http\Controllers;

class CreativesController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('guest');
	}

	/**
	 * 添加创意
	 * @author junmei <thebulelife@outlook.com>
	 * @date 2016-10-11
	 */
	public function add() {
		return 'add creative';
	}

	/**
	 * 修改创意
	 * @return [type] [description]
	 * @author junmei <thebulelife@outlook.com>
	 * @date 2016-10-11
	 */
	public function update() {
		return 'update';
	}

	/**
	 * 获取一条创意，按id
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 * @author junmei <thebulelife@outlook.com>
	 * @date 2016-10-11
	 */
	public function get($ids) {
		return 'get';
	}

	/**
	 * 获取所以创意
	 * @param  [type] $startDate  [description]
	 * @param  [type] $endDate    [description]
	 * @param  [type] $adviewType [description]
	 * @return [type]             [description]
	 * @author junmei <thebulelife@outlook.com>
	 * @date 2016-10-11
	 */
	public function getAll($startDate, $endDate, $adviewType) {
		$startDate = ''; //开始时间
		$endDate = ''; //结束时间
		$adviewType = 1; //流量类型，1：WEB流量，2：Mobile流量，default：1
		return 'getAll';
	}

	/**
	 * [queryAuditState 查询静态创意的审核状态]
	 * @param  array  $ids [description]
	 * @return [type]      [description]
	 * @author junmei <thebulelife@outlook.com>
	 * @date 2016-10-11
	 */
	public function queryAuditState($ids) {
		return 'queryAuditState';
	}
}