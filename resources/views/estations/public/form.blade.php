

		 {!! Form::open(array('url'=>'estations/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


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
		
		
		$("#monitor").jCombo("{!! url('estations/comboselect?filter=tb_equipos:codigo_equipo:codigo_equipo|modelo|subtipo') !!}",
		{  selected_value : '{{ $row["monitor"] }}' });
		
		$("#UPS").jCombo("{!! url('estations/comboselect?filter=tb_equipos:codigo_equipo:codigo_equipo|modelo|subtipo') !!}",
		{  selected_value : '{{ $row["UPS"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
