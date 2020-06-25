@extends('layouts.app')

@section('content')
<?php usort($tableGrid, "SiteHelpers::_sort"); 
$limitado=[];?>
<div class="page-header">
  <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
</div>


<div class="">

	<div id="maintenanceegresosView"></div>	
	<div id="maintenanceegresosGrid">
		@include( $pageModule.'/toolbar')
		

		<div class="table-responsive">			
			<table id="maintenanceegresosTable" class="display table table-hover" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		            	<th>ID</th>	
		            	
		            @if($setting['view-method'] =='expand')<th></th>@endif
		            <th > Action </th>

		            
	            <?php foreach ($tableGrid as $t) :
					if($t['view'] =='1'):
						$limited = isset($t['limited']) ? $t['limited'] :'';
						if(SiteHelpers::filterColumn1($limited ))
						{
							array_push($limitado,'{"data":"'.$t['field'].'"},');

						} else {
							echo '<th align="'.$t['align'].'" width="'.$t['width'].'">'.\SiteHelpers::activeLang($t['label'],(isset($t['language'])? $t['language'] : array())).'</th>';				

						}
					endif;
				endforeach; ?>
						
					</tr>

				</thead>	
		               
		    </table>
		</div>	  
		
		
	</div>
	
</div>

<script type="text/javascript">

	$(document).ready(function() {
		$('.tips').tooltip();
		$('.dataselect').select2();
		var grupo = '';
	   	var table = $('#maintenanceegresosTable').DataTable( {
	        "processing": true,
	       
	        "serverSide": true,
	        //"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
			"pageLength": 50,
	        "ajax": {
	            "url": "{!! url('maintenanceegresos')!!}",
	            "type": "POST"
	             
        	},
        	"columnDefs": [{ 
        		"targets": [0],
                "visible": false,
                orderable: false,
            	className: 'select-checkbox'
        	}],
			 
			<?php 
		$trimmed = str_replace($limitado, '', $column) ;?>
        	"columns": [<?php echo $trimmed;?>],
        	'order': [[1, 'asc']],
			
			//Funcion para agregar grupo
			"drawCallback": function ( settings ) {


				if(grupo != '' ) { 

					var api = this.api();
					var rows = api.rows( {page:'current'} ).nodes();
					var last=null;

					api.column(grupo, {page:'current'} ).data().each( function ( group, i ) {
						if ( last !== group ) {
							console.log(grupo);
							$(rows).eq( i ).before(
								'<tr class="group "><td colspan="100" class=" text-center text-uppercase font-weight-bolder">'+group+'</td></tr>'
							
							);
							last = group;
						}
					} );

				}


			}, 


        	<?php if($access['is_excel'] ==1 ) { ?>
        	dom: 'Bfltip',
        	buttons: [
            	'copy', 'csv', 'excel', 'pdf', 'print'
        	]
        	<?php } ?>
        	
	    });

	   	<?php if($setting['view-method'] =='expand'): ?>
		$('#maintenanceegresosTable tbody').on('click', 'td.details-control', function () {
	        var tr = $(this).closest('tr');
	        var row = table.row( tr );
	        var id = row.data().rowId;

	        if ( row.child.isShown() ) {
	        	 row.child.hide();
            	tr.removeClass('shown');
	        }
	        else {
	            // Open this row
	            row.child.show();	            
	            row.child( expand_child(id) ).show();
	            tr.addClass('shown');
	            $.get('{{ url("maintenanceegresos/")}}/'+id , function(callback){
	            	$('#'+id).html(callback);
	            	$('#'+id).addClass('data');
	            })
		        
	            
	        }
    	});
    	<?php endif; ?>
		$('.dosearch').keyup(function( e ){
			if (e.keyCode === 13) {
				val = $(this).val();
				table.search(val ).draw();
			}
		})  

	    $('#maintenanceegresosTable').Sdtable({
	    	tableId : '#maintenanceegresos',
	    	table   : table,
	    	action  : '{{ url("maintenanceegresos")}}' 
	    });

		$('#group-switch').on('change', function() {
			if (this.val == '') {
				table
					.visible(false)
					.draw();
			}else{
				grupo =  parseInt(this.value)
				table
					.columns (this.value )
					.visible(true)
					.draw();

			}
		});

		
    		
		

	   
	});


    function expand_child( id )
    {
    	return '<div id="'+ id+'"><p class="text-center"> Cargando...espere!! </p></div>';	
    }

</script>


@endsection