<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="~bulma-calendar/dist/css/bulma-calendar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
    <script src="https://kit.fontawesome.com/89e26daa45.js" crossorigin="anonymous"></script>
    <script src="~bulma-calendar/dist/js/bulma-calendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
        <title>KA4 Dashboard</title>
</head>
<body>

</body>
@include('common.navbar')
@yield('content')

<script src="/js/app.js"></script>
</html>
