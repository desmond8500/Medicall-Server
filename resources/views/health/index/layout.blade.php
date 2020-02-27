<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href={{ asset('health/styles/bootstrap4/bootstrap.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('health/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }} >
    <link rel="stylesheet" type="text/css" href={{ asset('health/styles.css') }} >

    <link rel="stylesheet" type="text/css" href={{ asset('health/styles/main_styles.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('health/styles/responsive.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('health/styles/styles.css') }}>
    <title>Sante</title>
</head>
<body>
    @include('health.index.navbar')
    @yield('content')
</body>
    <script src="{!! asset('health/js/jquery-3.3.1.min.js') !!}"></script>
    <script src="{!! asset('health/styles/bootstrap4/popper.js') !!}"></script>
    <script src="{!! asset('health/styles/bootstrap4/bootstrap.min.js') !!}"></script>
</html>
