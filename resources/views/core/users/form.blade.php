@extends('layouts.app')

@section('content')
<div class="page-header"><h2>  {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2></div>
<div class="toolbar-nav">
	<a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-sm  "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-times"></i></a> 
</div>	
<div class="p-5" style="padding-top: 10px !important;">


		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>	

{!! Form::open(array('url'=>'core/users?return='.$return, 'class'=>'form-horizontal validated','files' => true )) !!}
<div class="row">
		<div class="col-md-6">
			<fieldset>
				<legend> Account Credit </legend>
					
					
				  <div class="form-group hidethis " style="display:none;">
					<label for="Id" class=" control-label "> Id </label>
					<div class="">
					  {!! Form::text('id', $row['id'],array('class'=>'form-control input-sm', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " >
					<label for="Group / Level" class=" control-label "> Group / Level <span class="asterix"> * </span></label>
					<div class="">
					  <select name='group_id' rows='5' id='group_id' code='{$group_id}' class='select2 form-control  input-sm'  required  ></select> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " >
					<label for="Username" class=" control-label "> Username <span class="asterix"> * </span></label>
					<div class="">
					  {!! Form::text('username', $row['username'],array('class'=>'form-control  input-sm', 'placeholder'=>'', 'required'=>'true'  )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " >
					<label for="First Name" class=" control-label "> First Name <span class="asterix"> * </span></label>
					<div class="">
					  {!! Form::text('first_name', $row['first_name'],array('class'=>'form-control  input-sm', 'placeholder'=>'', 'required'=>'true'  )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " >
					<label for="Last Name" class=" control-label "> Last Name </label>
					<div class="">
					  {!! Form::text('last_name', $row['last_name'],array('class'=>'form-control  input-sm', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " >
					<label for="Email" class=" control-label "> Email <span class="asterix"> * </span></label>
					<div class="">
					  {!! Form::text('email', $row['email'],array('class'=>'form-control  input-sm', 'placeholder'=>'', 'required'=>'true', 'parsley-type'=>'email'   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
	
				  <div class="form-group  " >
					<label for="Status" class=" control-label "> Status <span class="asterix"> * </span></label>
					<div class="">
						<input type='radio' name='active' value ='1' required @if($row['active'] == '1') checked="checked" @endif class="minimal-green" > Active 

						<input type='radio' name='active' value ='0' required @if($row['active'] == '0') checked="checked" @endif class="minimal-green" > Inactive

						<input type='radio' name='active' value ='2' required @if($row['active'] == '2') checked="checked" @endif class="minimal-green" > Banned
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 


				  <div class="form-group  " >
					<label for="Avatar" class=" control-label "> Avatar </label>
					<div class="">
					  <input  type='file' name='avatar' id='avatar' @if($row['avatar'] =='') class='required' @endif style='width:150px !important;'  />
						 	<div >
							{!! SiteHelpers::showUploadedFile($row['avatar'],'/uploads/users/') !!}
							
					</div>					
 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 


	  		<div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
					<button type="button" onclick="location.href='{{ URL::to('core/users?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div>

			</div>

			
		</fieldset>

		<div class="col-md-6">	  
			<fieldset>
				<legend> Password </legend>
				<p>
					@if($row['id'] !='')
							{{ Lang::get('core.notepassword') }}
						@else
							Create Password
						@endif	 
				</p>		


				<div class="form-group">
					<label for="ipt" class=" control-label col-md-4"> {{ Lang::get('core.newpassword') }} </label>
					<div class="col-md-8">
					<input name="password" type="password" id="password" class="form-control input-sm" value=""
					@if($row['id'] =='')
						required
					@endif
					 /> 
					 </div> 
				</div>  
				  
				  <div class="form-group">
					<label for="ipt" class=" control-label col-md-4"> {{ Lang::get('core.conewpassword') }} </label>
					<div class="col-md-8">
					<input name="password_confirmation" type="password" id="password_confirmation" class="form-control input-sm" value=""
					@if($row['id'] =='')
						required
					@endif		
					 />  
					 </div> 
				  </div>  				  
				  
			</fieldset>
			<fieldset>
				<legend> Personal Info </legend>

			</fieldset>	
		 
		 </div>			
			
			
			<div style="clear:both"></div>	
				
					
			> 
		 <input type="hidden" name="action_task" value="save" />
	</div>
	{!! Form::close() !!}


		
</div>

		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		$("#group_id").jCombo("{{ URL::to('core/users/comboselect?filter=tb_groups:group_id:name') }}",
		{  selected_value : '{{ $row["group_id"] }}' });
		 
	});
	</script>		 
@stop