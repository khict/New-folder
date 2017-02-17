@extends('layouts.item')
@section('button')
<div>
<button type="button" class="btn btn-primary button-height"><a> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New </a></button>
<button type="button" class="btn btn-success button-height"><a> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a></button>
<button type="button" class="btn btn-info button-height"><a> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete</a></button>
</div>
@endsection
@section('menu-item')
<ul class="list-group">
<li class="list-group-item"><a href="">Menus</a></li>
<li class="list-group-item"><a href="">Menu Items</a></li>
</ul>
@endsection

@section('daboard')
@yield('content')
@endsection