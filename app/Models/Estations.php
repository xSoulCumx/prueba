<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class estations extends Sximo  {
	
	protected $table = 'tb_estaciones';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_estaciones.* FROM tb_estaciones  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_estaciones.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
