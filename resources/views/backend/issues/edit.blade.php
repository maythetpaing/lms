@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Return</h2>
	<div class="offset-md-2 col-md-8">
		<form enctype="multipart/form-data" method="post" action="{{route('issues.update',$member->id)}}">
			@csrf
			@method('PUT')
			<div class="form-group">
				<label>Return:</label>

				<input type="number" name="status" class="form-control">
				<input type="hidden" name="book_id" value="{{$book->id}}">
				<input type="hidden" name="member_id" value="{{$member->id}}">
			</div>

			<input type="submit" value="Update" class="btn btn-outline-primary">


		</form>
	</div>
</div>
@endsection