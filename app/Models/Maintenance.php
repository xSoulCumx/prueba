<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class maintenance extends Sximo  {
	
	protected $table = 'tb_mantenimientos';
	protected $primaryKey = 'id_mantenimientos';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_mantenimientos.* FROM tb_mantenimientos  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_mantenimientos.id_mantenimientos IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
