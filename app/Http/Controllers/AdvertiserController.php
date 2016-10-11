<?php
namespace App\Http\Controllers;

class AdvertiserController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('guest');
	}

	/**
	 * 添加广告主资质
	 * @param $paramname description
	 * @author junmei <thebulelife@outlook.com>
	 * @date 2016-10-11
	 */
	public function add() {
		return 'add';
	}
	/**
	 * 更新广告主资质
	 * @return [type] [description]
	 * @author junmei <thebulelife@outlook.com>
	 * @date 2016-10-11
	 */
	public function update() {
		return 'update';
	}
	/**
	 * 获取广告主资，按id
	 * @param  array  $ids [description]
	 * @return [type]      [description]
	 * @author junmei <thebulelife@outlook.com>
	 * @date 2016-10-11
	 */
	public function get($ids) {
		return 'get';
	}
	/**
	 * 获取所有广告主资质
	 * @param  [type] $startDate [开始时间]
	 * @param  [type] $endDate   [结束时间]
	 * @return [type]            [description]
	 * @author junmei <thebulelife@outlook.com>
	 * @date 2016-10-11
	 */
	public function getAll($startDate, $endDate) {
		$startDate = ''; //开始时间
		$endDate = ''; //结束时间
		return 'getAll';
	}
	/**
	 * 获取广告主资质审核状态
	 * @param  array  $ids [description]
	 * @return [type]      [description]
	 * @author junmei <thebulelife@outlook.com>
	 * @date 2016-10-11
	 */
	public function queryQualification($ids) {
		return 'queryQualification';
	}
}