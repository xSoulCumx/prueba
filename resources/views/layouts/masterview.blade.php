<div class="box box-primary">
	<div class="box-header with-border"><h3> Record Master :</h3></div>
	<div class="box-body">	
		<div class="table-responsive">
			<table class="table table-striped " >
				<tbody>	
				@foreach($grid as $t)
					@if($t['view'] ==1) 
				<tr>
					<td width='30%' class='label-view text-right'>{{ $t['label'] }}</td>
					<td>  {{ $row->$t['field'] }}</td>
					
				</tr>
					@endif
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>