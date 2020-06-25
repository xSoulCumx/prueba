

		 {!! Form::open(array('url'=>'ubications/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
							<fieldset><legend> Ubicaciones</legend>
							<div class="row">
					{!! Form::hidden('id_ubicaciones', $row['id_ubicaciones']) !!}					
									  <div class="form-group col-md-4 "  style="display:;">
										<label for="Codigo" class=" control-label col-md-12 text-left"> Codigo </label>

										<div class="col-md-12">
										  <input  type='text' name='codigo' id='codigo' value='{{ $row['codigo'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-4 "  style="display:;">
										<label for="Area" class=" control-label col-md-12 text-left"> Area </label>

										<div class="col-md-12">
										  <input  type='text' name='area' id='area' value='{{ $row['area'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group col-md-4 "  style="display:;">
										<label for="Piso" class=" control-label col-md-12 text-left"> Piso </label>

										<div class="col-md-12">
										  <input  type='text' name='piso' id='piso' value='{{ $row['piso'] }}' 
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
