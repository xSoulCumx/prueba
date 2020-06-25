

		 {!! Form::open(array('url'=>'estudios/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
							<fieldset><legend> Registro de Imagenologia</legend>
							<div class="row">
										
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Codigo" class=" control-label col-md-12 text-left"> Codigo <span class="asterix"> * </span></label>

										<div class="col-md-12">
										  <input  type='text' name='codigo' id='codigo' value='{{ $row['codigo'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Nombre" class=" control-label col-md-12 text-left"> Nombre </label>

										<div class="col-md-12">
										  <input  type='text' name='nombre' id='nombre' value='{{ $row['nombre'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-6 "  style="display:;">
										<label for="Proyecciones" class=" control-label col-md-12 text-left"> Proyecciones <span class="asterix"> * </span></label>

										<div class="col-md-12">
										  <input  type='text' name='proyecciones' id='proyecciones' value='{{ $row['proyecciones'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-6 "  style="display:;">
										<label for="Tipo" class=" control-label col-md-12 text-left"> Tipo </label>

										<div class="col-md-12">
										  
					<?php $tipo = explode(',',$row['tipo']);
					$tipo_opt = array( 'Rx' => 'Radiologia' ,  'Tx' => 'Tomografia' , ); ?>
					<select name='tipo' rows='5'   class='select2 '  > 
						<?php 
						foreach($tipo_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['tipo'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-6 "  style="display:;">
										<label for="Area" class=" control-label col-md-12 text-left"> Area </label>

										<div class="col-md-12">
										  <input  type='text' name='area' id='area' value='{{ $row['area'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </div></fieldset></div>

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
