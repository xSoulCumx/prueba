@if($setting['view-method'] =='native')
	<div class="toolbar-nav">
		<div class="row">
			
			<div class="col-md-6 " >
		   		<a href="{{ ($prevnext['prev'] != '' ? url('ubications/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-sm" onclick="ajaxViewDetail('#ubications',this.href); return false; "><i class="fa fa-arrow-left"></i>  </a>	
				<a href="{{ ($prevnext['next'] != '' ? url('ubications/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-sm " onclick="ajaxViewDetail('#ubications',this.href); return false; "> <i class="fa fa-arrow-right"></i>  </a>					
			</div>	
			<div class="col-md-6 text-right" >
				<a href="javascript://ajax" onclick="ajaxViewClose('#{{ $pageModule }}')" class="tips btn btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
			</div>

			
		</div>
	</div>	
		<div class="p-5">
@endif	

		<table class="table  " >
			<tbody>	
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Codigo', (isset($fields['codigo']['language'])? $fields['codigo']['language'] : array())) }}</td>
						<td>{{ $row->codigo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Area', (isset($fields['area']['language'])? $fields['area']['language'] : array())) }}</td>
						<td>{{ $row->area}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Piso', (isset($fields['piso']['language'])? $fields['piso']['language'] : array())) }}</td>
						<td>{{ $row->piso}} </td>
						
					</tr>
				
			</tbody>	
		</table>  
			
		 	
		 
@if($setting['form-method'] =='native')
	</div>	

@endif		