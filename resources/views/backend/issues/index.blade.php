@extends('backendtemplate')
@section('content')
<div class="container-fluid text-center">
	<h2 class="d-inline-block">Issue List(Table)</h2>
	<a href="{{route('issues.create')}}" class="btn btn-success float-right">+ Add Issue</a>
	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Member Name</th>
				<th>Book Name</th>
				<th>Issue Date</th>
				<th>Due Date</th>
				<th>RentState</th>
				<th>Actions</th>
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
                    <td>
                    	@if($book->pivot->status ==0)
                    		<h5 style="color: red;">Issue</h5>
                    	@else
                    		<h5 style="color: #23A38F;">Submit</h5>
                   		@endif
                    </td>
                    {{-- <td>{{$book->pivot->issue_date}}</td> --}}
                   <td>
                   	<form method="POST" action="{{route('issues.update',$member->id)
                   }}">
                   		@csrf
                   		@method('PUT')
                   		<input type="hidden" name="book_id" value="{{$book->id}}">
                   		<input type="hidden" name="due_date" value="{{$book->pivot->due_date}}">
                   		<input type="hidden" name="issue_date" value="{{$book->pivot->issue_date}}">
                   		<input type="hidden" name="fee" value="{{$book->pivot->fee}}">



                   		<input type="submit" value="Return" class="btn btn-warning">
                   	</form>
                  	
                  </td> 
                  </tr>  
                  @endforeach
                @endforeach
		</tbody>
	</table>
</div>
@endsection