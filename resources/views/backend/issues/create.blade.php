@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Issue (Form)</h2>

	
	<div class="offset-md-2 col-md-8">
		<form enctype="multipart/form-data" method="post" action="{{route('issues.store')}}">
			@csrf
			<div class="form-group">
				<label>Member</label>
				<select name="member" class="form-control @error('member') is-invalid @enderror" id="member">
					@foreach($members as $member)
					<option value="{{$member->id}}">{{$member->name}}</option>
					@endforeach
					@error('member')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
				</select>
			</div>
			<div class="form-group">
				<label>Book</label>
				<select name="book" class="form-control @error('book') is-invalid @enderror" id="book">
					@foreach($books as $book)
					<option value="{{$book->id}}">{{$book->name}}</option>
					@endforeach
					@error('book')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
				</select>
			</div>
			{{-- <div class="form-group">
				<label>Issue Date</label>
				<input type="date" name="issuedate" class="form-control @error('issuedate') is-invalid @enderror" id="issuedate">
				@error('issuedate')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror
			</div> --}}
			<div class="form-group">
				<label>Due Date</label>
				<input type="date" name="due_date" class="form-control @error('due_date') is-invalid @enderror" id="due_date">
				@error('due_date')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror
			</div>

			
			
			<input type="submit" value="Issue" class="btn btn-outline-primary">


		</form>
	</div>
</div>
@endsection
