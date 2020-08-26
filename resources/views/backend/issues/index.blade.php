@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Issue List(Table)</h2>
	<a href="{{route('issues.create')}}" class="btn btn-success float-right">+ Add Issue</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Member Name</th>
				<th>Book Name</th>
				<th>Issue Date</th>
				<th>Due Date</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($issues as $issue)
			<tr>
				<td>{{$i++}}</td>
				
				<td>{{$issue->id}}</td>
				<td>{{$issue->book->name}}</td>
				<td>{{$issue->created_at}}</td>
				<td>{{$issue->due_date}}</td>
				
				
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection

