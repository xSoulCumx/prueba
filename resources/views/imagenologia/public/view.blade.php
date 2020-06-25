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
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Servico', (isset($fields['servico']['language'])? $fields['servico']['language'] : array())) }}</td>
						<td>{{ $row->servico}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Nombre Paciente', (isset($fields['nombre_paciente']['language'])? $fields['nombre_paciente']['language'] : array())) }}</td>
						<td>{{ $row->nombre_paciente}} </td>
						
					</tr>
				
			<?php 
			$limited = isset($fields['apellido_paciente']['limited']) ? $fields['apellido_paciente']['limited'] :'';
			if(SiteHelpers::filterColumn($limited )) { ?>
						
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Apellido Paciente', (isset($fields['apellido_paciente']['language'])? $fields['apellido_paciente']['language'] : array())) }}</td>
						<td>{{ $row->apellido_paciente}} </td>
						
					</tr>
				
			<?php } ?>
			<?php 
			$limited = isset($fields['cedula_paciente']['limited']) ? $fields['cedula_paciente']['limited'] :'';
			if(SiteHelpers::filterColumn($limited )) { ?>
						
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Cedula Paciente', (isset($fields['cedula_paciente']['language'])? $fields['cedula_paciente']['language'] : array())) }}</td>
						<td>{{ $row->cedula_paciente}} </td>
						
					</tr>
				
			<?php } ?>
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Email', (isset($fields['email']['language'])? $fields['email']['language'] : array())) }}</td>
						<td>{{ $row->email}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Estudio', (isset($fields['estudio']['language'])? $fields['estudio']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->estudio,'estudio','1:tb_estudios:id:codigo|nombre') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Cd', (isset($fields['cd']['language'])? $fields['cd']['language'] : array())) }}</td>
						<td>{!! SiteHelpers::formatRows($row->cd,$fields['cd'],$row ) !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Placa', (isset($fields['placa']['language'])? $fields['placa']['language'] : array())) }}</td>
						<td>{!! SiteHelpers::formatRows($row->placa,$fields['placa'],$row ) !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Doctor', (isset($fields['doctor']['language'])? $fields['doctor']['language'] : array())) }}</td>
						<td>{{ $row->doctor}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Informado', (isset($fields['informado']['language'])? $fields['informado']['language'] : array())) }}</td>
						<td>{!! SiteHelpers::formatRows($row->informado,$fields['informado'],$row ) !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Radiologo', (isset($fields['radiologo']['language'])? $fields['radiologo']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->radiologo,'radiologo','1:tb_users:id:username') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Archivo', (isset($fields['archivo']['language'])? $fields['archivo']['language'] : array())) }}</td>
						<td>{{ $row->archivo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right font-weight-bold'>{{ SiteHelpers::activeLang('Fecha', (isset($fields['fecha']['language'])? $fields['fecha']['language'] : array())) }}</td>
						<td>{{ date('F j, Y, g:i a',strtotime($row->fecha)) }} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	