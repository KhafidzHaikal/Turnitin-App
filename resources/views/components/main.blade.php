<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="https://turnitin-unitedstates-live.webscale.support/system/favicon/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/4c316a7186.js" crossorigin="anonymous"></script>
</head>

<body>
    @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])

    @include('components.navbar')
    <div class="card">
        <header>
            <h1>@yield('title')</h1>
            <ol class="breadcrumb">
                @section('breadcrumb')
                    <li class="breadcrumb-item {{ Request::is('dashboard') ? 'active' : '' }}"><a
                            href="{{ route('dashboard') }}">Dasboard</a>
                    </li>
                @show
            </ol>
        </header>
        <main>
            @yield('body')
        </main>
    </div>

    @include('components.footer')

    @stack('scripts')
    <script src={{ asset('js/script.js') }} type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-2.1.0/datatables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-2.1.0/datatables.min.js"></script>
</body>

</html>
