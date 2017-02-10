<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/bootstrap.min.css') }}">
</head>
<body>
<div class="container" style="margin-top:20px;">
	<div class="col-md-6 col-xs-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Login</div>
			<div class="panel-body">
				<form method="post" action="">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<!-- row -->
				<div class="row">
					<label for="email" class="col-md-3">Email</label>
					<div class="col-md-9"><input type="email" name="email" class="form-control" id="email" required></div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top:5px;">
					<label for="password" class="col-md-3">Password</label>
					<div class="col-md-9"><input type="password" name="password" class="form-control" id="password" required></div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top:5px;">
					<label class="col-md-3"></label>
					<div class="col-md-9"><input type="submit" value="Login" class="btn btn-primary"></div>
				</div>
				<!-- end row -->
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>