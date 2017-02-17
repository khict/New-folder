@extends('layouts.app')
@section('title', 'Home Page')

@section('home')
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
			<ul class="nav menu">
				<li class="active"><a href=""> Dashboard</a></li>
				<li><a href=""><span class="glyphicon glyphicon-th-list" aria-hidden="true"> Menu</span> </a></li>
				<li><a href=""><span class="glyphicon glyphicon-folder-open" aria-hidden="true"> Category</span> </a></li>
				<li><a href=""><span class="glyphicon glyphicon-book" aria-hidden="true"> Content</span></a></li>				
			</ul>
		</div><!--/.sidebar-->
			
		<div class="col-sm-9  col-lg-10  main">			
				<div class="row">
					<ol class="breadcrumb">
						<li><a href="#"></a></li>
						<li class="active">@yield('task-name')</li>
					</ol>
				</div><!--/.row-->
				@yield('content')	
		</div>	<!--/.main-->
@endsection
