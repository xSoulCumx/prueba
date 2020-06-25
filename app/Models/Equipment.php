<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class equipment extends Sximo  {
	
	protected $table = 'tb_equipos';
	protected $primaryKey = 'id_equipos';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_equipos.* FROM tb_equipos  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_equipos.id_equipos IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
