<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class imagenologia extends Sximo  {
	
	protected $table = 'tb_control_imagenes';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT tb_control_imagenes.* FROM tb_control_imagenes ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE tb_control_imagenes.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
