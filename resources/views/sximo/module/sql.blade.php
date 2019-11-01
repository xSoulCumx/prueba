@extends('layouts.app')

@section('content')
<div class="page-header"><h2>  {{ $pageTitle }} <small>Configuration</small> </h2></div>
 @include('sximo.module.tab',array('active'=>'sql','type'=>  $type ))

<div class="p-3">


         
          {!! Form::open(array('url'=>'sximo/module/savesql/'.$module_name, 'class'=>'form-vertical ' ,'id'=>'SQL' , 'parsley-validate'=>'','novalidate'=>' ')) !!}
          <div class="infobox ">
          <button type="button" class="close" data-dismiss="alert"> x </button>  
          <p> <strong>Tips !</strong> U can use query builder tool such <a href="http://code.google.com/p/sqlyog/downloads/list" target="_blank">SQL YOG </a> , PHP MyAdmin , Maestro etc to build your query statment and preview the result , <br /> then copy the syntac here </p> 
          </div>  


          <div class="form-group">
          <label for="ipt" class=" control-label">SQL SELECT & JOIN</label>
          <textarea name="sql_select" rows="5" id="sql_select" class="tab_behave form-control form-control-sm"  placeholder="SQL Select & Join Statement" >{{ $sql_select }}</textarea>
          </div>  

          <div class="form-group">
          <label for="ipt" class=" control-label">SQL WHERE CONDITIONAL</label>
          <textarea name="sql_where" rows="2" id="sql_where" class="form-control form-control-sm" placeholder="SQL Where Statement" >{{ $sql_where }}</textarea>
          </div> 

          <div class="infobox infobox-danger ">
          <p> <strong>Warning !</strong> Please make sure SQL where not empty , for prevent error when user attempt submit  <strong>SEARCH</strong>   </p>  
          </div>  
            


          <div class="form-group">
          <label for="ipt" class=" control-label">SQL GROUP</label>
          <textarea name="sql_group" rows="2" id="sql_group" class="form-control form-control-sm"   placeholder="SQL Grouping Statement" >{{ $sql_group }}</textarea>

          </div> 
          <div class="form-group">
          <label for="ipt" class=" control-label"></label>
          <button type="submit" class="btn btn-primary"> Save SQL </button>
          </div>  

          <input type="hidden" name="module_id" value="{{ $row->module_id }}" />
          <input type="hidden" name="module_name" value="{{ $row->module_name }}" />

          {!! Form::close() !!}


     
 
</div>
 
<script type="text/javascript">
  $(document).ready(function(){

    <?php echo SximoHelpers::sjForm('SQL'); ?>

  })
</script> 
@stop