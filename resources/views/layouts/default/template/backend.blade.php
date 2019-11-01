@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $title }} </h2></div>
<div class="p-5">
<?php echo $content ;?>
</div>
@endsection
