@if($setting['view-method'] =='native')
	<div class="toolbar-nav">
		<div class="row">
			<div class="col-md-6" >
				<a href="{{ ($prevnext['prev'] != '' ? url('{class}/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-dark btn-sm" onclick="ajaxViewDetail('#{class}',this.href); return false; "><i class="fa fa-arrow-left"></i>  </a>	
				<a href="{{ ($prevnext['next'] != '' ? url('{class}/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-dark  btn-sm " onclick="ajaxViewDetail('#{class}',this.href); return false; "> <i class="fa fa-arrow-right"></i>  </a>
			</div>
			<div class="col-md-6 text-right pull-right" >
		   			

				<a href="javascript://ajax" onclick="ajaxViewClose('#{{ $pageModule }}')" class="tips btn btn-sm btn-dark  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>					
			</div>	

			
		</div>
	</div>	
		<div class="p-5">
@endif	

		<table class="table  " >
			<tbody>	
				{form_view}
			</tbody>	
		</table>  
			
		 {masterdetailview}	
		 
@if($setting['form-method'] =='native')
	</div>	

@endif		