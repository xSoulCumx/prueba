@if($setting['view-method'] =='native')
	<div class="toolbar-nav">
		<div class="row">
			
			<div class="col-md-6 " >
		   		<a href="{{ ($prevnext['prev'] != '' ? url('maintenance/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-sm" onclick="ajaxViewDetail('#maintenance',this.href); return false; "><i class="fa fa-arrow-left"></i>  </a>	
				<a href="{{ ($prevnext['next'] != '' ? url('maintenance/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-sm " onclick="ajaxViewDetail('#maintenance',this.href); return false; "> <i class="fa fa-arrow-right"></i>  </a>					
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
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Id Mantenimientos', (isset($fields['id_mantenimientos']['language'])? $fields['id_mantenimientos']['language'] : array())) }}</td>
						<td>{{ $row->id_mantenimientos}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Equipo', (isset($fields['equipo']['language'])? $fields['equipo']['language'] : array())) }}</td>
						<td>{{ $row->equipo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Tipo', (isset($fields['tipo']['language'])? $fields['tipo']['language'] : array())) }}</td>
						<td>{{ $row->tipo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Razon', (isset($fields['razon']['language'])? $fields['razon']['language'] : array())) }}</td>
						<td>{{ $row->razon}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Proveedor', (isset($fields['proveedor']['language'])? $fields['proveedor']['language'] : array())) }}</td>
						<td>{{ $row->proveedor}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Fecha', (isset($fields['fecha']['language'])? $fields['fecha']['language'] : array())) }}</td>
						<td>{{ $row->fecha}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Duracion', (isset($fields['duracion']['language'])? $fields['duracion']['language'] : array())) }}</td>
						<td>{{ $row->duracion}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Descripcion', (isset($fields['descripcion']['language'])? $fields['descripcion']['language'] : array())) }}</td>
						<td>{{ $row->descripcion}} </td>
						
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