

		 {!! Form::open(array('url'=>'maintenanceegresos/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
							<fieldset><legend> Gastos Mantenimientos</legend>
							<div class="row">
					{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Correlativo" class=" control-label col-md-12 text-left"> Correlativo </label>

										<div class="col-md-12">
										  <input  type='text' name='correlativo' id='correlativo' value='{{ $row['correlativo'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Mantenimiento" class=" control-label col-md-12 text-left"> Mantenimiento </label>

										<div class="col-md-12">
										  <select name='mantenimiento' rows='5' id='mantenimiento' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Costo Bolivares" class=" control-label col-md-12 text-left"> Costo Bolivares </label>

										<div class="col-md-12">
										  <input  type='text' name='costo_bolivares' id='costo_bolivares' value='{{ $row['costo_bolivares'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Costo Dolares" class=" control-label col-md-12 text-left"> Costo Dolares </label>

										<div class="col-md-12">
										  <input  type='text' name='costo_dolares' id='costo_dolares' value='{{ $row['costo_dolares'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-3 "  style="display:;">
										<label for="Fecha Factura" class=" control-label col-md-12 text-left"> Fecha Factura </label>

										<div class="col-md-12">
										  
				<div class="input-group input-group-sm m-b" style="">
					{!! Form::text('fecha_factura', $row['fecha_factura'],array('class'=>'form-control form-control-sm date')) !!}
					<div class="input-group-append">
					 	<div class="input-group-text"><i class="fa fa-calendar"></i></span></div>
					 </div>
				</div> 
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
		
		
		$("#mantenimiento").jCombo("{!! url('maintenanceegresos/comboselect?filter=tb_mantenimientos:equipo:id_mantenimientos|equipo') !!}",
		{  selected_value : '{{ $row["mantenimiento"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
