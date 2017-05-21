@extends('layouts.master')

@section('title','Viva La Via')

@section('content')
	<canvas id="myChart" width="400" height="400"></canvas>
@stop

@section('js-script')
	
	

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.js"></script>
	<script src="/assets/js/main.js"></script>
@stop