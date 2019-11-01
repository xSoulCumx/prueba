@extends('layouts.app')

@section('content')
<div class="page-header"><h2>  {{ $pageTitle }} <small>Configuration</small> </h2></div>
@include('sximo.module.tab',array('active'=>'permission','type'=>$type))

<div class="p-3">

{!! Form::open(array('url'=>'sximo/module/savepermission/'.$module_name, 'class'=>'form-horizontal' ,'id'=>'fPermission')) !!}


	
<table class="table table-hover " id="table">
<tbody class="no-border-x no-border-y">	
  <tr>
	<td class="thead" field="name1" width="20">No</td>
	<td class="thead" field="name2">Group </td>
	<?php foreach($tasks as $item=>$val) {?>	
	<td class="thead" field="name3" data-hide="phone"><?php echo $val;?> </td>
	<?php }?>

  </tr>
 

  <?php $i=0; foreach($access as $gp) {?>	
  	<tr>
		<td  class="thead" width="20"><?php echo ++$i;?>
		<input type="hidden" name="group_id[]" value="<?php echo $gp['group_id'];?>" /></td>
		<td ><?php echo $gp['group_name'];?> </td>
		<?php foreach($tasks as $item=>$val) {?>	
		<td  class="">
		
		<label >
			<input name="<?php echo $item;?>[<?php echo $gp['group_id'];?>]" class="c<?php echo $gp['group_id'];?> minimal-green" type="checkbox"  value="1" 
			<?php if($gp[$item] ==1) echo ' checked="checked" ';?> />
		</label>	
		</td>

		<?php }?>
	</tr>  
	<?php }?>
  </tbody>
</table>	

<div class="infobox infobox-danger ">
  <button type="button" class="close" data-dismiss="alert"> x </button>
  <h5>Please Read !</h5>
  <ol> 
  	<li> If you want users <strong>only</strong> able to access they own records , then <strong>Global</strong> must be <code>uncheck</code> </li>
	<li> When you using this feature , Database table must have <strong><code>entry_by</code></strong> field </li>
	</ol>	
</div>	
<button type="submit" class="btn btn-success"> Save Changes </button>	
	
<input name="module_id" type="hidden" id="module_id" value="<?php echo $row->module_id;?>" />

 {!! Form::close() !!}	
	

</div>




<script>
	$(document).ready(function(){
	
		$(".checkAll").click(function() {
			var cblist = $(this).attr('rel');
			var cblist = $(cblist);
			if($(this).is(":checked"))
			{				
				cblist.prop("checked", !cblist.is(":checked"));
			} else {	
				cblist.removeAttr("checked");
			}	
			
		});  	
	});
</script>

<script type="text/javascript">
  $(document).ready(function(){

    <?php echo SximoHelpers::sjForm('fPermission'); ?>

  })
</script> 

@stop