<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Validator, Input, Redirect ; 


class MobileController extends Controller {

	protected $layout = "layouts.main";
	protected $data = array();	
	public $module = 'audit';
	static $per_page	= '10';

	public function __construct()
	{
		

		
	}
	public function index( Request $request )
	{
		print_r( \SiteHelpers::menus('sidebar'));

	}

	public function configInfo() {



	} 
	public function login() {


		
	} 
	

}