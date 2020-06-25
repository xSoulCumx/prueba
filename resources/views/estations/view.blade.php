@if($setting['view-method'] =='native')
	<div class="toolbar-nav">
		<div class="row">
			
			<div class="col-md-6 " >
		   		<a href="{{ ($prevnext['prev'] != '' ? url('estations/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-sm" onclick="ajaxViewDetail('#estations',this.href); return false; "><i class="fa fa-arrow-left"></i>  </a>	
				<a href="{{ ($prevnext['next'] != '' ? url('estations/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-sm " onclick="ajaxViewDetail('#estations',this.href); return false; "> <i class="fa fa-arrow-right"></i>  </a>					
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
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Codigo Estacion', (isset($fields['codigo_estacion']['language'])? $fields['codigo_estacion']['language'] : array())) }}</td>
						<td>{{ $row->codigo_estacion}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Motherboard', (isset($fields['motherboard']['language'])? $fields['motherboard']['language'] : array())) }}</td>
						<td>{{ $row->motherboard}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Procesador', (isset($fields['procesador']['language'])? $fields['procesador']['language'] : array())) }}</td>
						<td>{{ $row->procesador}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Disco Duro', (isset($fields['disco_duro']['language'])? $fields['disco_duro']['language'] : array())) }}</td>
						<td>{{ $row->disco_duro}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Ram', (isset($fields['ram']['language'])? $fields['ram']['language'] : array())) }}</td>
						<td>{{ $row->ram}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Monitor', (isset($fields['monitor']['language'])? $fields['monitor']['language'] : array())) }}</td>
						<td>{{ $row->monitor}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('UPS', (isset($fields['UPS']['language'])? $fields['UPS']['language'] : array())) }}</td>
						<td>{{ $row->UPS}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Case ', (isset($fields['case_']['language'])? $fields['case_']['language'] : array())) }}</td>
						<td>{{ $row->case_}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Mouse', (isset($fields['mouse']['language'])? $fields['mouse']['language'] : array())) }}</td>
						<td>{{ $row->mouse}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Teclado', (isset($fields['teclado']['language'])? $fields['teclado']['language'] : array())) }}</td>
						<td>{{ $row->teclado}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Cornetas', (isset($fields['cornetas']['language'])? $fields['cornetas']['language'] : array())) }}</td>
						<td>{{ $row->cornetas}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Mouse Pad', (isset($fields['mouse_pad']['language'])? $fields['mouse_pad']['language'] : array())) }}</td>
						<td>{{ $row->mouse_pad}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Create At', (isset($fields['create_at']['language'])? $fields['create_at']['language'] : array())) }}</td>
						<td>{{ $row->create_at}} </td>
						
					</tr>
				
			</tbody>	
		</table>  
			
		 	
		 
@if($setting['form-method'] =='native')
	</div>	

@endif		