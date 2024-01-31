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
        <li class="navbar-item">
            <a href="#">Home</a>
        </li>
        <li class="navbar-item-account">
            <img src="{{asset('imgs/nophoto.jpg')}}" alt="Foto usuario">
            <div class="account-menu">
                <a href="{{route('dash.pedidos')}}">Pedidos</a>
                <a href="">Log out</a>
            </div>
        </li>
    </ul>

</div>
