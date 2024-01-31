<div id="navbar">

    <div>
        <a href="#" class="mobile-menu-toogle">
            <i class="fa-solid fa-bars"></i>
        </a>
    </div>

    <ul>
        <li class="navbar-item">
            <div>
                <div class="toogle-mode">
                    <i class="fa-solid fa-sun"></i>
                    <i class="fa-solid fa-moon"></i>
                    <span class="toogle-mode-btn"></span>
                </div>
            </div>
        </li>
        <li class="navbar-item" style="max-width:120px;overflow:hidden;text-overflow: ellipsis;white-space: nowrap;">
            {{--  --}}
            {{auth()->user()->name}}
        </li>
        <li class="navbar-item-account">
            <img src="{{asset('imgs/nophoto.jpg')}}" alt="Foto usuario">
            <div class="account-menu">
                <a href="{{route('dash.pedidos')}}">Pedidos</a>
                <a href="" class="logout-button-js">Log out</a>

                <form class="logout-form-js" action="{{route('logout')}}" method="POST" style="display: none;"> @csrf </form>
                <script>
                    document.querySelector('.logout-button-js').addEventListener('click', function(e) {
                        e.preventDefault();
                        document.querySelector('.logout-form-js').submit();
                    });
                </script>
            </div>
        </li>
    </ul>

</div>
