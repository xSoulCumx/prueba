<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class estudios extends Sximo  {
	
	protected $table = 'tb_estudios';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_estudios.* FROM tb_estudios  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_estudios.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
