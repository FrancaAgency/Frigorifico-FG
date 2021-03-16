<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" 
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" 
    crossorigin="anonymous"></script>
    
    <title>Modulo administrador</title>
</head>
<body>
    <header>
        @include('dashboard.partials.nav-header-main')
    </header>
    <div class="container">
        @include('dashboard.partials.session-flash-status')
        <div class="row">
            
            <div class="col-md-12">
                @yield('content')
            </div>
           
        </div>
    </div>

    <script src="{{ asset("js/app.js") }}"></script>
</body>
</html>