<div class="form-ajax-box">
{!! Form::open(array('url'=>'ubications?return='.$return, 'class'=>'form-horizontal validated','files' => true , 'parsley-validate'=>'','novalidate'=>' ','id'=> 'ubicationsFormAjax')) !!}

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
		
	<input type="hidden" name="action_task" value="save" />				
				


	

</div>		
{!! Form::close() !!}
</div>
			 
<script type="text/javascript">
$(document).ready(function() { 
	 
	
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
		var removeUrl = '{{ url("ubications/removefiles?file=")}}'+$(this).attr('url');
		$(this).parent().remove();
		$.get(removeUrl,function(response){});
		$(this).parent('div').empty();	
		return false;
	});
	$('a.addC').relCopy({});
				
	var form = $('#ubicationsFormAjax'); 
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
						var table = $('#ubicationsTable').DataTable();
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