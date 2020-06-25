@if($setting['view-method'] =='native')
	<div class="toolbar-nav">
		<div class="row">
			
			<div class="col-md-6 " >
		   		<a href="{{ ($prevnext['prev'] != '' ? url('estudios/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-sm" onclick="ajaxViewDetail('#estudios',this.href); return false; "><i class="fa fa-arrow-left"></i>  </a>	
				<a href="{{ ($prevnext['next'] != '' ? url('estudios/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-sm " onclick="ajaxViewDetail('#estudios',this.href); return false; "> <i class="fa fa-arrow-right"></i>  </a>					
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
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Codigo', (isset($fields['codigo']['language'])? $fields['codigo']['language'] : array())) }}</td>
						<td>{{ $row->codigo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Nombre', (isset($fields['nombre']['language'])? $fields['nombre']['language'] : array())) }}</td>
						<td>{{ $row->nombre}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Area', (isset($fields['area']['language'])? $fields['area']['language'] : array())) }}</td>
						<td>{{ $row->area}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Proyecciones', (isset($fields['proyecciones']['language'])? $fields['proyecciones']['language'] : array())) }}</td>
						<td>{{ $row->proyecciones}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Tipo', (isset($fields['tipo']['language'])? $fields['tipo']['language'] : array())) }}</td>
						<td>{{ $row->tipo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Fecha', (isset($fields['fecha']['language'])? $fields['fecha']['language'] : array())) }}</td>
						<td>{{ date('F j, Y',strtotime($row->fecha)) }} </td>
						
					</tr>
				
			</tbody>	
		</table>  
			
		 	
		 
@if($setting['form-method'] =='native')
	</div>	

@endif		