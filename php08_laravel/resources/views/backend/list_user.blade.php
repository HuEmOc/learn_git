@extends('backend.layout')
@section('content')
<div class="col-md-8 col-xs-offset-2">
	<div style="margin-bottom:5px;">
		<a href="{{ url('admin/user/add') }}" class="btn btn-primary">Add user</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">List User</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th style="width:100px;"></th>
				</tr>
			<?php
				foreach($arr as $rows)
				{
			?>
				<tr>
					<td>{{ $rows->name }}</td>
					<td>{{ $rows->email }}</td>
					<td style="text-align:center;">
						<a href="{{ url('admin/user/edit') }}/{{ $rows->id }}">Edit</a>&nbsp;
						<a href="{{ url('admin/user/delete') }}/{{ $rows->id }}" onclick="return window.confirm('Are you sure?');">Delete</a>
					</td>
				</tr>
			<?php } ?>
			</table>
			<style type="text/css">
				.pagination{padding:0px; margin:0px;}
			</style>
			{{ $arr->links() }}
		</div>
	</div>
</div>
@endsection