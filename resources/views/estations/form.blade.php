<div class="form-ajax-box">
{!! Form::open(array('url'=>'estations?return='.$return, 'class'=>'form-horizontal validated','files' => true , 'parsley-validate'=>'','novalidate'=>' ','id'=> 'estationsFormAjax')) !!}

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
							<fieldset><legend> Estaciones</legend>
							<div class="row">
					{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Codigo Estacion" class=" control-label col-md-12 text-left"> Codigo Estacion </label>

										<div class="col-md-12">
										  <input  type='text' name='codigo_estacion' id='codigo_estacion' value='{{ $row['codigo_estacion'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Motherboard" class=" control-label col-md-12 text-left"> Motherboard </label>

										<div class="col-md-12">
										  <input  type='text' name='motherboard' id='motherboard' value='{{ $row['motherboard'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Procesador" class=" control-label col-md-12 text-left"> Procesador </label>

										<div class="col-md-12">
										  <input  type='text' name='procesador' id='procesador' value='{{ $row['procesador'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Disco Duro" class=" control-label col-md-12 text-left"> Disco Duro </label>

										<div class="col-md-12">
										  <input  type='text' name='disco_duro' id='disco_duro' value='{{ $row['disco_duro'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Ram" class=" control-label col-md-12 text-left"> Ram </label>

										<div class="col-md-12">
										  <input  type='text' name='ram' id='ram' value='{{ $row['ram'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Monitor" class=" control-label col-md-12 text-left"> Monitor </label>

										<div class="col-md-12">
										  <select name='monitor' rows='5' id='monitor' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="UPS" class=" control-label col-md-12 text-left"> UPS </label>

										<div class="col-md-12">
										  <select name='UPS' rows='5' id='UPS' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Case" class=" control-label col-md-12 text-left"> Case </label>

										<div class="col-md-12">
										  
					<?php $case_ = explode(',',$row['case_']);
					$case__opt = array( 'TIENE' => 'TIENE' ,  'NO TIENE' => 'NO TIENE' , ); ?>
					<select name='case_' rows='5'   class='select2 '  > 
						<?php 
						foreach($case__opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['case_'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Mouse Pad" class=" control-label col-md-12 text-left"> Mouse Pad </label>

										<div class="col-md-12">
										  
					<?php $mouse_pad = explode(',',$row['mouse_pad']);
					$mouse_pad_opt = array( 'TIENE' => 'TIENE' ,  'NO TIENE' => 'NO TIENE' , ); ?>
					<select name='mouse_pad' rows='5'   class='select2 '  > 
						<?php 
						foreach($mouse_pad_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['mouse_pad'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Mouse" class=" control-label col-md-12 text-left"> Mouse </label>

										<div class="col-md-12">
										  
					<?php $mouse = explode(',',$row['mouse']);
					$mouse_opt = array( 'TIENE' => 'TIENE' ,  'NO TIENE' => 'NO TIENE' , ); ?>
					<select name='mouse' rows='5'   class='select2 '  > 
						<?php 
						foreach($mouse_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['mouse'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Teclado" class=" control-label col-md-12 text-left"> Teclado </label>

										<div class="col-md-12">
										  
					<?php $teclado = explode(',',$row['teclado']);
					$teclado_opt = array( 'TIENE' => 'TIENE' ,  'NO TIENE' => 'NO TIENE' , ); ?>
					<select name='teclado' rows='5'   class='select2 '  > 
						<?php 
						foreach($teclado_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['teclado'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Cornetas" class=" control-label col-md-12 text-left"> Cornetas </label>

										<div class="col-md-12">
										  
					<?php $cornetas = explode(',',$row['cornetas']);
					$cornetas_opt = array( 'TIENE' => 'TIENE' ,  'NO TIENE' => 'NO TIENE' , ); ?>
					<select name='cornetas' rows='5'   class='select2 '  > 
						<?php 
						foreach($cornetas_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['cornetas'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
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
	
		$("#monitor").jCombo("{!! url('estations/comboselect?filter=tb_equipos:codigo_equipo:codigo_equipo|modelo|subtipo') !!}",
		{  selected_value : '{{ $row["monitor"] }}' });
		
		$("#UPS").jCombo("{!! url('estations/comboselect?filter=tb_equipos:codigo_equipo:codigo_equipo|modelo|subtipo') !!}",
		{  selected_value : '{{ $row["UPS"] }}' });
		 
	
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
		var removeUrl = '{{ url("estations/removefiles?file=")}}'+$(this).attr('url');
		$(this).parent().remove();
		$.get(removeUrl,function(response){});
		$(this).parent('div').empty();	
		return false;
	});
	$('a.addC').relCopy({});
				
	var form = $('#estationsFormAjax'); 
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
						var table = $('#estationsTable').DataTable();
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