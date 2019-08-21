<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <loiupdate :current="{{ auth()->user() ? auth()->user()->id : 0 }}"></loiupdate>
                </div>
            </div>
        </div>
    </div>
<script src="{{mix('/js/app.js')}}"></script>
</body>
</html>