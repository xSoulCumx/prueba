

		 {!! Form::open(array('url'=>'equipment/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
							<fieldset><legend> Equipos</legend>
							<div class="row">
										
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Codigo Equipo" class=" control-label col-md-12 text-left"> Codigo Equipo </label>

										<div class="col-md-12">
										  <input  type='text' name='codigo_equipo' id='codigo_equipo' value='{{ $row['codigo_equipo'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Tipo" class=" control-label col-md-12 text-left"> Tipo </label>

										<div class="col-md-12">
										  <select name='tipo' rows='5' id='tipo' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Subtipo" class=" control-label col-md-12 text-left"> Subtipo </label>

										<div class="col-md-12">
										  <select name='subtipo' rows='5' id='subtipo' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Modelo" class=" control-label col-md-12 text-left"> Modelo </label>

										<div class="col-md-12">
										  <input  type='text' name='modelo' id='modelo' value='{{ $row['modelo'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Marca" class=" control-label col-md-12 text-left"> Marca </label>

										<div class="col-md-12">
										  <input  type='text' name='marca' id='marca' value='{{ $row['marca'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Serial" class=" control-label col-md-12 text-left"> Serial </label>

										<div class="col-md-12">
										  <input  type='text' name='serial' id='serial' value='{{ $row['serial'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Imagen" class=" control-label col-md-12 text-left"> Imagen </label>

										<div class="col-md-12">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="imagen" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="imagen-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["imagen"],"/uploads/images/equipos/") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Costo Inicial" class=" control-label col-md-12 text-left"> Costo Inicial </label>

										<div class="col-md-12">
										  <input  type='text' name='costo_inicial' id='costo_inicial' value='{{ $row['costo_inicial'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Costo Dolar" class=" control-label col-md-12 text-left"> Costo Dolar </label>

										<div class="col-md-12">
										  <input  type='text' name='costo_dolar' id='costo_dolar' value='{{ $row['costo_dolar'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Condicion" class=" control-label col-md-12 text-left"> Condicion </label>

										<div class="col-md-12">
										  
					<?php $condicion = explode(',',$row['condicion']);
					$condicion_opt = array( 'En Uso' => 'En Uso' ,  'Sin Usar' => 'Sin Usar' , ); ?>
					<select name='condicion' rows='5'   class='select2 '  > 
						<?php 
						foreach($condicion_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['condicion'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Fecha Adquision" class=" control-label col-md-12 text-left"> Fecha Adquision </label>

										<div class="col-md-12">
										  
				<div class="input-group input-group-sm m-b" style="">
					{!! Form::text('fecha_adquision', $row['fecha_adquision'],array('class'=>'form-control form-control-sm date')) !!}
					<div class="input-group-append">
					 	<div class="input-group-text"><i class="fa fa-calendar"></i></span></div>
					 </div>
				</div> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Ubicacion" class=" control-label col-md-12 text-left"> Ubicacion </label>

										<div class="col-md-12">
										  <select name='ubicacion' rows='5' id='ubicacion' class='select2 '   ></select> 
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
									  </div> 					
									  <div class="form-group col-md-6 "  style="display:;">
										<label for="Observacion" class=" control-label col-md-12 text-left"> Observacion </label>

										<div class="col-md-12">
										  <textarea name='observacion' rows='5' id='observacion' class='form-control form-control-sm '  
				           >{{ $row['observacion'] }}</textarea> 
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
		
		
		$("#tipo").jCombo("{!! url('equipment/comboselect?filter=tb_tpo:nombre:nombre') !!}",
		{  selected_value : '{{ $row["tipo"] }}' });
		
		$("#subtipo").jCombo("{!! url('equipment/comboselect?filter=tb_subtipo:nombre_sub:nombre_sub') !!}&parent=tipo:",
		{  parent: '#tipo', selected_value : '{{ $row["subtipo"] }}' });
		
		$("#ubicacion").jCombo("{!! url('equipment/comboselect?filter=tb_ubicaciones:id_ubicaciones:area|piso') !!}",
		{  selected_value : '{{ $row["ubicacion"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
