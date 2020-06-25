<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class ubications extends Sximo  {
	
	protected $table = 'tb_ubicaciones';
	protected $primaryKey = 'id_ubicaciones';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_ubicaciones.* FROM tb_ubicaciones  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_ubicaciones.id_ubicaciones IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
