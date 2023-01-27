<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Administration</title>
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('admin/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/theme1.css')}}">
</head>
<body class="font-roboto">
<div id="app"></div>
<script src="{{ mix('admin/js/app.js') }}"></script>
</body>
</html>
