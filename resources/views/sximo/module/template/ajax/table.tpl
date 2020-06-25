<?php usort($tableGrid, "SiteHelpers::_sort"); ?>

	 {!! (isset($search_map) ? $search_map : '') !!}
	 	@include($pageModule.'/toolbar')
	 <?php echo Form::open(array('url'=>'{class}', 'class'=>'form-horizontal' ,'id' =>'SximoTable'  ,'data-parsley-validate'=>'' )) ;?>
<div class="table-container" >	
	@if(count($rowData)>=1)
    <table class="table table-hover " id="{{ $pageModule }}Table">
        <thead>
			<tr>
				<th width="20" style="width: 20px;"> No </th>
				<th width="30" style="width: 30px;"> <input type="checkbox" class="checkall minimal-green" /></th>		
				@if($setting['view-method']=='expand')<th width="30" style="width: 30px;">  </th> @endif		
				<th width="30" style="width: 30px;"><?php echo Lang::get('core.btn_action') ;?></th>	
				<?php foreach ($tableGrid as $t) :
					if($t['view'] =='1'):
						$limited = isset($t['limited']) ? $t['limited'] :'';
						$addClass='class="tbl-sorting" ';
						if($insort ==$t['field'])
						{
							$dir_order = ($inorder =='desc' ? 'sort-desc' : 'sort-asc'); 
							$addClass='class="tbl-sorting '.$dir_order.'" ';
						}
						if(SiteHelpers::filterColumn($limited ))
						{
							echo '<th align="'.$t['align'].'" '.$addClass.' width="'.$t['width'].'">'.\SiteHelpers::activeLang($t['label'],(isset($t['language'])? $t['language'] : array())).'</th>';				
						} 
					endif;
				endforeach; ?>
				
			  </tr>
        </thead>

        <tbody>
        	@if($access['is_add'] =='1' && $setting['inline']=='true')
			<tr id="form-0" >
				<td> # </td>
				<td> </td>
				@if($setting['view-method']=='expand') <td> </td> @endif
				<td >
					<button onclick="saved('form-0')" class="btn btn-block" type="button"><i class="fa fa-save"></i> Save New </button>
				</td>
				@foreach ($tableGrid as $t)
					@if($t['view'] =='1')
					<?php $limited = isset($t['limited']) ? $t['limited'] :''; ?>
						@if(SiteHelpers::filterColumn($limited ))
						<td data-form="{{ $t['field'] }}" data-form-type="{{ Sitehelpers::inlineFormType($t['field'],$tableForm)}}">
							{!! SiteHelpers::transForm($t['field'] , $tableForm) !!}								
						</td>
						@endif
					@endif
				@endforeach

			  </tr>	 
			  @endif        
			
           		<?php foreach ($rowData as $row) : 
           			  $id = $row->{key};
           		?>
                <tr class="editable" id="form-{{ $row->{key} }}">
					<td class="thead"> <?php echo ++$i;?>  </td>
					<td ><input type="checkbox" class="ids minimal-green" name="ids[]" value="<?php echo $row->{key} ;?>" />  </td>					
					@if($setting['view-method']=='expand')
					<td><a href="javascript:void(0)" class="expandable" rel="#row-{{ $row->{key} }}" data-url="{{ url('{class}/'.$id) }}"><i class="fa fa-plus-circle " ></i></a></td>								
					@endif		
				 <td data-values="action" data-key="<?php echo $row->{key} ;?>"  >
					{!! SiteHelpers::buttonAction('{class}',$access,$id ,$setting) !!}
					{!! SiteHelpers::buttonActionInline($row->{key},'{key}') !!}	
						
				</td>						
					 <?php foreach ($tableGrid as $field) :
					 	if($field['view'] =='1') : 
							$value = SiteHelpers::formatRows($row->{$field['field']}, $field , $row);
						 	?>
						 	<?php $limited = isset($field['limited']) ? $field['limited'] :''; ?>
						 	 <?php $addClass= ($insort ==$field['field'] ? 'class="tbl-sorting-active" ' : ''); ?>
						 	@if(SiteHelpers::filterColumn($limited ))
								 <td align="<?php echo $field['align'];?>" data-values="{{ $row->{$field['field']} }}" data-field="{{ $field['field'] }}" data-format="{{ htmlentities($value) }}" {!! $addClass !!}>					 
									{!! $value !!}							 
								 </td>
							@endif	
						 <?php endif;					 
						endforeach; 
					  ?>			 
                </tr>
                @if($setting['view-method']=='expand')
                <tr style="display:none" class="expanded" id="row-{{ $row->{key} }}">
                	<td class="thead"></td>
                	<td></td>
                	<td></td>
                	<td colspan="{{ $colspan}}" class="data"></td>
                	<td></td>
                </tr>
                @endif				
            <?php endforeach;?>
              
        </tbody>
      
    </table>
	@else

	<div style="margin:100px 0; text-align:center;">
	
		<p> No Record Found </p>
	</div>
	
	@endif		
	
	</div>
	<input type="hidden" name="action_task" value="" />
	<?php echo Form::close() ;?>
	@include('ajaxfooter')
</div>	
@if($setting['inline'] =='true') @include('sximo.module.utility.inlinegrid') @endif
@include('sximo.module.template.ajax.javascript')
