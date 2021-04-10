<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
</head>
<body>
<div class="container">
	<div class="col-xl-6">
		<form method="post" action="/update">
			@csrf
			<input type="hidden" name="id" value="{{$data['id']}}">
			<div class="form-group">
				<label>Name : </label>
				<input type="text" name="name" class="form-control" value="{{$data['name']}}">
			</div>
			<div class="form-group">
				<label>Email : </label>
				<input type="text" name="email" class="form-control" value="{{$data['email']}}">
			</div>
			<input type="submit" name="" value="Update" class="btn btn-info">
		</form>
	</div>
</div>
</body>
</html>