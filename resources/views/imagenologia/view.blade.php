
	<div class="toolbar-nav">
		<div class="row">
			<div class="col-md-6" >
		   	<!--	<a href="{{ ($prevnext['prev'] != '' ? url('imagenologia/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-sm btn-dark text-white" onclick="ajaxViewDetail('#imagenologia',this.href); return false; "><i class="fa fa-arrow-left"></i>  </a>	
				<a href="{{ ($prevnext['next'] != '' ? url('imagenologia/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-sm btn-dark text-white" onclick="ajaxViewDetail('#imagenologia',this.href); return false; "> <i class="fa fa-arrow-right"></i>  </a>					
			-->
			</div>	

			<div class="col-md-6 text-right" >
				<a href="javascript://ajax" onclick="ajaxViewClose('#{{ $pageModule }}')" class="tips btn btn-sm btn-dark text-white" title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
			</div>
		</div>
	</div>	


<div class="p-5">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs form-tab" role="tablist">
  	<li class="nav-item">

  		<a href="#home{{ $row->id }}" aria-controls="home" role="tab" data-toggle="tab" class="nav-link active">  {{ $pageTitle}} :   View Detail </a></li>
	@foreach($subgrid as $sub)
		<li class="nav-item">
			<a href="#{{ str_replace(" ","_",$sub['title']) }}{{ $row->{$sub['master_key']} }}" aria-controls="profile" role="tab" data-toggle="tab" class="nav-link font-weight-bold">
			{{ $pageTitle}} :  {{ $sub['title'] }}
			</a>
		</li>
	@endforeach
  </ul>


  <!-- Tab panes -->
  <div class="tab-content m-t">
  	<div role="tabpanel" class="tab-pane active" id="home{{ $row->id }}">

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
						
				</tbody>	
			</table>  		
		</div>
		
  	</div>
  	@foreach($subgrid as $sub)
  	<div role="tabpanel" class="tab-pane" id="{{ str_replace(" ","_",$sub['title']) }}{{ $row->{$sub['master_key']} }}"></div>
  	@endforeach
  </div>
</div>
		 	

	

<script type="text/javascript">
	$(function(){
		$('.form-tab a').on('click', function (e) {
		  	e.preventDefault()
		  	$(this).tab('show')
		})
		<?php foreach($subgrid as $sub) { ?>
			$('#{{ str_replace(" ","_",$sub['title']) }}{{ $row->{$sub['master_key']} }}').load('{!! url($sub['module']."/lookup?param=".implode("-",$sub)."-".$row->{$sub['master_key']})!!}')
		<?php } ?>

		
	})

</script>