<div class="m-t" style="padding-top:25px;">	
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-responsive" > 	

		<table class="table table-striped " >
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
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	