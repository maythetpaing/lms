@extends('backendtemplate')
@section('content')
<div class="container-fluid text-center">
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
				{{-- <th>Actions</th> --}}
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			 @foreach($members as $member)           
                  @foreach($member->books as $book)
                  <tr>
                  <td>{{$i++}}</td>
                  <td>{{$member->name}}</td>
                  <td>{{$book->name}}</td>
                  <td>{{$book->created_at}}</td>
                    <td>{{$book->pivot->due_date}}</td>
                    {{-- <td>{{$book->pivot->status}}</td> --}}
                    {{-- <td>{{$book->pivot->fee}}</td> --}}
                  </tr>  
                  @endforeach
                @endforeach
		</tbody>
	</table>
</div>
@endsection