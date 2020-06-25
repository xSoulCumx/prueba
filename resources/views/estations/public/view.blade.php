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
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	