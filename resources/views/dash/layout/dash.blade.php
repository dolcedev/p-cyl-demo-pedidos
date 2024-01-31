<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? "Dashboard | CYL"}}</title>

    <link rel="icon" href="{{asset("imgs/CYL-ico.png")}}" type="image/x-icon">

    {{-- Font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- TODO: todo en uno --}}
    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    @yield('css')
</head>
<body>

    @include('dash.layout._sidebar')

    <div id="right-side">

        @include('dash.layout._navbar')

        <div id="main">

            <div id="content">


                <div id="mobile-sidebar-secondary">
                    <i class="fa fa-chevron-left"></i>
                    <span>Abrir filtros</span>
                </div>


                @yield('content')
            </div>

            @include('dash.layout._sidebar-secondary')

        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('js/custom.js')}}"></script>

    @yield('js')

</body>
</html>
