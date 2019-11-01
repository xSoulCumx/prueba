 {!! Form::open(array('url'=>'sximo/module/dobuild/'.$module_name, 'class'=>'form-horizontal','id'=>'rebuildForm')) !!}
    <div class="text-center result"></div>
    <p class="text-center" style="font-weight: bold;">
        <b> Build All Codes </b> <br />
        <span class="text-center"> <i class="icon-arrow-down3"></i> </span>
    </p>
  <div class="form-group row">
    <label for="ipt" class=" control-label col-md-4">  </label>
    <div class="col-md-8">
      <a href="{{ url('sximo/module/rebuild/'.$module_id)}}" class="btn btn-danger" id="rebuild" ><i class="fa fa-repeat"></i> Rebuild All Codes </a> 
      </div>
  </div> 
<hr />
    <p class="text-center " style="font-weight: bold;">
    <b>Or Build Separate Codes</b> <br />
        <span class="text-center"> <i class="icon-arrow-down3"></i> </span>
    </p>
 <h5> Backend View </h5>
  <hr />
  <div class="form-group row">
    <label for="ipt" class=" control-label col-md-4">Controller </label>
	<div class="col-md-8">
	  <label class="">
	  <input name="controller" type="checkbox" id="controller" value="1">
	  <code> {{ ucwords($module) }}Controller.php </code> <br />will be replaced with new code 
	  </label>
	 </div> 
  </div>  

  <div class="form-group row">
    <label for="ipt" class=" control-label col-md-4">Model </label>
	<div class="col-md-8">
	  <label class="">
	  	<input name="model" type="checkbox" id="model" value="1">
		 <code>{{ ucwords($module) }}.php</code> Model <br />will be replaced with new code 
	  </label>
	 </div> 
  </div>  
  
  <div class="form-group row">
    <label for="ipt" class=" control-label col-md-4">Grid Table </label>
	<div class="col-md-8">
	  <label class="">
	  <input name="grid" type="checkbox" id="grid" value="1">
	  <code>index.blade.php</code>  at <code>views/{{ $module }}/ </code> folder <br /> will be replaced with new code 
	  </label>
	 </div> 
  </div>  

  <div class="form-group row">
    <label for="ipt" class=" control-label col-md-4">Form </label>
	<div class="col-md-8">
	  <label class="">
	  <input name="form" type="checkbox" id="form" value="1" checked>
	  <code>form.blade.php</code>  at <code>views/{{ $module }}/ </code> folder <br /> will be replaced with new code 
	 
	  </label>
	 </div> 
  </div>        
  
  <div class="form-group row">
    <label for="ipt" class=" control-label col-md-4">View Detail  </label>
	<div class="col-md-8">
	  <label class="">
	  <input name="view" type="checkbox" id="view" value="1" checked>
     <code>view.blade.php</code>  at <code>views/{{ $module }}/ </code> folder <br /> will be replaced with new code 
	  </label>
	   <input name="rebuild" type="hidden" id="rebuild" value="ok">
	   <input name="module_id" type="hidden" id="module_id" value="{{ $module_id}}">
	 </div> 
  </div>   
	<hr />
 <h5> Frontend  View </h5>
  	<hr />
  
  <div class="form-group row">
    <label for="ipt" class=" control-label col-md-4">Frontend Grid   </label>
	<div class="col-md-8">
	  <label class="">
	  <input name="frontgrid" type="checkbox" id="frontgrid" value="1" >
     <code>index.blade.php</code>  at <code>views/{{ $module }}/public/ </code> folder <br /> will be replaced with new code 
	  </label>
	   
	 </div> 
  </div>

    <div class="form-group row">
    <label for="ipt" class=" control-label col-md-4">Frontend View Detail  </label>
	<div class="col-md-8">
	  <label class="">
	  <input name="frontview" type="checkbox" id="frontview" value="1" >
     <code>view.blade.php</code>  at <code>views/{{ $module }}/public/ </code> folder <br /> will be replaced with new code 
	  </label>
	  
	 </div> 
  </div>

   <div class="form-group row">
    <label for="ipt" class=" control-label col-md-4">Frontend Form  </label>
	<div class="col-md-8">
	  <label class="">
	  <input name="frontform" type="checkbox" id="frontform" value="1" >
     <code>form.blade.php</code>  at <code>views/{{ $module }}/public </code> folder <br /> will be replaced with new code 
	  </label>
	   
	 </div> 
  </div> 


   <div class="form-group row">
    <label for="ipt" class=" control-label col-md-4"></label>
	<div class="col-md-8">
	  <button type="submit" name="submit" id="submitRbld" class="btn btn-sm btn-danger"> Re-Build Now</button>
	 </div> 
  </div>       

 {!! Form::close() !!}
 <script type="text/javascript">
	$(function(){

        $('#rebuild').click(function () {
            var url = $(this).attr("href");
            $(this).html('<i class="icon-spinner7"></i> Processing .... ');
            $.get(url, function( data ) {
            	console.log(data)
              $( ".result" ).html( '<p class="alert alert-success">'+data.message+'</p>' );
             $('#rebuild').html('<i class="icon-spinner7"></i>  Rebuild All Codes ');
            });
            return false;
        })
        /*
		$('input[type="checkbox"],input[type="radio"]').iCheck({
			checkboxClass: 'icheckbox_square-red',
			radioClass: 'iradio_square-red',
		});	
		*/

		$('#rebuildForm').submit(function(){
			var act = $(this).attr('action');
			 $('#submitRbld').html('<i class="icon-spinner7"></i> Processing .... ');
			$.post(act,$(this).serialize(),
			    function(data){
			    	if(data.status=='success')
			    	{
			    		$.get(data.url, function( json ) {
				            $( ".result" ).html( '<p class="alert alert-success">'+json.message+'</p>' );
				            $('#submitRbld').html('<i class="icon-spinner7"></i>  Rebuild Now ');
				             //alert(json.message)
				        });	
			    	}
			      
			    }, "json");
			return false;
		});
		
	})
 </script>

