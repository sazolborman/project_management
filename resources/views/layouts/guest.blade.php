<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="" name="description" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="" name="author" />
        <title>Login | Ekator 8</title>
        <!-- all the meta tags -->
        
        <!-- all the css files -->
        <link rel="shortcut icon" href="{{asset('/images/logo.png')}}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="{{asset('/vendors/bootstrap-5.1.3/css/bootstrap.min.css')}}">
        <!--Custom css-->
        <link rel="stylesheet" type="text/css" href="{{asset('/css/custom.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/vendors/bootstrap-icons-1.8.1/bootstrap-icons.css')}}">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body >
        <div >
            <div>
                
            </div>
            <div>
                {{ $slot }}
            </div>
        </div>
    </body>
</html>