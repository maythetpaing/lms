@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Member List(Table)</h2>
	<a href="{{route('members.create')}}" class="btn btn-success float-right">+ Add Member</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Address</th>
				<th>RollNo/Department</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($members as $member)
			<tr>
				<td>{{$i++}}</td>
				
				<td>{{$member->name}}</td>
				<td>{{$member->email}}</td>
				<td>{{$member->phone}}</td>
				<td>{{$member->address}}</td>
				<td>{{$member->edulevel}}</td>
				
				<td>
					<a href="#" class="btn btn-warning">
					{{-- <i class="far fa-edit"></i> --}}
					Issue</a>
					<a href="{{route('members.edit',$member->id)}}" class="btn btn-warning">
					{{-- <i class="far fa-edit"></i> --}}
					Edit</a>
					<form method="post" action="{{route('members.destroy',$member->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
						@csrf
						@method('DELETE')
						<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
						
					</form>
					
				</td>
			</tr>
			@endforeach()
		</tbody>
	</table>
</div>


@endsection
