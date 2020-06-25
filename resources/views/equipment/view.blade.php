@if($setting['view-method'] =='native')
	<div class="toolbar-nav">
		<div class="row">
			
			<div class="col-md-6 " >
		   		<a href="{{ ($prevnext['prev'] != '' ? url('equipment/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-sm" onclick="ajaxViewDetail('#equipment',this.href); return false; "><i class="fa fa-arrow-left"></i>  </a>	
				<a href="{{ ($prevnext['next'] != '' ? url('equipment/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-sm " onclick="ajaxViewDetail('#equipment',this.href); return false; "> <i class="fa fa-arrow-right"></i>  </a>					
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
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Codigo Equipo', (isset($fields['codigo_equipo']['language'])? $fields['codigo_equipo']['language'] : array())) }}</td>
						<td>{{ $row->codigo_equipo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Serial', (isset($fields['serial']['language'])? $fields['serial']['language'] : array())) }}</td>
						<td>{{ $row->serial}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Modelo', (isset($fields['modelo']['language'])? $fields['modelo']['language'] : array())) }}</td>
						<td>{{ $row->modelo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Costo Inicial', (isset($fields['costo_inicial']['language'])? $fields['costo_inicial']['language'] : array())) }}</td>
						<td>{{ $row->costo_inicial}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Costo Dolar', (isset($fields['costo_dolar']['language'])? $fields['costo_dolar']['language'] : array())) }}</td>
						<td>{{ $row->costo_dolar}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Descripcion', (isset($fields['descripcion']['language'])? $fields['descripcion']['language'] : array())) }}</td>
						<td>{{ $row->descripcion}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Imagen', (isset($fields['imagen']['language'])? $fields['imagen']['language'] : array())) }}</td>
						<td>{{ $row->imagen}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Tipo', (isset($fields['tipo']['language'])? $fields['tipo']['language'] : array())) }}</td>
						<td>{{ $row->tipo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Subtipo', (isset($fields['subtipo']['language'])? $fields['subtipo']['language'] : array())) }}</td>
						<td>{{ $row->subtipo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Condicion', (isset($fields['condicion']['language'])? $fields['condicion']['language'] : array())) }}</td>
						<td>{{ $row->condicion}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Marca', (isset($fields['marca']['language'])? $fields['marca']['language'] : array())) }}</td>
						<td>{{ $row->marca}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Adquirido', (isset($fields['fecha_adquision']['language'])? $fields['fecha_adquision']['language'] : array())) }}</td>
						<td>{{ $row->fecha_adquision}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Ubicacion', (isset($fields['ubicacion']['language'])? $fields['ubicacion']['language'] : array())) }}</td>
						<td>{{ $row->ubicacion}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Observacion', (isset($fields['observacion']['language'])? $fields['observacion']['language'] : array())) }}</td>
						<td>{{ $row->observacion}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Create At', (isset($fields['create_at']['language'])? $fields['create_at']['language'] : array())) }}</td>
						<td>{{ $row->create_at}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Entry By', (isset($fields['entry_by']['language'])? $fields['entry_by']['language'] : array())) }}</td>
						<td>{{ $row->entry_by}} </td>
						
					</tr>
				
			</tbody>	
		</table>  
			
		 	
		 
@if($setting['form-method'] =='native')
	</div>	

@endif		