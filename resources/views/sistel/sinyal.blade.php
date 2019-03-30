<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body,
        html,
        .body {
            height: 100%;
            width: 100%;
        }

        body {
            background: radial-gradient(closest-corner, rgba(16, 47, 70, 0) 60%, rgba(16, 47, 70, 0.26)), linear-gradient(108deg, #26D0CE, #1A2980 90%);
        }

        .body {
            display: table;
        }

        .wrapper {
            display: table-cell;
            vertical-align: middle;
            text-align: center;
        }

        .info {
            margin: 0.5em 0;
            font-size: 1.25em;
            color: #FFF;
            text-shadow: 0 0 0.5em #000;
        }

        .input-phone {
            display: block;
            margin: 2em auto;
            padding: 0.5em 0.25em;
            border: none;
            border-radius: 0.2em;
            font-size: 1.5em;
            text-align: center;
            box-shadow: 0 0 1em 0.25em rgba(0, 0, 0, 0.2);
        }

    </style>
</head>

<body>
	@if (count($errors) > 0)
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
    <div class="body" ng-app="myApp">
        <div class="wrapper" ng-controller="MyCtrl">
			<form action="/sistel/sinyal" method="post">
				<input class="input-phone" type='number' name="value" phone-input ng-model="phoneVal" />
				@csrf
				<button type="submit" class="btn btn-outline-success">KONVERSI</button>
			</form>
        </div>
    </div>
</body>

</html>
