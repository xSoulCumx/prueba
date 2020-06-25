

		 {!! Form::open(array('url'=>'imagenologia/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-4">
							<fieldset><legend> Paciente</legend>
							<div class="row">
					{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group col-md-6 "  style="display:;">
										<label for="Servico" class=" control-label col-md-12 text-left"> Servico </label>

										<div class="col-md-12">
										  
					<?php $servico = explode(',',$row['servico']);
					$servico_opt = array( 'Imagenes' => 'Imagenes' ,  'Radiologia' => 'Radiologia' ,  'Emergencia' => 'Emergencia' , ); ?>
					<select name='servico' rows='5'   class='select2 '  > 
						<?php 
						foreach($servico_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['servico'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> <?php 
							$limited = isset($fields['cedula_paciente']['limited']) ? $fields['cedula_paciente']['limited'] :'';
							if(SiteHelpers::filterColumn(1 )) { ?>
												
									  <div class="form-group col-md-6 "  style="display:none;">
										<label for="Cedula Paciente" class=" control-label col-md-12 text-left"> Cedula Paciente </label>

										<div class="col-md-12">
										  <input  type='text' name='cedula_paciente' id='cedula_paciente' value='{{ $row['cedula_paciente'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> <?php } ?>					
									  <div class="form-group col-md-6 "  style="display:;">
										<label for="Nombre Paciente" class=" control-label col-md-12 text-left"> Nombre Paciente </label>

										<div class="col-md-12">
										  <input  type='text' name='nombre_paciente' id='nombre_paciente' value='{{ $row['nombre_paciente'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> <?php 
							$limited = isset($fields['apellido_paciente']['limited']) ? $fields['apellido_paciente']['limited'] :'';
							if(SiteHelpers::filterColumn(1 )) { ?>
												
									  <div class="form-group col-md-6 "  style="display:none;">
										<label for="Apellido Paciente" class=" control-label col-md-12 text-left"> Apellido Paciente </label>

										<div class="col-md-12">
										  <input  type='text' name='apellido_paciente' id='apellido_paciente' value='{{ $row['apellido_paciente'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> <?php } ?>					
									  <div class="form-group col-md-12 "  style="display:;">
										<label for="Email" class=" control-label col-md-12 text-left"> Email <span class="asterix"> * </span></label>

										<div class="col-md-12">
										  <input  type='text' name='email' id='email' value='{{ $row['email'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </div></fieldset></div><div class="col-md-4">
							<fieldset><legend> Estudio</legend>
							<div class="row">
										
									  <div class="form-group col-md-12 "  style="display:;">
										<label for="Estudio" class=" control-label col-md-12 text-left"> Estudio </label>

										<div class="col-md-12">
										  <select name='estudio' rows='5' id='estudio' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-12 "  style="display:;">
										<label for="Cd" class=" control-label col-md-12 text-left"> Cd </label>

										<div class="col-md-12">
										  
					
					<input type='radio' name='cd' value ='0'  @if($row['cd'] == '0') checked @endif class='minimal-green' > Pendiente 
					
					<input type='radio' name='cd' value ='1'  @if($row['cd'] == '1') checked @endif class='minimal-green' > Entregado  
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-12 "  style="display:;">
										<label for="Placa" class=" control-label col-md-12 text-left"> Placa </label>

										<div class="col-md-12">
										  
					
					<input type='radio' name='placa' value ='0'  @if($row['placa'] == '0') checked @endif class='minimal-green' > Pendiente 
					
					<input type='radio' name='placa' value ='1'  @if($row['placa'] == '1') checked @endif class='minimal-green' > Entregado  
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </div></fieldset></div><div class="col-md-4">
							<fieldset><legend> Tratantes</legend>
							<div class="row">
										
									  <div class="form-group col-md-12 "  style="display:;">
										<label for="Doctor" class=" control-label col-md-12 text-left"> Doctor </label>

										<div class="col-md-12">
										  
					<?php $doctor = explode(',',$row['doctor']);
					$doctor_opt = array( 'Dr.Margot' => 'Dr.Margot' ,  'Dr.Fabiola Dappo' => 'Dr.Fabiola Dappo' , ); ?>
					<select name='doctor' rows='5'   class='select2 '  > 
						<?php 
						foreach($doctor_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['doctor'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-12 "  style="display:;">
										<label for="Informado" class=" control-label col-md-12 text-left"> Informado </label>

										<div class="col-md-12">
										  
					
					<input type='radio' name='informado' value ='0'  @if($row['informado'] == '0') checked @endif class='minimal-green' > En Espera 
					
					<input type='radio' name='informado' value ='1'  @if($row['informado'] == '1') checked @endif class='minimal-green' > Informado  
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-12 "  style="display:;">
										<label for="Radiologo" class=" control-label col-md-12 text-left"> Radiologo </label>

										<div class="col-md-12">
										  <select name='radiologo' rows='5' id='radiologo' class='select2 '   ></select> 
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
		
		
		$("#estudio").jCombo("{!! url('imagenologia/comboselect?filter=tb_estudios:id:codigo|nombre') !!}",
		{  selected_value : '{{ $row["estudio"] }}' });
		
		$("#radiologo").jCombo("{!! url('imagenologia/comboselect?filter=tb_users:id:username') !!}",
		{  selected_value : '{{ $row["radiologo"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
