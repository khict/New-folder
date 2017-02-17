@extends('layouts.app')
@section('title', 'Home Page')
@section('home')
	<div class="container-fuid">
		
		<div class="row" id="item-button">
			<div class="button-layout">
				@yield('button')
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-4 col-md-4 col-lg-2">
		  		@yield('menu-item')
				
			</div>
			<div class="col-sm-8 col-md-8 col-lg-10 right-side">
				@yield('daboard')
			</div>
		</div>
	</div>
	
@endsection