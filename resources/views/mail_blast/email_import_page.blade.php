<html lang="en">
<head>
	<title>import client email</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
			<a href="{{URL::to('/admin/home')}}">
					<button class="btn btn-warning"> Go DashBoard</button>
				</a>
				<a class="navbar-brand" href="#">Import Excel and CSV into database</a>
			</div>
		</div>
    </nav>
    <hr>
	<div class="container">
		<button class="btn btn-info">Hei, Your Insertion is Secure</button>
		<form style="border: 1px solid #a1a1a1;margin-top: 15px;padding: 30px;border-radius:10px;background:#f5f6fa;" action="{{ URL::to('/admin/insert_email') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="file" required name="import_file" class="form-control btn-sm" />
            <br>
			<button class="btn btn-primary">Import File</button>
		</form>
	</div>
<div class="container">
	@if(isset($msg))
		<hr>
		<p  style="color:green;">{{$msg}}</p>
	@endif
</div>

</body>
</html>