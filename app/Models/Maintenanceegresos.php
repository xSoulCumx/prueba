<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class maintenanceegresos extends Sximo  {
	
	protected $table = 'tb_pagos_mantenimientos';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_pagos_mantenimientos.* FROM tb_pagos_mantenimientos  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_pagos_mantenimientos.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
