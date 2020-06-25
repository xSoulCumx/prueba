<div class="form-ajax-box">
{!! Form::open(array('url'=>'equipment?return='.$return, 'class'=>'form-horizontal validated','files' => true , 'parsley-validate'=>'','novalidate'=>' ','id'=> 'equipmentFormAjax')) !!}

	<div class="toolbar-nav">	
		<div class="row">	
			<div class="col-sm-6 ">	
				<button type="submit" class="btn btn-dark  " name="apply"><i class="fa  fa-check"></i>  {{ Lang::get('core.sb_apply') }} </button>
				<button type="submit" class="btn btn-dark " name="save"><i class="fa  fa-paste"></i>  {{ Lang::get('core.sb_save') }} </button>
			</div>	
			<div class="col-md-6 text-right">
				<a href="javascript://ajax" onclick="ajaxViewClose('#{{ $pageModule }}')" class="tips btn btn-dark  " title="{{ __('core.btn_back') }}" ><i class="fa  fa-times"></i></a>				
			</div>
					
		</div>
	</div>	
		<div class="py-4 mx-4 row">

	
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
		
	<input type="hidden" name="action_task" value="save" />				
				


	

</div>		
{!! Form::close() !!}
</div>
			 
<script type="text/javascript">
$(document).ready(function() { 
	
		$("#tipo").jCombo("{!! url('equipment/comboselect?filter=tb_tpo:nombre:nombre') !!}",
		{  selected_value : '{{ $row["tipo"] }}' });
		
		$("#subtipo").jCombo("{!! url('equipment/comboselect?filter=tb_subtipo:nombre_sub:nombre_sub') !!}&parent=tipo:",
		{  parent: '#tipo', selected_value : '{{ $row["subtipo"] }}' });
		
		$("#ubicacion").jCombo("{!! url('equipment/comboselect?filter=tb_ubicaciones:id_ubicaciones:area|piso') !!}",
		{  selected_value : '{{ $row["ubicacion"] }}' });
		 
	
	$('.editor').summernote();
	
	$('.tips').tooltip();	
	$(".select2").select2({ width:"98%"});	
	$('.date').datepicker({format:'yyyy-mm-dd',autoClose:true})
	$('.datetime').datetimepicker({format: 'yyyy-mm-dd hh:ii:ss'}); 
	$('input[type="checkbox"],input[type="radio"]').iCheck({
		checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
	});			
	$('.removeMultiFiles').on('click',function(){
		var removeUrl = '{{ url("equipment/removefiles?file=")}}'+$(this).attr('url');
		$(this).parent().remove();
		$.get(removeUrl,function(response){});
		$(this).parent('div').empty();	
		return false;
	});
	$('a.addC').relCopy({});
				
	var form = $('#equipmentFormAjax'); 
	form.parsley();
	form.submit(function(){
		
		if(form.parsley().isValid()){			
			var options = { 
				dataType:      'json', 
				beforeSubmit :  function(){
				},
				success: function(data) {
					if(data.status == 'success')
					{
						ajaxViewClose('#{{ $pageModule }}');
						var table = $('#equipmentTable').DataTable();
						table.ajax.reload();
						notyMessage(data.message);	
						$('#sximo-modal').modal('hide');	
					} else {
						notyMessageError(data.message);	
						return false;
					}
				}  
			}  
			$(this).ajaxSubmit(options); 
			return false;
						
		} else {
			return false;
		}		
	
	});

});

</script>		 