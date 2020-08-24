@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Member Edit(Form/old value)</h2>
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<div class="offset-md-2 col-md-8">
		<form enctype="multipart/form-data" method="post" action="{{route('members.update',$member->id)}}">
			@csrf
			@method('PUT')
			
			<div class="form-group">
				<label>Name:</label>
				<input type="text" name="name" class="form-control" value="{{$member->name}}">
			</div>

			<div class="form-group">
				<label>Email:</label>
				<input type="email" name="email" class="form-control" value="{{$member->email}}">
			</div>
			<div class="form-group">
				<label>Phone:</label>
				<input type="number" name="phone" class="form-control" value="{{$member->phone}}">
			</div>
			<div class="form-group">
				<label>Address:</label>
				<textarea class="form-control" id="address" name="address">{{$member->address}}</textarea>
			</div>
			
			<div class="form-group">
				<label>RollNO/Department:</label>
				<input type="text" name="edulevel" class="form-control" value="{{$member->edulevel}}">
			</div>
			
			
			
			<input type="submit" value="Update" class="btn btn-outline-primary">


		</form>
	</div>
</div>
@endsection