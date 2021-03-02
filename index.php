<!DOCTYPE html>
<html>
<head>
	<title>Please log in</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<form action="login.php" method="POST" class="ml-auto mr-auto mt-3 col-6">
	  <div class="form-group col-8">
	    <label for="email">Email address</label>
	    <input type="email" class="form-control" id="email" placeholder="Enter email">
	  </div>
	  <div class="form-group col-8">
	    <label for="password">Password</label>
	    <input type="password" class="form-control" id="password" placeholder="Password">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</body>
</html>