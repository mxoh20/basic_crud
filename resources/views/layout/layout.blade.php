<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Home')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>
<div class="container">
    <div class="column">
        <nav class="breadcrumb is-medium" aria-label="breadcrumbs">
            <ul>
                <li><a href="{{url('devices')}}">Home</a></li>
                <li><a href="{{url('devices/create')}}">Add</a></li>
            </ul>
        </nav>


        @include('sweetalert::alert')
        <section class="hero is-primary">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        @yield('subtitle', 'Default Content')
                    </h1>
                    <h2 class="subtitle">
                        Primary subtitle
                    </h2>
                </div>
            </div>
        </section>

        <div class="column">
            @yield('content')
        </div>
    </div>

</div>
</body>
</html>
