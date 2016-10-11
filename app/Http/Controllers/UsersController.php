<?php
namespace App\Http\Controllers;
class UsersController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('guest');
	}

	public function logon() {
		// return view();
	}

	public function registe() {

	}

	public function login() {

	}

	public function checkPassword() {

	}
}