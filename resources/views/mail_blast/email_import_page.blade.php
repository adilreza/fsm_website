<html lang="en">
<head>
	<title>import client email</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">fsm_admin -Import Excel and CSV into database</a>
			</div>
		</div>
    </nav>
    <hr>
	<div class="container">
		<a href="{{ URL::to('downloadExcel/xls') }}"><button class="btn btn-success">See all client email list</button></a>
		<form style="border: 1px solid #a1a1a1;margin-top: 15px;padding: 30px;border-radius:10px;background:#f5f6fa;" action="{{ URL::to('/admin/insert_email') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="file" name="import_file" class="form-control btn-sm" />
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