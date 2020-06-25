

		 {!! Form::open(array('url'=>'maintenance/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
							<fieldset><legend> Mantenimientos</legend>
							<div class="row">
					{!! Form::hidden('id_mantenimientos', $row['id_mantenimientos']) !!}					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Equipo" class=" control-label col-md-12 text-left"> Equipo </label>

										<div class="col-md-12">
										  <select name='equipo' rows='5' id='equipo' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Tipo" class=" control-label col-md-12 text-left"> Tipo </label>

										<div class="col-md-12">
										  
					<?php $tipo = explode(',',$row['tipo']);
					$tipo_opt = array( 'Preventivo' => 'Preventivo' ,  'Correctivo' => 'Correctivo' , ); ?>
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
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Razon" class=" control-label col-md-12 text-left"> Razon </label>

										<div class="col-md-12">
										  <input  type='text' name='razon' id='razon' value='{{ $row['razon'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Proveedor" class=" control-label col-md-12 text-left"> Proveedor </label>

										<div class="col-md-12">
										  <input  type='text' name='proveedor' id='proveedor' value='{{ $row['proveedor'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Fecha" class=" control-label col-md-12 text-left"> Fecha </label>

										<div class="col-md-12">
										  
				<div class="input-group input-group-sm m-b" style="">
					{!! Form::text('fecha', $row['fecha'],array('class'=>'form-control form-control-sm date')) !!}
					<div class="input-group-append">
					 	<div class="input-group-text"><i class="fa fa-calendar"></i></span></div>
					 </div>
				</div> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Duracion" class=" control-label col-md-12 text-left"> Duracion </label>

										<div class="col-md-12">
										  <input  type='text' name='duracion' id='duracion' value='{{ $row['duracion'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-6 "  style="display:;">
										<label for="Descripcion" class=" control-label col-md-12 text-left"> Descripcion </label>

										<div class="col-md-12">
										  <textarea name='descripcion' rows='5' id='descripcion' class='form-control form-control-sm '  
				           >{{ $row['descripcion'] }}</textarea> 
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
		
		
		$("#equipo").jCombo("{!! url('maintenance/comboselect?filter=tb_equipos:codigo_equipo:codigo_equipo|modelo|subtipo') !!}",
		{  selected_value : '{{ $row["equipo"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
