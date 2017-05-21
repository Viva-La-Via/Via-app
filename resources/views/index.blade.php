@extends('layouts.master')

@section('title','whatever')

@section('content')
	<canvas id="myChart" width="400" height="400"></canvas>
@stop

@section('js-script')
	
	<script>
	var i = 0;
	var routeNames=[];
		@foreach($routes as $route)
			routeNames.push("{{ $route->Location }}");

			console.log(routeNames);
			i++;
		@endforeach
	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.js"></script>
	<script src="/assets/js/main.js"></script>
@stop