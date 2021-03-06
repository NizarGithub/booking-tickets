@section('title_web','Venue')	
@section('title_content','List')	
@section('title_icon','fa fa-fw fa-table')
@section('title_content_small','Venue')
@section('title_breadcrumb','Venue')	
@extends('member')
@section('content')	
<div class="row">
<div class="col-md-8 col-md-offset-2">	
	<div class="row">
		<div class="col-md-12">
			{!! Session::get('message') !!}
		</div>
	</div>
	<div class="row">
		<div class="col-md-5">
			<a href="{!! URL('venue/add') !!}" class="btn btn-xs btn-primary" style="margin-top:15px;"><span class="glyphicon glyphicon-plus"></span> Add</a>
		</div>
	</div>
	<div class="row">
			<table class="table table-striped">
			    <thead>
			    	<tr>
			           	<th width="10">No</th>
			            <th>Vanue Name</th>
			            <th>Venue Location</th>
			            <th class="text-center">Edit</th>
			            <th class="text-center">Delete</th>
			      </tr>
			    </thead>
			    <tbody>
			    	<?php $i=1; ?>
			 	   @foreach($data as $row)
					<tr>
						
						<td>{{ $i++ }}</td>
					 	<td>{{ $row->venue_name }}</td>
					 	<td>{{ $row->venue_location }}</td>
					 	
					 	<td class="text-center" width="70px"><a href="{!! URL('venue/edit/'.$row->id) !!}"><span class="glyphicon glyphicon-edit"></span></a></td>
					 	<td class="text-center" width="70px"><a href="{!! URL('venue/delete/'.$row->id) !!}"><span class="glyphicon glyphicon-trash"></span></a></td>
					 </tr>
					 @endforeach
					 @if(count($data) == 0)
					 <tr>
						<td class="text-center" colspan="6"><h4>Data empty</h4></td>
					 </tr>
					 @endif
			    </tbody>
			</table>
		<!-- $data->appends(['sort' => 'votes'])->render() -->
		{!! $data->render() !!}
		</div>
	</div>
	</div>
@stop
