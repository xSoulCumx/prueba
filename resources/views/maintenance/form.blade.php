<div class="form-ajax-box">
{!! Form::open(array('url'=>'maintenance?return='.$return, 'class'=>'form-horizontal validated','files' => true , 'parsley-validate'=>'','novalidate'=>' ','id'=> 'maintenanceFormAjax')) !!}

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
		
	<input type="hidden" name="action_task" value="save" />				
				


	

</div>		
{!! Form::close() !!}
</div>
			 
<script type="text/javascript">
$(document).ready(function() { 
	
		$("#equipo").jCombo("{!! url('maintenance/comboselect?filter=tb_equipos:codigo_equipo:codigo_equipo|modelo|subtipo') !!}",
		{  selected_value : '{{ $row["equipo"] }}' });
		 
	
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
		var removeUrl = '{{ url("maintenance/removefiles?file=")}}'+$(this).attr('url');
		$(this).parent().remove();
		$.get(removeUrl,function(response){});
		$(this).parent('div').empty();	
		return false;
	});
	$('a.addC').relCopy({});
				
	var form = $('#maintenanceFormAjax'); 
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
						var table = $('#maintenanceTable').DataTable();
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