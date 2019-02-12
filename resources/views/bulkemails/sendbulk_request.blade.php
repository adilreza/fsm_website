<!DOCTYPE html>
<html lang="en">
<head>
  <title>fsm_bulk email</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="col-md-6">
<div class="card">
<div class="row">
  <h2>Fsm Bulk Message</h2>
<form action="{{URL::to('/sendbulk')}}" method="post" >

    {{csrf_field()}}
    <div class="form-group">
      <label for="email">Subject Name</label>
      <input type="text" class="form-control" id="email" placeholder="subject" name="subject">
    </div>
    <div class="form-group">
      <label for="pwd">Your Newsletter</label>
      <textarea type="text" class="form-control" rows="7" id="pwd" placeholder="newsletter" name="news"></textarea>
    </div>
    <button type="submit" class="btn btn-default btn-lg btn-primary">Submit</button>
  </form>
</div>
</div>
</div>
</div>

</body>
</html>
