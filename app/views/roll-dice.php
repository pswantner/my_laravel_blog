
@extends('layouts.master')

@section('top-script')
<!-- headerstuff -->


@stop
@section('content')
<!-- body stuff -->
<h2>Your Guess:{{{$guess}}}</h2>
<h2>Actual Roll: {{{$roll}}}</h2>
<h2>Status : {{{ $result}}}</h2>


@stop


@section('bottom-script')

<!-- footer stuff -->


@stop

<!-- alternative do the php if statement in
<?php if ($roll==$result);?>
	<h2>Right!</h2>
<?php else; ?>
	<h2>Wrong</h2>
<?php endif;?> -->