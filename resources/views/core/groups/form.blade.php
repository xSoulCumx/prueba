@extends('layouts.app')

@section('content')
<div class="page-header"><h2>  {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2></div>
<div class="toolbar-nav">
	<a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-sm  "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-times"></i></a> 
</div>	
<div class="p-5">



		 {!! Form::open(array('url'=>'core/groups?return='.$return, 'class'=>'form-horizontal validated','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

									
								  <div class="form-group row hidethis " style="display:none;">
									<label for="Group Id" class=" control-label col-md-4 text-right"> Group Id </label>
									<div class="col-md-6">
									  {!! Form::text('group_id', $row['group_id'],array('class'=>'form-control input-sm', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group row  " >
									<label for="Name" class=" control-label col-md-4 text-right"> Name <span class="asterix"> * </span></label>
									<div class="col-md-6">
									  {!! Form::text('name', $row['name'],array('class'=>'form-control input-sm', 'placeholder'=>'', 'required'=>'true'  )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group row  " >
									<label for="Description" class=" control-label col-md-4 text-right"> Description </label>
									<div class="col-md-6">
									  <textarea name='description' rows='2' id='description' class='form-control '  
				           >{{ $row['description'] }}</textarea> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group row  " >
									<label for="Level" class=" control-label col-md-4 text-right"> Level <span class="asterix"> * </span></label>
									<div class="col-md-6">
									  {!! Form::text('level', $row['level'],array('class'=>'form-control input-sm', 'placeholder'=>'', 'required'=>'true'  )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 
			
			
			<div style="clear:both"></div>	
				
					
				  <div class="form-group row">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
					<button type="button" onclick="location.href='{{ URL::to('core/groups?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 	<input type="hidden" name="action_task" value="save" />
		 	{!! Form::close() !!}
	
</div>	
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		 
	});
	</script>		 
@stop