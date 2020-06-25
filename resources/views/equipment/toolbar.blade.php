			<!-- Toolbar Top -->
		<div class="toolbar-nav">
			<div class="row ">
				<div class="col-md-6"> 	
					@if($access['is_add'] ==1)
						{!! SiteHelpers::buttonActionCreate($pageModule,$setting) !!}
					@endif

					<div class="btn-group">
							<button type="button" class="btn  btn-sm dropdown-toggle btn-dark text-white py-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars"></i> Bulk Action </button>
				        <ul class="dropdown-menu">
				         @if($access['is_excel'] ==1)
							<li class="nav-item"><a href="{{ url( $pageModule .'/export?do=excel&return='.$return) }}" class="nav-link"> Export CSV </a></li>	
						@endif
						@if($access['is_add'] ==1)
							<li class="nav-item"><a href="{{ url($pageModule .'/import?return='.$return) }}" onclick="SximoModal(this.href, 'Import CSV'); return false;" class="nav-link">Import CSV</a></li>
							<li class="nav-item"><a href="javascript://ajax" class="nav-link Action_Row" code="copy" title="Copy" > Copy selected</a></li>
						@endif	
							<li class="nav-item"><a href="{{ url($pageModule) }}"  class="nav-link"> Clear Search </a></li>
				          	<div class="dropdown-divider"></div>
				         @if($access['is_remove'] ==1)
							 <li class="nav-item"><a href="javascript://ajax"   class="nav-link tips Action_Row" code="remove" title="{{ __('core.btn_remove') }}">
							Remove Selected </a></li>
						@endif 
				          
				        </ul>
				        <a href="{{ url($pageModule) }}" class="tips btn " title="{{ __('core.btn_reload') }}" ><i class="fa  fa-sync-alt"></i></a>
				    </div>    
				</div>
			<?php  
$agrupar=1;?>	
				<div class="col-md-2 text-right">

					<div class="">
						<select class="btn btn-dark text-white" id="group-switch">
							<option value="">Agrupar...</option>
							<?php foreach ($tableGrid as $t) :
									if($t['view'] =='1'):
										$limited = isset($t['limited']) ? $t['limited'] :'';
										if(!SiteHelpers::filterColumn1($limited ))
										{
											$agrupar++;
											echo '<option value='.$agrupar.'>'.\SiteHelpers::activeLang($t['label'],(isset($t['language'])? $t['language'] : array())).'</option>';	

										}
									endif;
								endforeach; ?>

							
						</select>
					</div>

						
				</div>


				<div class="col-md-4 text-right">
					<div class="input-group text-right">
					      <div class="input-group-prepend">
					        <button type="button" class="btn btn-sm btn-dark text-white " 
					        onclick="SximoModal('{{ url($pageModule."/search") }}','Advance Search'); " ><i class="fa fa-filter"></i> Filtro </button>
					      </div><!-- /btn-group -->
					      <input type="text" class="form-control form-control-md dosearch py-2" data-target="{{ url($pageModule) }}" data-div="{{ $pageModule }}" aria-label="..." placeholder=" Escriba y pulse enter...  ">
					</div>  
					    
				</div>    
			</div>					
			<!-- End Toolbar Top -->
		</div>	