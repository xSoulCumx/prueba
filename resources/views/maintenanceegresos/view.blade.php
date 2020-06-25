@if($setting['view-method'] =='native')
	<div class="toolbar-nav">
		<div class="row">
			
			<div class="col-md-6 " >
		   		<a href="{{ ($prevnext['prev'] != '' ? url('maintenanceegresos/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-sm" onclick="ajaxViewDetail('#maintenanceegresos',this.href); return false; "><i class="fa fa-arrow-left"></i>  </a>	
				<a href="{{ ($prevnext['next'] != '' ? url('maintenanceegresos/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-sm " onclick="ajaxViewDetail('#maintenanceegresos',this.href); return false; "> <i class="fa fa-arrow-right"></i>  </a>					
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
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Correlativo', (isset($fields['correlativo']['language'])? $fields['correlativo']['language'] : array())) }}</td>
						<td>{{ $row->correlativo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Mantenimiento', (isset($fields['mantenimiento']['language'])? $fields['mantenimiento']['language'] : array())) }}</td>
						<td>{{ $row->mantenimiento}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Fecha Factura', (isset($fields['fecha_factura']['language'])? $fields['fecha_factura']['language'] : array())) }}</td>
						<td>{{ $row->fecha_factura}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Costo Bolivares', (isset($fields['costo_bolivares']['language'])? $fields['costo_bolivares']['language'] : array())) }}</td>
						<td>{{ $row->costo_bolivares}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Costo Dolares', (isset($fields['costo_dolares']['language'])? $fields['costo_dolares']['language'] : array())) }}</td>
						<td>{{ $row->costo_dolares}} </td>
						
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