@extends('layouts.app')
@section('title', 'Home Page')
@section('home')
	<div class="container-fuid">
		<div class="row title-function">
			<div class="name">
				<h3><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> @yield('function-name')</h3>
			</div>
		</div>
		
		<div class="row">
				@yield('items-content')
		</div>
	</div>
@endsection