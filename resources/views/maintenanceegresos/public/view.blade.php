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
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	