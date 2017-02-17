@extends('layouts.menu')
@section('title', 'New Menu')
@section('content')
	<form class="form-horizontal col-sm-4  col-md-4 ">
	  <div class="form-group">
	    <label for="menu" class="col-sm-4 control-label">Menu</label>
	    <div class="col-sm-8">
	      <input type="text" class="form-control" id="menu" placeholder="Enter Menu Name">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="desc" class="col-sm-4 control-label">Description</label>
	    <div class="col-sm-8">
	      <input type="text" class="form-control" id="description" placeholder="Description">
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <div class="col-sm-offset-4 col-sm-8">
	      <button type="submit" class="btn btn-success">Save</button>
	    </div>
	  </div>
	</form>
	
@endsection