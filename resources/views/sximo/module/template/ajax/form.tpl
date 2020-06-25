<div class="form-ajax-box">
{!! Form::open(array('url'=>'{class}?return='.$return, 'class'=>'form-{form_display} validated','files' => true , 'parsley-validate'=>'','novalidate'=>' ','id'=> '{class}FormAjax')) !!}

	<div class="toolbar-nav">	
		<div class="row">	
			<div class="col-sm-6 ">	
				<button type="submit" class="btn  " name="apply"><i class="fa  fa-check"></i>  {{ Lang::get('core.sb_apply') }} </button>
				<button type="submit" class="btn  " name="save"><i class="fa  fa-paste"></i>  {{ Lang::get('core.sb_save') }} </button>
			</div>	
			<div class="col-md-6 text-right">
				<a href="javascript://ajax" onclick="ajaxViewClose('#{{ $pageModule }}')" class="tips btn btn-sm  " title="{{ __('core.btn_back') }}" ><i class="fa  fa-times"></i></a>				
			</div>
					
		</div>
	</div>	
		<div class="p-5">

	
	{form_entry}									
	{masterdetailform}					
	<input type="hidden" name="action_task" value="save" />


	

</div>		
{!! Form::close() !!}
</div>

<style type="text/css">
	.modal-body .form-ajax-box {
		margin: -15px;
	}
</style>
			 
<script type="text/javascript">
$(document).ready(function() { 
	 
	
	$('.editor').summernote();
	
	$('.tips').tooltip();	
	$(".select2").select2({ width:"98%"});	
	$('.date').datepicker({format:'yyyy-mm-dd',autoClose:true})
	$('.datetime').datetimepicker({format: 'yyyy-mm-dd hh:ii:ss'}); 		
	$('.removeMultiFiles').on('click',function(){
		var removeUrl = '{{ url("{class}/removefiles?file=")}}'+$(this).attr('url');
		$(this).parent().remove();
		$.get(removeUrl,function(response){});
		$(this).parent('div').empty();	
		return false;
	});
	$('a.addC').relCopy({});		
				
	var form = $('#{class}FormAjax'); 
	form.parsley();
	form.submit(function(){
		
		if(form.parsley().isValid()){			
			var options = { 
				dataType:      'json', 
				beforeSubmit :  showRequest,
				success:       showResponse  
			}  
			$(this).ajaxSubmit(options); 
			return false;
						
		} else {
			return false;
		}		
	
	});

});

function showRequest()
{
		
}  
function showResponse(data)  {		
	
	if(data.status == 'success')
	{
		ajaxViewClose('#{{ $pageModule }}');
		ajaxFilter('#{{ $pageModule }}','{{ $pageUrl }}/data');
		notyMessage(data.message);	
		$('#sximo-modal').modal('hide');	
	} else {
		notyMessageError(data.message);	
		return false;
	}	
}			 

</script>		 