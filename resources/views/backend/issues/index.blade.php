@extends('backendtemplate')
@section('content')


<div class="container-fluid">
	<h2 class="d-inline-block">Issue Book List(Table)</h2>
	<a href="{{route('issues.create')}}" class="btn btn-success float-right">Add Issue Book</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Member</th>
				<th>Book</th>
				<th>Issue Date</th>
				<th>Due Date</th>
				<th>Status</th>
				<th>Penalty Fee</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($issues as $issue)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$issue->member->name}}</td>
				<td>{{$issue->book->name}}</td>
				<td>{{$issue->created_at}}</td>
				<td>{{$issue->due_date}}</td>
				<td>{{$issue->status}}</td>
				<td>{{$issue->fee}}</td>
				<td>
					{{-- <a href="{{route('issues.show',$issue->id)}}" class="btn btn-warning">Detail</a> --}}
					<a href="#" class="btn btn-warning">Issue</a>
					
					
				</td>
			</tr>
			@endforeach()
		</tbody>
	</table>
</div>
@endsection



