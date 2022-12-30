<?php
session_start();
session_destroy();
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="register_style.css">
    <style>
    a:link {color:blue;}
    </style>
</head>
<body>
<div class="signup-form">
    <form action="login2.php" method="post">
		<h2>Login</h2>
        <div class="form-group">
			<input type="text" class="form-control" name="id" placeholder="User Id" required="required">       	
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="u_password" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
        </div>
        <div style="text-align:center; font-size:15px; text-decoration:underline;" >
            <a href="signup.html">sign up</a>
        </div>
    </form>
</div>


</body>
</html>