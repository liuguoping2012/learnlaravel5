<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>首页</title>
</head>
<body>
	<h1>您要找的人是：<?php echo $name; ?></h1>
	<!--- Name Field --->
	<div class="form-group">
	    {!! Form::label('name', 'Name:') !!}
	    {!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>

	<!--- Password Field --->
	<div class="form-group">
	    {!! Form::label('password', 'Password:') !!}
	    {!! Form::password('password', null, ['class' => 'form-control']) !!}
	</div>
</body>
</html>